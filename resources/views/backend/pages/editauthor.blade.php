@extends('backend.adminMaster')

@section('title','| EditAuthor')

@section('sunam')
	<div class="col-md-10">
		<h3 class=" text-center" style="text-decoration: underline;">Edit Author detail information</h3>
		<hr>

		<form action="{{ route('editAction') }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $item->id }}">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="aname" value="{{ $item->name }}" class="form-control">
				<span class="text-danger">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" id="add" value="{{ $item->address }}" class="form-control">
				<span class="text-danger">{{ $errors->first('address') }}</span>
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="e" value="{{ $item->email }}" class="form-control">
				<span class="text-danger">{{ $errors->first('email') }}</span>
			</div>
			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="text" name="contact" id="c" value="{{ $item->contact }}" class="form-control">
				<span class="text-danger">{{ $errors->first('contact') }}</span>
			</div>
			<div class="form-group">
				<label for="uname">Username</label>
				<input type="text" name="uname" id="u" value="{{ $item->username }}" class="form-control" readonly="">
				<span class="text-danger">{{ $errors->first('uname') }}</span>
			</div>
			<!-- <div class="form-group">
				<label for="pname">Password</label>
				<input type="text" name="pname" id="p" value="{{ $item->password }}" class="form-control">
				<span class="text-danger">{{ $errors->first('pname') }}</span>
			</div>
			<div class="form-group">
				<label for="cnfp">confirm password</label>
				<input type="text" name="cnfp" id="cp" value="{{ $item->password }}" class="form-control">
				<span class="text-danger">{{ $errors->first('cnfp') }}</span>
			</div> -->
			<hr>
			<div class="col-md-offset-5">
				<input class="btn btn-success" role="button" type="submit" name="submit" value="UPDATE">
			</div>
		</form>
		<hr>
	</div>
@endsection