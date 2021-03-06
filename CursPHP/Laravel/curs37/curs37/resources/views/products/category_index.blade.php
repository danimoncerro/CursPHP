@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h1>{{ $category->name }} ( {{ $category->products->count() }})</h1>

			<table class="table table bordered">
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Category</th>
			</tr>

			@foreach ($products as $product)
			<tr>
				<td> {{ $product->id }} </td>
				<td> {{ $product->title }} </td>
				<td> {{ $product->price }} </td>
				<td> {{ $product->stock }} </td>
				<td> {{ $product->category->name }} </td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>
</div>
@endsection



