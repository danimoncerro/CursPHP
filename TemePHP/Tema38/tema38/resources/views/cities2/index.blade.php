@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Orase2</h1>
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Judet</th>
				</tr>
				@foreach($cities2 as $city2)
					<tr>
						<td>{{ $city2->id }}</td>
						<td>{{ $city2->name }}</td>
						<td>{{ $city2->county2_id }}
					</tr>
				@endforeach
			</table>
		</div>
	</div>
	</div>

@endsection

