@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    + Pessoa
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pessoas.store') }}">
          <div class="form-group">
              {{ csrf_field() }}
              <label for="pessoa_nome">Nome:</label>
              <input type="text" class="form-control" id="pessoa_nome" name="pessoa_nome"/>
          </div>
          <div class="form-group">
              <label for="pessoa_cpf">CPF:</label>
              <input type="text" class="form-control" id="pessoa_cpf" name="pessoa_cpf"/>
          </div>
          <div class="form-group">
              <label for="pessoa_email">Email:</label>
              <input type="email" class="form-control" id="pessoa_email" name="pessoa_email"/>
          </div>
          <div class="form-group">
              <label for="pessoa_data_nasc">Data Nascimento:</label>
              <input type="date" class="form-control" id="pessoa_data_nasc" name="pessoa_data_nasc"/>
          </div>
          <div class="form-group">
              <label for="pessoa_nacionalidade">Nacionalidade:</label>
              <input type="text" class="form-control" id="pessoa_nacionalidade" name="pessoa_nacionalidade"/>
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
          <script type="text/javascript">
            $(document).ready(function(){
                $("#pessoa_cpf").mask("999.999.999-99");
            });
        </script>
      </form>
  </div>
</div>
@endsection