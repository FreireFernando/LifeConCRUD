@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="pessoas/create" class="btn btn-success">Novo registro</a>
  <br>
  <table class="table table-striped">
  <br>
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>CPF</td>
          <td>Email</td>
          <td>Data de Nascimento</td>
          <td>Nacionalidade</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pessoas as $pessoa)
        <tr>
            <td>{{$pessoa->id}}</td>
            <td>{{$pessoa->pessoa_nome}}</td>
            <td>{{$pessoa->pessoa_cpf}}</td>
            <td>{{$pessoa->pessoa_email}}</td>
            <td>{{$pessoa->pessoa_data_nasc}}</td>
            <td>{{$pessoa->pessoa_nacionalidade}}</td>
            <td><a href="{{ route('pessoas.edit',$pessoa->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ route('pessoas.destroy', $pessoa->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection