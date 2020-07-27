@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>Nickname - {{ $data->nickname }} </h3>
	<h3>Real Name - {{ $data->real_name }}</h3>
	<h3>Origin description - {{ $data->origin_description }}</h3>
	<h3>Superpowers - {{ $data->superpowers }}</h3>
	<h3>Catch phrase - {{ $data->catch_phrase }}</h3>
</div>
@endsection
