<div class="flex py-2 my-3">
    <div class="flex-none w-48 relative">
        <img src="{{ $imagem }}" alt="" class="absolute inset-0 w-full h-full object-cover" />
    </div>
    <div class="flex-auto p-6">
        <form>
            <div class="flex flex-wrap">
                <h1 class="flex-auto text-xl font-semibold">
                    {{ $nome }}
                </h1>
                <div class="text-xl font-semibold text-purple-900">
                    Preço R$ {{ $preco  }}
                </div>
            </div>
            <div class="flex items-baseline mt-4 mb-6">
                <div class="space-x-2 flex w-full">
                    <table class="w-full">
                        <tr >
                            <td class="rounded">
                                <span class="font-bold" >Ano: </span>
                                <span class="font-semibold text-gray-600">{{ $ano }}</span>
                            </td>
                            <td class="rounded">
                                <span class="font-bold" >Quilometragem: </span>
                                <span class="font-semibold text-gray-600">{{ $quilometragem }}</span>
                            </td>
                        </tr>

                        <tr>

                            <td class="rounded">
                                <span class="font-bold" >Combustível: </span>
                                <span class="font-semibold text-gray-600">{{ $combustivel }}</span>
                            </td>
                            <td class="rounded">
                                <span class="font-bold" >Câmbio: </span>
                                <span class="font-semibold text-gray-600">{{ $cambio }}</span>
                            </td>
                        </tr>

                        <tr>

                            <td class="rounded">
                                <span class="font-bold" >Portas: </span>
                                <span class="font-semibold text-gray-600">{{ $portas }}</span>
                            </td>
                            <td class="rounded">
                                <span class="font-bold" >Cor: </span>
                                <span class="font-semibold text-gray-600">{{ $cor }}</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>

        <div>
            <div>
                <form action="/deletecar/{{ $id }}" method="post">
                    @method("DELETE")
                    @csrf
                    <button  type="submit" class="w-1/3 flex items-center justify-center rounded-md bg-red-500 text-white">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
