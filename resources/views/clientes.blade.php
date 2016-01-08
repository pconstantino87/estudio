@extends('app')
@section('content')
<div id="page-wrapper">
<h1>Clientes</h1>
<table >	
	<tr>
		<th>Artista/Banda</th>
		<th>Email</th>
		<th>Telefone</th>
	</tr>
	@foreach($clientes as $cliente) 
	<tr>
		<th>{{ $cliente->nome }}</th>
		<th>{{ $cliente->email }}</th>
		<th>{{ $cliente->telefone }}</th>		
	</tr>
	@endforeach
</table>
</div>
@endsection
