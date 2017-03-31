@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Curse externe</h1>

			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Destinatia</th>
					<th>Compania</th>
				</tr>

				@foreach($externe as $extern)

				<tr>
					<td>{{$extern->id}}</td>
					<td>{{$extern->destinatia}}</td>
					<td>{{$extern->compania}}</td>
				</tr>

				@endforeach

			</table>
		</div>
	</div>
	</div>

@endsection
