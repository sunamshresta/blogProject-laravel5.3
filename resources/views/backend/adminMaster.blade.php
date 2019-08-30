@include('backend.includes.head')
		@include('backend.includes.header')
		@include('backend.includes.nav')
		
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				@include('backend.includes.sidebar')
    				@yield('sunam')
    			</div>
    		</div>
    	</div>
		@include('backend.includes.footer')
@include('backend.includes.foot')

	