@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table bordered">
			<tr>
				<th>Id</th>
				<th>Category Name</th>
				<th>Product Count</th>
			</tr>

			@foreach ($categories as $category)
			<tr>
				<td> {{ $category->id }} </td>
				<td> {{ $category->name }} </td>
				<td>
					<a href="/categories/{{ $category->id }}">
						{{ $category->products->count() }}
					</a>
				</td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>
</div>
@endsection



