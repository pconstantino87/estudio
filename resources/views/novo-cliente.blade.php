@extends('app')
@section('content')
<h2></h2>
<form name="cliente">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="email" class="form-control" id="telefone" placeholder="Telefone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Celular</label>
    <input type="text" class="form-control" id="celular" placeholder="Celular">
  </div>  
  <button type="button" class="btn btn-default" id="enviar">Submit</button>
</form>


@endsection
