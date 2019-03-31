<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  	<li>
  		<p class="m-2"> </p>
  		<div class="divider"></div>
	  	<a href="{{ route('logout') }}" class=" waves-effect waves-red "
	       onclick="event.preventDefault();
	                     document.getElementById('logout-form').submit();">
	        <span class="black-text">Salir</apan>
	        <span class="material-icons right red-text">close</span>
	    </a>

	    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	        @csrf
	    </form>
	</li>
</ul>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper  grey darken-4">
            <div class="nav-wrapper ">
                <a class="brand-logo ">
                    LRNUQ      
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="icon-large material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
			        <li>
			        	<a class="waves-effect waves-light" href="{{url('')}}">Inicio</a>
			        </li>
			        <li>
			        	<a class="waves-effect waves-light" href="{{url('documentacion')}}">Documentacion</a>
			        </li>
			        @guest
			        <li>
			        	<a class="waves-effect waves-light" href="{{url('login')}}">Ingresar</a>
			        </li>
			        <li>
			        	<a class="waves-effect waves-light" href="{{url('register')}}">Registro</a>
			        </li>
				        
			        @else
			        @role('administrador')
			        <li>
			        	<a class="waves-effect waves-light" href="{{route('users.index')}}">Usuarios</a>
			        </li>
          			@endrole
			        <li>
			        	<a class="waves-effect waves-light" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Plantas</a>
			        </li>
			        <!-- Dropdown Trigger -->
      				<li>
      					<a class="dropdown-trigger truncate" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
      				</li>
      				@endguest
		      	</ul>
            </div>
        </div>
    </nav>
</div> 

<ul class="sidenav black left " id="mobile-demo">
	<li>
		<h4 class=" white-text center">
            LRNUQ      
        </h4>        
        <hr> 
	</li>

    <li >
		<a class="white-text waves-effect waves-light"  href="{{url('')}}">Inicio</a>
	</li>
	<li>
		<a class="white-text waves-effect waves-light" href="{{url('documentacion')}}">Documentacion</a>
	</li>
	@guest
	<li>
		<a class="white-text waves-effect waves-light" href="{{url('login')}}">Ingresar</a>
	</li>
	<li>
		<a class="white-text waves-effect waves-light" href="{{url('register')}}">Registro</a>
	</li>

	@else
	@role('administrador')
	<li>
		<a class="white-text" href="{{route('users.index')}}">Usuarios</a>
	</li>
	@endrole
	<li>
		<a class="white-text waves-effect waves-light" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Plantas</a>
	</li>
	<!-- Dropdown Trigger -->
	<li>
	  	<a href="{{ route('logout') }}" class=" waves-effect waves-red "
	       onclick="event.preventDefault();
	                     document.getElementById('logout-form').submit();">
	        <span class="white-text">Salir</apan>
	    </a>

	    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	        @csrf
	    </form>
	</li>
	@endguest
  </ul>