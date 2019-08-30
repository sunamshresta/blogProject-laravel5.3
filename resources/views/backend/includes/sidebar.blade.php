<div class="col-md-2 sidebar">
	<div class="nav navbar-sidebar">
		<li class="{{ Request::is('admin') ? 'active':'' }}"><a href="/admin">Home</a></li>
		<li class="{{ Request::is('admin/addauthor') ? 'active':'' }}"><a href="/admin/addauthor">Add</a></li>
		<li class="{{ Request::is('admin/addimage') ? 'active':'' }}"><a href="/admin/addimage">ADD Image</a></li>
		<li class="{{ Request::is('admin/posts/create') ? 'active':'' }}"><a href="/admin/posts/create">ADD News</a></li>

		

	</div>
</div>