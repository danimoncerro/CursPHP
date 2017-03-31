@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Program functionare aeroport</h1>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Ziua</th>
				<th>De la</th>
				<th>Pana la</th>
			</tr>

			@foreach($program as $prog)
				<tr>
					<td>{{$prog->id}}</td>
					<td>{{$prog->ziua}}</td>
					<td>{{$prog->de_la}}</td>
					<td>{{$prog->pana_la}}</td>
				</tr>
			@endforeach
			
			</table>
		</div>
	</div>
	</div>
	
@endsection