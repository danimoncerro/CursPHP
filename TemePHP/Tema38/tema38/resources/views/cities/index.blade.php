@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h1>Orase</h1>

			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>County</th>
				</tr>

				@foreach($cities as $city)
					<tr>
						<td>{{ $city->id }}</td>
						<td>{{ $city->name }}</td>
						<td>{{ $city->county->name }}</td>
					</tr>
				@endforeach

			</table>
		</div>
	</div>
	</div>			


@endsection

