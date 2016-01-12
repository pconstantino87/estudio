@extends('app')
@section('content')
<h2>Clientes</h2>
<table class="table table-bordered table-striped">	
	<thead>
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Telefone</th>
	</tr>
	</thead>
	@foreach($clientes as $cliente) 
	<tbody>
	<tr>
		<th>{{ $cliente->nome }}</th>
		<th>{{ $cliente->email }}</th>
		<th>{{ $cliente->telefone }}</th>		
	</tr>
	</tbody>	
	@endforeach
</table>

@endsection
