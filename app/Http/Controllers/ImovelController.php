<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        $Imoveis = ['Casa01', 'Casa02', 'Apartamento01', 'Apartamento02'];

        return view('Imoveis.index')->with('Imoveis', $Imoveis);
    }

    public function create()
    {
        return view('imoveis.create');
    }
};
