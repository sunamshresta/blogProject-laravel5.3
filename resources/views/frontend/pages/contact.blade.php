@extends('frontend.master')

@section('content')
<div class="container">
            <div class="row well">
                <div class="col-md-12">
                   <h1><strong>Contact us here</strong></h1>
                </div>
				<div class="cocl-md-12">
					<form action="">
						<div class="form-group">
							<label for="">Name :: </label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Addrsss :: </label>
							<input type="text" name="address" class="form-control">
						</div>
						<div class="form-group">
							<label for="">E-mail :: </label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for=""> Feedback :: </label>
							<textarea rows="20" cols="20" name="feed" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-md-offset-4">
								<input type="reset" name="reset" class="btn btn-warning">
								<input type="submit" name="submit" value="send" class="btn btn-success">
							</div>
						</div>
					</form>
				</div>
            </div>
</div>
@endsection