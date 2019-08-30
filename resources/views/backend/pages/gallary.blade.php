@extends('backend.adminMaster')

@section('title','| Gallary')

@section('sunam')
	<div class="col-md-10">
		<a href="{{ route('addImage') }}">
			<button class="btn btn-primary">ADD Image</button>
		</a>
		<hr>
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif
		<h1 class="text-center">Image Gallary</h1>
		<hr>

		<table class="table table-bodered">
			<thead>
				<th>ID</th>
				<th>Image</th>
				<th>caption</th>
				<th>update</th>
				<th>Remove</th>
			</thead>
			@foreach($item as $val)
				<tr>
					<td>{{ $val->id }}</td>
					<td><img src="{{ asset('images/'.$val->image) }}" alt="" width="100"></td>
					<td>{{ $val->title }}</td>
					<td>
						<a href="/admin/editimg/{{$val->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a>
						<!-- <form action="{{ route('editImage',['id'=>$val->id]) }}" method="post">
							{{ csrf_field() }}
							
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mm">
									<i class="glyphicon glyphicon-pencil"></i>
							</button>
								<div class="modal fade" id="mm" role="dialog" data-keyboard="false">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close btn btn-info" data-dismiss="modal"><span>&times;</span></button>
												<h1>!!! Image Delete Confirmation !!!</h1>
											</div>
											<div class="modal-body">
												<div class="modal-form">
													<input type="hidden" name="id" value="{{ $val->id }}">
													<div class="form-group">
														<label for="capp">caption</label>
														<input type="text" name="title" value="{{ $val->title }}" class="form-control">
														<span class="text-danger">{{ $errors->first('cap') }}</span>
													</div>
													<div>
														<img src="{{ asset('images/'.$val->image) }}"  width="100" name="oldname" value="{{ $val->image }}">
													</div>
													<div class="form-group">
														<label for="img">Image</label>
														<input type="file" name="newname" value="{{ $val->image }}" class="form-control">
														<span class="text-danger">{{ $errors->first('img') }}</span>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class=" btn btn-info" data-dismiss="modal">close</button>
												<button type="submit" class="btn btn-success">Save Changes</button>

											</div>

										</div>
									</div>
								</div>	
						</form> -->
					</td>
					<td>
						<form action="{{ route('deleteAuthor',['id'=>$val->id]) }}" method="post">
							{{ csrf_field() }}
							
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mm">
									<i class="glyphicon glyphicon-trash"></i>
							</button>
								<div class="modal fade" id="mm" role="dialog" data-keyboard="false">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismis="modal"><span>&times;</span></button>
												<h1>!!! Image Delete Confirmation !!!</h1>
											</div>
											<div class="modal-body">
												Are you sure ????<br>
												You want to delete this image
											</div>
											<div class="modal-footer">
												<button type="button" class=" btn btn-info" data-dismiss="modal">close</button>
												<button type="submit" class="btn btn-success">Save Changes</button>

											</div>

										</div>
									</div>
								</div>	
						</form>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection