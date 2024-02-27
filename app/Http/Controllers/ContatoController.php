<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MotivoContato;
use App\Models\SiteContato;

class ContatoController extends Controller
{
  public function contato(Request $request)
  {
    // SiteContato::create($request->all());
    $motivo_contatos = MotivoContato::all();

    return view("./site/contato", ['motivo_contatos' => $motivo_contatos]);
  }

  public function salvar(Request $request)
  {

    $regras = [
      'nome' => 'required|min:3|max:40',
      'telefone' => 'required',
      'email' => 'email|unique:site_contatos',
      'motivo_contatos_id' => 'required',
      'mensagem' => 'required|max:2000',
    ];

    $feedback = [
      'nome.min' => "O campo nome precisa ter no minímo 3 caracteres",
      'nome.max' => "O campo nome precisa ter no máximo 40 caracteres",
      'email.email' => 'Formato de email incorreto',
      'email.unique' => 'Este e-mail ja existe',
      'motivo_contatos_id.required' => 'O campo Motivo do contato é obrigatório',
      'required' => 'O campo :attribute é obrigatório'
    ];

    $request->validate($regras, $feedback);
    SiteContato::create($request->all());
    return redirect()->route('site.index');
  }
}
