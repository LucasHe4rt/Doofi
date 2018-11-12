<?php

namespace App\Http\Controllers;

use App\Estabelecimentos;
use App\Http\Requests\EstabelecimentoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstabelecimentoController extends Controller
{
    public function index(){
        $estab = Estabelecimentos::all();

        return view('estabelecimento.index',['estab' => $estab]);
    }

    public function store(){
        return view('estabelecimento.store');
    }

    public function create(EstabelecimentoRequest $request){
        $estab = new Estabelecimentos();
        $estab->name = $request->input('name');
        $estab->user_id = $request->input('user_id');
        $estab->type = $request->input('type');
        $estab->address = $request->input('address');
        $estab->number = $request->input('number');
        $estab->phone = $request->input('phone');
        $estab->description = $request->input('description');
        $estab->save();

        return redirect()->route('perfil.index',Auth::user()->id);
    }

    public function edit(Estabelecimentos $id){

        return view('estabelecimento.edit',['estab' => $id]);

    }

    public function update(Request $request, $id)
    {
        $user = Estabelecimentos::findOrFail($id);

        $data = $request->all();

        $user->update($data);
        return redirect()->route('perfil.index',Auth::user()->id);
    }

    public function delete($id){
        $estab = Estabelecimentos::findOrFail($id);
        $estab->delete();
        return redirect()->back();

    }

    public function bar()
    {
        $bares = Estabelecimentos::where('type', '=', 0)->get();

        return view('bares', ['bares' => $bares]);
    }


    public function lanchonete(){
        $lanch = Estabelecimentos::where('type','=',1)->get();

        return view('lanchonetes',['lanch' => $lanch]);
    }

    public function pizzaria(){
        $pizza = Estabelecimentos::where('type','=',2)->get();

        return view('pizzarias',['pizza' => $pizza]);
    }

    public function pub(){
        $pub = Estabelecimentos::where('type','=',3)->get();

        return view('pubs',['pub' => $pub]);
    }

    public function restaurante(){
        $rest = Estabelecimentos::where('type','=',4)->get();

        return view('restaurantes',['rest' => $rest]);
    }

    public function sorveteria(){
        $sorv = Estabelecimentos::where('type','=',5)->get();

        return view('sorveterias',['sorv' => $sorv]);
    }

    public function todos(){
        $estab = Estabelecimentos::all();

        return view('all',['estab' => $estab]);
    }


}
