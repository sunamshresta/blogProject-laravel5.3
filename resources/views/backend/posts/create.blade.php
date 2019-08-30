@extends('backend.adminMaster')

@section('sunam')
	<div class="col-md-10">
		<h1 class="text-center">Add News posts</h1>
		<hr>
		<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="" class="form-control">
				<span class="text-danger">{{ $errors->first('title') }}</span>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
				<span class="text-danger">{{ $errors->first('description') }}</span>
			</div>
			<div class="form-group">
				<label for="author">Author</label>
				<input type="text" name="author" id="" class="form-control">
				<span class="text-danger">{{ $errors->first('author') }}</span>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="" class="form-control">
				<span class="text-danger">{{ $errors->first('image') }}</span>
			</div>
			
			<div class="form-group">
				<label for="date">Published Date</label>
				<input type="date" name="date" id="" class="form-control">
				<span class="text-danger">{{ $errors->first('date') }}</span>
			</div>
			<div class="form-group">
				<label for="status">Status</label><br>
				<input type="radio" name="status" value="yes">show
				<input type="radio" name="status" value="no">hide
				<span class="text-danger">{{ $errors->first('status') }}</span>
			</div>
			<div class="">
				<input class="btn btn-success" type="submit" name="submit" value="ADD Post">
			</div>

		</form>
	</div>
@endsection