@extends('backend.adminMaster')

@section('title','| AddAuthor')

@section('sunam')
	<div class="col-md-10">
		<h3 class=" text-center">Add Author detail information</h3>
		<hr>
		<!-- @if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif -->

		<form action="{{ route('addAction') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="aname" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" id="add" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('address') }}</span>
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="e" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('email') }}</span>
			</div>
			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="text" name="contact" id="c" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('contact') }}</span>
			</div>
			<div class="form-group">
				<label for="uname">Username</label>
				<input type="text" name="uname" id="u" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('uname') }}</span>
			</div>
			<div class="form-group">
				<label for="pname">Password</label>
				<input type="text" name="pname" id="p" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('pname') }}</span>
			</div>
			<div class="form-group">
				<label for="cnfp">confirm password</label>
				<input type="text" name="cnfp" id="cp" placeholder="" class="form-control">
				<span class="text-danger">{{ $errors->first('cnfp') }}</span>
			</div>
			<hr>
			<div class="col-md-offset-5">
				<input class="btn btn-success" role="button" type="submit" name="submit" value="ADD Author">
			</div>
		</form>
		<hr>

	</div>
@endsection