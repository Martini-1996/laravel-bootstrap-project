<nav style="font-family: 'Lato', cursive; " class="navbar sticky-top font-weight-bold navbar-expand-sm navbar-dark bg-dark
mb-1" >	
	<a href="/" class="navbar-brand  ">Martin Inc.</a>
<div class="ml-auto">
		<ul class="navbar-nav">
		
		<li class="nav-item ">
			<a href="/" 
			 class="
			{{Request::is('/') ? 'active': '' }} nav-link">Home</a></li>	<li class="nav-item">
			<a href="/rooms" 
			 class="
			{{Request::is('rooms')||Request::is('book') ? 'active': '' }} nav-link">Rooms</a>
		</li>	
			<li class="nav-item">
			<a href="/gallery" 
			 class="
			{{Request::is('gallery') ? 'active': '' }} nav-link">Gallery</a></li>
        <li class="nav-item">
			<a href="/about" class="
			{{Request::is('about') ? 'active': '' }} nav-link">About</a></li>
        <li class="nav-item">
			<a href="/contact" class="
			{{Request::is('contact') ? 'active': '' }} nav-link">Contact</a></li>
        <li class="nav-item">
			<a href="/admin" class="
			{{Request::is('admin')||Request::is('login') ? 'active': '' }} nav-link">Administrator</a></li>
			@guest
	    <li class="nav-item ml-3">	
		 	<span class="badge badge-pill badge-info ">
		 	<a href="/rooms" 
			class=" nav-link text-white" ><i class="fa fa-hand-o-right"></i> 
			<div class="d-inline-flex">
			<h5><small>Book Now</small> </h5>
		    </div>
		    </a>
		    </span>
	    </li>
	    @else
	    <li class="dropdown nav-item ml-3">
	    	<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"
	    	>{{ Auth::user()->name }}</a>
	    	<div class="dropdown-menu dropdown-menu-right">
	    		<a href="#" class="dropdown-item" data-toggle="modal" data-target="#myModal">Messages</a>
	    		<div class="dropdown-divider"></div>
	    		<a href="/logout" class="dropdown-item">Logout</a>
	    	</div>
	    </li>
	    @endguest




	</ul>
	</div>
</nav>