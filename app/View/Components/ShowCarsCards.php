<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowCarsCards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $imagem;
    public $nome;
    public $preco;
    public $ano;
    public $quilometragem;
    public $combustivel;
    public $cambio;
    public $portas;
    public $cor;
    public $id;

    public function __construct($imagem, $nome, $preco, $ano, $quilometragem, $combustivel, $cambio, $portas, $cor, $id)
    {
        $this->imagem = $imagem;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
        $this->combustivel = $combustivel;
        $this->cambio = $cambio;
        $this->portas = $portas;
        $this->cor = $cor;
        $this->id =$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.show-cars-cards');
    }
}
