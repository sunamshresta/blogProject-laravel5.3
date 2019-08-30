@extends('backend.adminMaster')

@section('title','| editNews')

@section('sunam')
	<div class="col-md-10">
		<a href=""><button class="btn btn-primary">add news</button></a>
		<hr>

		@if(count($errors)>0)
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
		<div class="col-md-12">
		<form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
			
			<div class="col-md-8">
				<input type="hidden" name="_method" value="PATCH">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $post->id }}">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" value="{{ $post->title }}">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea rows="10" cols="30" name="description" class="form-control">{{ $post->description }}</textarea>
				</div>
				<div class="form-group">
					<label for="author">Author</label>
					<input type="text" name="author" class="form-control" value="{{ $post->author }}">
				</div>
				<div class="form-group">
					<label for="image">Image</label><br>
					<img src="{{ asset('postimage/'.$post->image) }}" name="img" value="{{ $post->image }}" alt="" width="200">
					<input type="file" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="status">Status</label><br>
					<input type="radio" name="status" value="yes"{{ $post->status == 'yes' ? 'checked':'' }}>Show &nbsp;
					<input type="radio" name="status" value="no" {{ $post->status =='no' ? 'checked':'' }}>Hide
				</div>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At: </dt>
						<dd>{{ date('Y M, j',strtotime($post->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Updated At: </dt>
						<dd>{{ date('Y M, j',strtotime($post->updated_at)) }}</dd>
					</dl>
					<div class="row">
						<div class="col-md-6">
							<a href="{{ route('posts.show',$post->id) }}"><button class="btn btn-danger btn-block">Cancel</button></a>
						</div>
						<div class="col-md-6">
							<input type="submit" name="submit" value="SaveChange" class="btn btn-success btn-block">
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
@endsection