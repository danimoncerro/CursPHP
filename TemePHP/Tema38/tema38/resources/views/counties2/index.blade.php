@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Judete2</h1>
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr> 
				@foreach($counties2 as $county2)
					<tr>
						<td>{{ $county2->id }}</td>
						<td>
							<a href="counties2/{{$county2->id}}">
								{{ $county2->name }}
							</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
	</div>
		

@endsection