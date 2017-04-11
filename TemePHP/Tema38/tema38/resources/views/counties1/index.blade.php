@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">

		<h1>Judete1</h1>

		<table class="table table-bordered">

			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>
			
			@foreach($counties1 as $county1)

				<tr>
					<td>{{ $county1->id }}</td>
					<td>
						<a href="/counties1/{{ $county1->id }}">
							{{ $county1->name }}
						</a>
					</td>
				</tr>		

			@endforeach
		</table>
		</div>
	</div>
	</div>	


@endsection
