@extends('frontend.master')

@section('content')
<div class="container">
            <div class="row ">
                <div class="col-md-12">
                	<hr style="background-color:black;height: 2px;width: 80%;">
                   <center><h1>Author Details</h1></center>
                   <hr style="background-color:black;height: 2px;width: 80%;">
                </div>
                <div class="col-md-12">
               		@foreach($author as $a)
               			<center>
               				<ul style="list-style: none;">
	               				<li>Name :: {{ $a->name }}</li>
	               				<li>Address :: {{ $a->address }}</li>
	               				<li>Email :: {{ $a->email }}</li>
	               				<li>Contact ::{{ $a->contact }}</li>
	               				<li>Username ::{{ $a->username }}</li>
								
	               			</ul>
	               		</center>
               			<hr style="background-color:gray;height: 2px;">
               		@endforeach
                </div>

            </div>
</div>
@endsection