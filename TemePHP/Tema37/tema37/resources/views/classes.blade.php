@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Classes</h1>

				<table class="table table-bordered">
					<tr>	
						<th>ID</th>
						<th>Name</th>
						<th>Year of study</th>
					</tr>

					@foreach($classes as $class)
						<tr>
							<td>{{ $class->id }}</td>
							<td>{{ $class->name }}</td>
							<td>{{ $class->year_of_study }}</td>
						</tr>
					@endforeach

				</table>
			</div>
		</div>
	</div>

@endsection

