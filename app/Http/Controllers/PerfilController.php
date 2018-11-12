<?php

namespace App\Http\Controllers;

use App\Estabelecimentos;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;


class PerfilController extends Controller
{
    public function index(User $id){
        $estab = Estabelecimentos::where('user_id','=',$id->id)->get();
        return view('user.perfil',['user' => $id,'estab' => $estab]);
    }


}
