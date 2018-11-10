<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

    }


    public function edit(User $id){

    }

    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $data = $request->all();
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            $data['password'] = $user->password;
        };
        $user->update($data);
    }

    public function perfil(User $id){

    }
}
