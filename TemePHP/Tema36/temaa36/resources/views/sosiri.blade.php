@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Orar Sosiri</h1>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Ora aterizarii</th>
				<th>De la</th>
				<th>Compania</th>
			</tr>

			@foreach($sosiri as $sosire)

			<tr>
				<td>{{$sosire->id}}</td>
				<td>{{$sosire->ora_aterizarii}}</td>
				<td>{{$sosire->de_la}}</td>
				<td>{{$sosire->compania}}</td>
			</tr>

			@endforeach

			</table>
		</div>
	</div>
	</div>	
@endsection;


