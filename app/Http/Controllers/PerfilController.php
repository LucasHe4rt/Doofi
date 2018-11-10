<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(User $id){
        return view('user.perfil',['user' => $id]);
    }


}
