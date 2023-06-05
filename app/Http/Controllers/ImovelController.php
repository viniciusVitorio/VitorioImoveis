<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Imoveis;
use Illuminate\Http\Request;


class ImovelController extends Controller
{
    public function index()
    {
        $Imoveis = Imoveis::All();

        return view('Imoveis.index')->with('Imoveis', $Imoveis);
    }

    public function create()
    {
        return view('imoveis.create');
    }

    public function store(Request $request)
    {
        $nomeImovel = $request->input('nome');
        $precoImovel = $request->input('preço');

        $Imoveis = new Imoveis();
        $Imoveis->nome = $nomeImovel;
        $Imoveis->preco = $precoImovel;
        $Imoveis->save();

        return redirect('/imoveis');
    }
};
