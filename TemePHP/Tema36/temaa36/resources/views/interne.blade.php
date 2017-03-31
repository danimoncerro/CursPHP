@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Curse interne</h1>

			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Destinatia</th>
					<th>Compania</th>
				</tr>

				@foreach($interne as $intern)

				<tr>
					<td>{{$intern->id}}</td>
					<td>{{$intern->destinatia}}</td>
					<td>{{$intern->compania}}</td>
				</tr>

				@endforeach

			</table>
		</div>
	</div>
	</div>

@endsection