<div class="container">
	<div class="navbar-header">
	
		<!-- Collapsed Hamburger -->
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	
		<!-- Branding Image -->
		<a class="navbar-brand" href="{{ url('/') }}">TecnoComputadoras</a>
	</div>
	
	<div class="collapse navbar-collapse" id="spark-navbar-collapse">
		<!-- Right Side Of Navbar -->
		<ul class="nav navbar-nav navbar-right">
			<li class="{{ active('blog.home') }}"><a href="{{ route('blog.home') }}">Inicio</a></li>
			<li><a href="#">Contacto</a></li>
			<li><a href="#">Acerca de</a></li>
			<!-- Authentication Links -->
			@if (Auth::guest())
				<li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
			@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>
	
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
					</ul>
				</li>
			@endif
		</ul>
	</div>
</div>