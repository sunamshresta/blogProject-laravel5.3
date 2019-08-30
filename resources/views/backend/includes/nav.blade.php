<div class="container ">
	<nav id="navi" class="navbar navbar-inverse" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/admin">Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('admin') ? 'active':'' }}"><a href="/admin" ><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</a></li>
        <li class="{{ Request::is('admin/author') ? 'active':'' }}"><a href="/admin/author"><i class="glyphicon glyphicon-user"></i>  Author</a></li>
        <li class="{{ Request::is('admin/gallary') ? 'active':'' }}"><a href="/admin/gallary"><i class="glyphicon glyphicon-picture"></i>  Gallary</a></li>
        <li class="{{ Request::is('admin/posts') ? 'active':'' }}"><a href="/admin/posts"><i class="glyphicon glyphicon-edit"></i>  Post</a></li>
        

      </ul>
      {{-- <form action="{{ route('Logout') }}" method="post" class="navbar-form navbar-right">
            {{ csrf_field() }}
            <input type="submit" name="logoutbtn" value="logout" class="btn btn-default">
      </form> --}}
      <ul class="nav navbar-nav pull-right" id="sout">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="text-primary">Wel-Come !  <span class="h4 text-success">{{ Auth::user()->name }}</span></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="">Profile   <i class="glyphicon glyphicon-user"></i></a></li>
                <li><a href="">Setting   <i class="glyphicon glyphicon-cog"></i></a></li>
                <li>
                  <a href="{{ route('Logout') }}" onclick="event.preventDefault();
                  document.getElementById('flogout').submit();">
                    Logout
                  </a>
                  <form id="flogout" action="{{ route('Logout') }}" method="post" class="" style="display: none;">
                      {{ csrf_field() }}
                      {{-- <input type="submit" name="logoutbtn" value="logout" class="form-control"> --}}
                     
                  </form>
                </li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>

      

      
    </div><!-- /.navbar-collapse -->
  
</nav>
</div>