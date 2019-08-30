@extends('backend.adminMaster')

@section('title','| Author')

@section('sunam')
	<div class="col-md-10">
		<a href="{{ route('addAuthor') }}"><button class="btn btn-primary">ADD Author</button></a>
		<h1>Author Detail Information</h1>
		
		<!-- Success session msg display -->
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif

		<table class="table table-striped">
			<thead>
				<th>Name</th>
				<th>address</th>
				<th>email</th>
				<th>contact</th>
				<th>username</th>
				<th class="text-primary">Edit</th>
				<th class="text-danger">Delete</i></th>
			</thead>
			
			@foreach($data as $val)
				<tr>
					<td>{{ $val->name }}</td>
					<td>{{ $val->address }}</td>
					<td>{{$val->email }}</td>
					<td>{{ $val->contact }}</td>
					<td>{{ $val->username }}</td>
					<!-- <td>{{ $val->password }}</td> -->
					<td>
						<a href="{{ route('editAuthor',['id'=>$val->id]) }}">
							<button class="btn btn-primary">
								<i class="glyphicon glyphicon-pencil"></i>
							</button>
						</a>
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
												<button type="button" class="close btn btn-info" data-dismiss="modal"><span>&times;</span></button>
												<h1>!!! Delete Confirmation !!!</h1>
											</div>
											<div class="modal-body">
												Are you sure ????<br>
												You want to delete this
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