<?php

namespace App\Http\Controllers;

use App\Facade\SyncTagsKeystoArrays;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function contentsTagsRequest($url, $nome, $tag_shell_start, $tag_shell_ends, $tag_separator_only_name)
    {
        $url .= $nome;
        $tag = '<'.$tag_separator_only_name;


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        $pos_start = strpos($output, $tag_shell_start);
        $pos_ends = strpos($output, $tag_shell_ends);

        $content = $pos_ends - $pos_start;

        $articles_dirty =  substr($output, $pos_start , $content);
        $articles_treatmented = trim(preg_replace('/\s\s+/', ' ', $articles_dirty));
        $articles_arr = explode($tag, $articles_treatmented);
        array_shift($articles_arr);


        $tags = [];
        foreach ($articles_arr as $article){
            $start_tag =  $tag.$article;
            array_push($tags,$start_tag );
        }

        return $tags;

    }

    public function findAndSaveCars($cars_collection)
    {
        $cars = [];

        foreach ($cars_collection as $car) {
            $carro = Car::firstOrCreate($car);
            array_push($cars, $carro);
        }

        return $cars;
    }

    public function finderCar(Request $request)
    {

        $keys_object = ['referencia', 'imagem', 'ano', 'nome', 'quilometragem', 'combustivel', 'cambio', 'portas', 'cor', 'preco'];

        $target = [
            'id="' => '"',
            'src="' => '"',
            '<span class="card-list__title"> Ano: </span> <span class="card-list__info">' => '</span>',
            '<h2 class="card__title ui-title-inner">' => '</h2>',
            '<span class="card-list__title"> Quilometragem: </span> <span class="card-list__info">' => '</span>',
            '<span class="card-list__title"> Combustível: </span> <span class="card-list__info">' => '</span>',
            '<span class="card-list__title"> Câmbio: </span> <span class="card-list__info">' => '</span>',
            '<span class="card-list__title"> Portas: </span> <span class="card-list__info">' => '</span>',
            '<span class="card-list__title"> Cor: </span> <span class="card-list__info">' => '</span>',
            '<span class="card__price-number">&#082;&#036;' => '</span>',
        ];

        $tags = $this->contentsTagsRequest(
            "https://www.questmultimarcas.com.br/estoque?termo=",
            $request->nome,
            "<div id=\"pixad-listing\" class=\"list\">",
            "<ul class=\"pagination\">",
        "article");



            $cars_collection = SyncTagsKeystoArrays::merge_keys_object_with_html_target($tags, $target, $keys_object);
            $cars = $this->findAndSaveCars($cars_collection);

            $message = "";
            if (!$cars) {
                $request->session()->flash('color', 'red');
                $message = "nenhum carro encontrado no banco de dados";
            } else if (!$cars_collection) {
                $request->session()->flash('color', 'red');
                $message = "erro de conexão com o site. não foi possível coletar os dados";
            } else {
                $request->session()->flash('color', 'green');
                $message = "dados coletados e importados com sucesso !!";
            }


            $request->session()->flash('message', $message);
            return view('dashboard', [ 'cars' => $cars ] );

    }

    public function catchCar(Request $request)
    {
        $cars = Car::all();
        return view('listcar',['cars' => $cars]);
    }

    public function deleteCar(Request $request, $id)
    {
        $car = Car::destroy($id);

        if ( $car) {
            $request->session()->flash('delete', 'carro excluído com sucesso !');
        }

        $cars = Car::all();
        return view('listcar',['cars' => $cars]);

    }

    public function catchCarBy(Request $request)
    {

        $nome = $request->nome;
        $cars_filtreded = [];

        $cars = Car::all();
        foreach ($cars as $car) {

            if (str_contains(strtolower($car->__toString()), strtolower($nome)) ) {
                array_push($cars_filtreded, $car);
            }
        }

        return view('listcar',['cars' => $cars_filtreded]);

    }

}
