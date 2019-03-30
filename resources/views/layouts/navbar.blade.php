<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  	<li>
  		<a href="#" class="center">Para Salir Pulsa en el Icono</a>
  		<div class="divider"></div>
	  	<a class="center red-text" href="{{ route('logout') }} "
	       onclick="event.preventDefault();
	                     document.getElementById('logout-form').submit();">
	        <span class="material-icons center ">close</span>
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
                <a href="{{url('')}}" class="brand-logo left">
                    LRNUQ      
                </a>
                <ul class="right">
			        <li>
			        	<a href="{{url('')}}">Inicio</a>
			        </li>
			        <li>
			        	<a href="{{url('documentacion')}}">Documentacion</a>
			        </li>
			        @guest
			        <li>
			        	<a href="{{url('login')}}">Ingresar</a>
			        </li>
			        <li>
			        	<a href="{{url('register')}}">Registro</a>
			        </li>
				        
			        @else
			        @role('administrador')
			        <li>
			        	<a href="{{route('users.index')}}">Usuarios</a>
			        </li>
          			@endrole
			        <li>
			        	<a href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Plantas</a>
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