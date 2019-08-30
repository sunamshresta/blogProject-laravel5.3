@extends('backend.adminMaster')

@section('title','| showNews')

@section('sunam')
	<div class="col-md-10">
		<a href="{{ route('posts.index') }}"><button class="btn btn-primary">See all News</button></a>
		<hr>
		
		<!-- Success session msg display -->
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div><hr>
		@endif

		<div class="col-md-7">
			<h1>{{ $post->title }}</h1>
			<p>{{ $post->description }}</p>
			<a href=""><h5>{{ $post->author }}</h5></a>
			<img src="{{ asset('postimage/'.$post->image) }}" alt="" width="300px"><br>
			<p>{{ date('Y M, j',strtotime($post->publish_date)) }}</p>
		</div>
		<div class="col-md-5">
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
						<a href="{{ route('posts.edit',$post->id) }}"><button class="btn btn-primary btn-block">edit</button></a>
					</div>
					<div class="col-md-6">
						<form action="{{ route('posts.destroy',$post->id) }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<input type="submit" name="submit" value="Delete" class="btn btn-danger btn-block">
							
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection