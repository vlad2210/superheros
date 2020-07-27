@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back to Home</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
  <label class="col-md-4 text-right">Nickname</label>
  <div class="col-md-8">
   <input type="text" name="nickname" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Real name</label>
  <div class="col-md-8">
   <input type="text" name="real_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
  <div class="form-group">
  <label class="col-md-4 text-right">Origin description</label>
  <div class="col-md-8">
   <input type="text" name="origin_description" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
  <div class="form-group">
  <label class="col-md-4 text-right">Superpowers</label>
  <div class="col-md-8">
   <input type="text" name="superpowers" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
  <div class="form-group">
  <label class="col-md-4 text-right">Catch phrase</label>
  <div class="col-md-8">
   <input type="text" name="catch_phrase" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add New SuperHero" />
	</div>

</form>

@endsection



