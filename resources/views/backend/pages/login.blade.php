<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel | AdminLogin</title>
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
	<style type="text/css">
		.col-md-4{
			margin-top: 120px;

		}
		body{
			background: url({{ asset('img/Magic_Light.jpg') }}) no-repeat;
			background-size: cover;

		}
		label{
			font-family: Terminator Two;
			font-size: 40px;
			color: #00000;
		}
		.btn-top-padding{
			margin-top: 20px;
		}
		#i{
			margin-left: 60px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">

			@if(Session::has('error'))
				<div class="alert alert-danger">
					{{ Session::get('error') }}
				</div>
			@endif
			<div class="col-md-4 col-md-offset-4">
				<form action="{{ route('loginAction') }}" method="post" >
					{{ csrf_field() }}
					{{-- <div id="user-icon" class="img-circle">
						<img src="img/login.png" alt="avatar">
					</div> --}}
					{{-- <div class="form-group" id="i">
						<img src="img/login.png" alt="" class="img-circle">
					</div> --}}

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="uname" placeholder="Enter username" class="form-control">
						<span class="text-danger">{{ $errors->first('uname') }}</span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pname" placeholder="Enter username" class="form-control">
						<span class="text-danger">{{ $errors->first('pname') }}</span>
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="login" class="btn btn-success btn-block btn-top-padding">

					</div>
				</form>
			</div>
		</div>
	</div>



<script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</body>
</html>