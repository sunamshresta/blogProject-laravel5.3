@extends('backend.adminMaster')

@section('title','| AddImage')

@section('sunam')
	<div class="col-md-10">
		<h1>Add image for the Gallary</h1>
		<hr>
		<form action="{{ route('imageAction') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="cap">caption</label>
				<input type="text" name="cap" id="" class="form-control">
				<span class="text-danger">{{ $errors->first('cap') }}</span>
			</div>
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" name="img" id="" class="form-control">
				<span class="text-danger">{{ $errors->first('img') }}</span>
			</div>
			<div class="">
				<input class="btn btn-success" type="submit" name="submit" value="ADD Image">
			</div>

		</form>
	</div>
@endsection