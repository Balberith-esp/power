@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">

@endsection
@section('titulo')
    <title>Foro</title>
@endsection
@section('contenido')

	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Foro</a></h1>
							</header>
						</div>

					<!-- Nav -->
            <nav id="nav">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
						<li><a href="{{route('Noticias.index')}}">Noticias</a></li>
						<li><a href="#">Foro</a></li>
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

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<p>
							@if (session()->has('user'))
							<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								Realizar post
							</a>
							@else
								Registrese para realizar post y acumular puntos.
							@endif
						</p>
							<div class="collapse" id="collapseExample"><br>
								<div class="card card-body">
								<form method="POST" action="{{route('Post.nuevo')}}" enctype="multipart/form-data">
									@csrf
									<section>
										<input type="text" placeholder="Titulo" name ="tituloPost" id="tituloPost"><br>
										<textarea  name="textoPost" id="textoPost" placeholder="Contenido post..."></textarea><br>
										<select class="form-select"  name="tipo" required>
											<option selected value="1">Categoria del post....</option>
											<option value="1">Nutricion</option>
											<option value="2">Entrenamiento</option>
										</select><br>
										<div class="form-row">
											<div class="name">Archivo</div>
											<div class="value">
												<div class="input-group">
													<input class="input--style-5" type="file" name="archivo">
												</div>
											</div>
										</div>
										<button class="btn btn--radius-2 btn--red" type="submit" >Postear</button>
									</section>
								</form>
								</div>
							</div>
					</div>

					<div class="container">
						@foreach ($post as $p)
							<section>
								<header>
									<h3>{{ $p->titulo }}</h3>
								</header>
								@if ($p->tipo == 1 )
									<h4 class="badge badge-success">Nutrición</h4> <h6>{{ $p->created_at}}</h6><br>
								@else
									<h4 class="badge badge-danger">Ejercicio</h4> <h6>{{ $p->created_at}}</h6><br>
								@endif
								<p>
									{{ $p->contenido }}
									{{ $p->user_id }}
								</p>
								@if ($p->tieneRecurso)
									<p>
										<a href="{{route('post.descargar', $p)}}" type="button"><i class="far fa-file-pdf fa-3x"></i></a>
									</p>
								@endif
								
							</section>
						@endforeach
					{{ $post->links() }}
					</div>
				</div>
		</div>

	</body>

@endsection
