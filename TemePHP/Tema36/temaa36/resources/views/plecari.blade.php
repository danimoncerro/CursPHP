@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Orar Plecari</h1>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Ora decolarii</th>
				<th>Destinatia</th>
				<th>Compania</th>
			</tr>
			
			@foreach ($plecari as $plecare)
			<tr>
				<td>{{ $plecare->id }}</td>
				<td>{{ $plecare->ora_decolarii }}</td>
				<td>{{ $plecare->destinatia }}</td>
				<td>{{ $plecare->compania }}</td>
			</tr>
			@endforeach
			
			</table>
		</div>
	</div>
</div>

@endsection
