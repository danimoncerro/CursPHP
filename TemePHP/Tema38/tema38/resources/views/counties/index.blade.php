@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Judete</h1>

			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>

				@foreach ($counties as $county)
					<tr>
						<td>{{ $county->id }}</td>
						<td>
							<a href="/counties/{{ $county->id }}">
								{{ $county->name }}
							</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
	</div>


@endsection