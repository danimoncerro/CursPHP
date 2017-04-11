@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
		<div class="col-md-12">

			<h1>{{ $county1->name }} ( {{ $county1->cities1->count() }})</h1>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>

			@foreach ($cities1 as $city1)
			<tr>
				<td> {{ $city1->id }} </td>
				<td> {{ $city1->name }} </td>
			</tr>
			@endforeach
			</table>
		</div>
</div>
</div>
@endsection