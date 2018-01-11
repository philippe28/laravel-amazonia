<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidade;

class LocalidadeController extends Controller
{

  public function index()
  {
      $localidades = Localidade::latest()->paginate(5);
      return view('localidades.index',compact('localidade'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create()
  {
      return view('localidades.create');
  }

  public function store(Request $request)
  {
      request()->validate([
          'nome' => 'required',
          'email' => 'required',
          'telefone' => 'required',
          'celular' => 'required',
          'nascimento' => 'required',
          'cep' => 'required',
          'endereco' => 'required',
          'bairro' => 'required',
          'cidade' => 'required',
          'uf' => 'required',

      ]);
      Localidade::create($request->all());
      return redirect()->route('localidades.index')
                      ->with('success','Article created successfully');
  }


}
