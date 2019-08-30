@extends('backend.adminMaster')

@section('title','| ViewPosts')

@section('sunam')
<div class="col-md-10">
	<div class="row">
		<div class="col-md-9">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-3">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>{{--end of row  --}}
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Author</th>
					<th>Image</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					@if(count($posts)==0)
						<tr>
							<td colspan="7">No post found</td>
						</tr>
					@else
						@foreach($posts as $post)
							<tr>
								<th>{{ $post->id }}</th>
								<td>{{ $post->title }}</td>
								<td>{{ substr($post->description, 0,30) }} {{ strlen($post->description)>50 ?'...':'' }}</td>
								<td>{{ $post->author }}</td>
								<td><img src="{{ asset('postimage/'.$post->image) }}" alt="" width="200"></td>
								<td>{{ date('M j,Y',strtotime($post->created_at)) }}</td>
								<td>
									<a href="{{ route('posts.show',$post->id) }}" class="btn btn-default">View</a>
									<a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Edit</a>
								</td>
							</tr>
						@endforeach

					@endif
				</tbody>
			</table>
			<div class="text-center">
				{{ $posts->links() }}
			</div>
		</div>
	</div>
</div>
@endsection