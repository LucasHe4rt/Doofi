<?php

namespace App\Http\Controllers;

use App\Estabelecimentos;
use Illuminate\Http\Request;

class EstabelecimentoController extends Controller
{
    public function index(){
        $estab = Estabelecimentos::all();

        return view('estabelecimento.index',['estab' => $estab]);
    }

    public function store(){
        return view('estabelecimento.store');
    }
}
