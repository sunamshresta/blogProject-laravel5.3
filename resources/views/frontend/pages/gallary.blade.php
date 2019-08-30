@extends('frontend.master')

@section('content')
<div class="container">
            <div class="row well">
                <div class="col-md-12">
                  <center><h1>this is <strong>gallary</strong></h1></center>
                   @foreach($data as $val)
                   <div class="col-lg-3 col-md-4 col-sm-6">
                   		<div class="thumbnail" id="gi">
                   			<p class="text-center text-primary">{{ $val->title }}</p>
                   			<img src="{{ URL::asset('images/'.$val->image) }}" alt="" width="200">
                   		</div>
                   </div>
                   @endforeach
                </div>
                
            </div>
</div>
@endsection