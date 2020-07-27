@extends('parent')

@section('main')

<div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add New SuperHero</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		  <th width="14%">Nickname</th>
		  <th width="10%">Real name</th>
		  <th width="15%">Origin description</th>
		  <th width="15%">Superpowers</th>
		  <th width="15%">Catch phrase</th>
		  <th width="168">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			   <td>{{ $row->nickname }}</td>
			   <td>{{ $row->real_name }}</td>
			   <td>{{ $row->origin_description }}</td>
			   <td>{{ $row->superpowers }}</td>
			   <td>{{ $row->catch_phrase }}</td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection