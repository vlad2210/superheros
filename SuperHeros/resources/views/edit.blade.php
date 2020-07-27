@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back to Home</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
       <label class="col-md-4 text-right">Nickname</label>
       <div class="col-md-8">
        <input type="text" name="nickname" value="{{ $data->nickname }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Real Name</label>
       <div class="col-md-8">
        <input type="text" name="real_name" value="{{ $data->real_name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Origin description</label>
       <div class="col-md-8">
        <input type="text" name="origin_description" value="{{ $data->origin_description }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Superpowers</label>
       <div class="col-md-8">
        <input type="text" name="superpowers" value="{{ $data->superpowers }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Catch phrase</label>
       <div class="col-md-8">
        <input type="text" name="catch_phrase" value="{{ $data->catch_phrase }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



