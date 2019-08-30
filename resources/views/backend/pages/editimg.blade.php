@extends('backend.adminMaster')

@section('title','| EditImage')

@section('sunam')
<div class="col-md-10">
		<h1>Upadte image of the Gallary</h1>
		<hr>
		<form action="{{ route('updateImage') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $imgg->id }}">
			<div class="form-group">
				<label for="capp">caption</label>
				<input type="text" name="title" value="{{ $imgg->title }}" class="form-control">
				<span class="text-danger">{{ $errors->first('cap') }}</span>
			</div>
			<div>
				<img src="{{ asset('images/'.$imgg->image) }}"  width="100" name="oldname" value="{{ $imgg->image }}">
			</div>
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" name="newname" value="{{ $imgg->image }}" class="form-control">
				<span class="text-danger">{{ $errors->first('img') }}</span>
			</div>
			<div class="">
				<input class="btn btn-success" type="submit" name="submit" value="Update Image">
			</div>

		</form>
</div>
@endsection