@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">

@endsection
@section('titulo')
    <title>Noticias</title>
@endsection
@section('contenido')

	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Noticias</a></h1>
							</header>
						</div>

					<!-- Nav -->
            <nav id="nav">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
						<li><a href="{{route('Foro.index')}}">Foro</a></li>
						<li><a href="#">Noticias</a></li>
                        <li><a href="{{route('Entrenamientos.index')}}">Entrenamientos</a></li>
                        <li><a href="{{route('Nutricion.index')}}">Nutricion</a></li>
                        @if (session()->has('user'))
                        	<li><a href="{{route('Perfil.show')}}">Hola {{session()->get('user')->nombre}}</a></li>
                        	<li><a href="{{route('logOut')}}"><i class="fas fa-sign-out-alt"></i></a></li>
                        @else
                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user"></i></a></li>
                        @endif

                    </ul>
                </nav>

				</div>


				<div class="wrapper style1">
					<div class="container">

					</div>
					<div class="container">
						<article id="main" class="special">
						
								
								<div class="container">
								<div class="filtros" style=" position: relative;z-index: 99; float: left; margin-right:20px;">
								<div class="dropdown">
									<button class="btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ordenar por</button>
									<ul class="dropdown-menu">
										<input class="form-control" id="myInput" type="text" placeholder="Search..">
										<li><a href="#">Fecha Asc</a></li>
										<li><a href="#">Fecha Desc</a></li>
										<li><a href="#">Categorias</a></li>
									</ul>
								</div>
								<script>
									$(document).ready(function(){
									$("#myInput").on("keyup", function() {
										var value = $(this).val().toLowerCase();
										$(".dropdown-menu li").filter(function() {
										$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
										});
									});
									});
								</script>
							</div>
							<div class="filtros">
								<div class="dropdown">
									<button class="btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filtrar</button>
									<ul class="dropdown-menu" id="segunda">
										<input class="form-control" id="segundo" type="text" placeholder="Search..">
										<li><a href="#">Nutricion</a></li>
										<li><a href="#">Ejercicios</a></li>
									</ul>
								</div>
								<script>
									$(document).ready(function(){
									$("#segundo").on("keyup", function() {
										var value = $(this).val().toLowerCase();
										$("#segunda li").filter(function() {
										$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
										});
									});
									});
								</script>
							</div>
							<br>
														@if (session()->has('user') and session()->get('user')->roles[0]->nombre == 'admin')

								<h4>Nueva noticia</h4>
								<form method="POST" action="{{route('Noticia.nueva')}}" enctype="multipart/form-data">
									@csrf
									<section>
										<input type="text" placeholder="Titulo" name ="tituloNoticia" id="tituloNoticia"><br>
										<textarea  name="textoNoticia" id="textoNoticia" placeholder="Contenido noticia..."></textarea><br>
										<select class="form-select"  name="tipo" required>
											<option selected value="1">Categoria de la noticia....</option>
											<option value="1">Nutricion</option>
											<option value="2">Entrenamiento</option>
										</select><br>
										<button class="btn btn--radius-2 btn--red" type="submit" placeholder="Texto noticia" >Insertar</button>
									</section>
								</form>
							
							@endif
									@foreach ($noticias as $noticia)
										<section>
											<header>
												<h3>{{ $noticia->titulo }}</h3>
											</header>
											@if ($noticia->tipo == 1 )
												<h4 class="badge badge-success">Nutrición</h4> <h6>{{ $noticia->created_at}}</h6><br>
											@else
												<h4 class="badge badge-danger">Ejercicio</h4> <h6>{{ $noticia->created_at}}</h6><br>
											@endif
											<p>
												{{ $noticia->contenido }}
											</p>
											
										</section>
									@endforeach
								{{ $noticias->links() }}
								</div>
		
						</article>
						
					</div>

				</div>
		</div>

	</body>

@endsection
