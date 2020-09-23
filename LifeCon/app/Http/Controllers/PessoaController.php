<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();

        return view('pessoas.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'pessoa_nome'=>'required',
        'pessoa_cpf'=> 'required',
        'pessoa_email'=> 'required',
        'pessoa_data_nasc'=> 'required',
        'pessoa_nacionalidade' => 'required'
      ]);
      $pessoa = new pessoa([
        'pessoa_nome' => $request->get('pessoa_nome'),
        'pessoa_cpf'=> $request->get('pessoa_cpf'),
        'pessoa_email'=> $request->get('pessoa_email'),
        'pessoa_data_nasc'=> $request->get('pessoa_data_nasc'),
        'pessoa_nacionalidade'=> $request->get('pessoa_nacionalidade')
      ]);
      $pessoa->save();
      return redirect('/pessoas')->with('success', 'This register has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::find($id);

        return view('pessoas.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'pessoa_nome'=>'required',
        'pessoa_cpf'=> 'required',
        'pessoa_email'=> 'required',
        'pessoa_data_nasc'=> 'required',
        'pessoa_nacionalidade' => 'required'
      ]);

      $pessoa = Pessoa::find($id);
      $pessoa->pessoa_nome = $request->get('pessoa_nome');
      $pessoa->pessoa_cpf = $request->get('pessoa_cpf');
      $pessoa->pessoa_email = $request->get('pessoa_email');
      $pessoa->pessoa_data_nasc = $request->get('pessoa_data_nasc');
      $pessoa->pessoa_nacionalidade = $request->get('pessoa_nacionalidade');
      $pessoa->save();

      return redirect('/pessoas')->with('success', 'This register has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

      return redirect('/pessoas')->with('success', 'This register has been deleted successfully');
    }
}
