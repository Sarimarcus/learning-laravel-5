@extends('app')

@section('content')

<div class="content">
	@if (count($people))
		<h1>People i like : </h1>
		<ul>
			@foreach ($people as $person)
			<li>{{ $person }}</li>
			@endforeach
		</ul>
	@endif

</div>

@stop
