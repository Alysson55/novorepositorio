<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Cadastro::create([
            'nomecompleto'=> $request->nomecompleto,
            'cpf'=> $request->cpf,
            'endereco'=> $request->endereco,
            'nomedopai'=> $request->nomedopai,
            'nomedamae'=> $request->endereco,

            
        ]);
         return redirect('/cadastro/store');
    }

    public function show($id)
    {
    
        $Cadastro = Cadastro::find($id);
        return view ('show', compact('place'));
    }

    public function update($id, Request $request)
    { 
        $Cadastro = Cadastro::find($id);
        $Cadastro->update([
            'nomecompleto'=> $request->nomecompleto,
            'cpf'=> $request->cpf,
            'endereco'=> $request->endereco,
            'nomedopai'=> $request->nomedopai,
            'nomedamae'=> $request->endereco,
        ]);
        return redirect('/cadastro/update');
    }

    public function edit($id)
    {
        $Cadastro = Cadastro::find($id);
        return view('edit', compact('places'));
    }

    public function delete($id)
    {
        $Cadastro = Cadastro::find($id);
        $Cadastro->delete();
        return redirect('/cadastro/delete');
    }
}
