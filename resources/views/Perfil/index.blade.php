@extends('layouts.master')

@section('otros_imports')

@endsection
@section('titulo')
    <title>Perfil</title>
@endsection
@section('contenido')
<body class="right-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
        <div id="header">

            <!-- Inner -->
                <div class="inner">
                    <header>
                        <h1>Perfil</h1>
                    </header>
                </div>

            <!-- Nav -->
            <nav id="nav">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
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
                <div class="row gtr-200">
                    <div class="col-4 col-12-mobile" id="sidebar">
                        <hr class="first" />
                        <section>
                            <header>
                                <h3><a href="#">Accumsan sed penatibus</a></h3>
                            </header>
                            <p>
                                Dolor sed fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                porttitor phasellus tempus cubilia ultrices tempor sagittis  tellus ante diam nec penatibus dolor cras
                                magna tempus feugiat veroeros.
                            </p>
                            <footer>
                                <a href="#" class="button">Learn More</a>
                            </footer>
                        </section>
                        <hr />
                        <section>
                            <header>
                                <h3><a href="#">Sed lorem etiam consequat</a></h3>
                            </header>
                            <p>
                                Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                            </p>
                            <div class="row gtr-50">
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="../resources/assets/img/pic10.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Nibh sed cubilia</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="../resources/assets/img/pic11.jpg" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Proin sed adipiscing</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>

                            </div>
                            <footer>
                                <a href="#" class="button">Magna Adipiscing</a>
                            </footer>
                        </section>
                    </div>
                    <div class="col-8 col-12-mobile imp-mobile" id="content">
                        <article id="main">
                            <header>
                                <h2><a href="#">{{ session()->get('user')->nombre }}</a></h2>
                                <p>
                                    {{ session()->get('user')->email}}
                                </p>
                            </header>

                            <img src= {{asset('../resources/assets/img/fotosPerfil')}}{{'/'.session()->get('user')->fotoPerfil }} alt="Foto Usuario" class="float-left rounded-circle mr-2" />

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 my-3 pt-3 shadow">

                                                <p>
                                                    {{-- <strong>Instagram</strong>: {{ session()->get('user')->profile->instagram }} <br>
                                                    <strong>GitHub</strong>: {{ session()->get('user')->profile->github }} <br>
                                                    <strong>Web</strong>: {{ session()->get('user')->profile->web }} --}}
                                                </p>
                                                <p>
                                                    <strong>País</strong>: {{ session()->get('user')->pais }} <br>
                                                    <strong>Provincia</strong>: {{ session()->get('user')->provincia }} <br>
                                                    <strong>Ciudad</strong>: {{ session()->get('user')->ciudad}} <br>
                                                </p>
                                                <hr>
                                                <p>
                                                    {{-- <strong>Grupos</strong>:
                                                    @forelse(session()->get('user')->groups as $group)
                                                        <span class="badge badge-primary">{{ $group->name }}</span>
                                                    @empty
                                                        <em>No pertenece a algún grupo</em>
                                                    @endforelse --}}
                                                </p>

                                                <hr>

                                            </div>
                                        </div>
                                    </div>

                        </article>
                    </div>
                </div>
                <hr />

            </div>

        </div>
</div>
</body>
@endsection
