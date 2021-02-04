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
                                <img src= {{asset('../resources/assets/img/fotosPerfil')}}{{'/'.session()->get('user')->fotoPerfil }}
                                        style="border-radius: 50%; width:150px">
                            </header>
                            <article id="main">

                                <h2>{{ session()->get('user')->nombre }}</h2>
                                <p>
                                    <h4>{{ session()->get('user')->email}}</h4>
                                </p>
                                <p>
                                    <strong>País</strong>: {{ session()->get('user')->pais }} <br>
                                    <strong>Provincia</strong>: {{ session()->get('user')->provincia }} <br>
                                    <strong>Ciudad</strong>: {{ session()->get('user')->ciudad}} <br>
                                </p>


                            </article>
                        </section>


                    </div>
                    <div class="col-8 col-12-mobile imp-mobile" id="content">
                        <article id="main">

                            <div>
                                <h3>Rutinas</h3><br>
                                {{session()->get('user')->ejercicios}}
                                {{session()->get('user')->id}}

                            </div>
                            <br>

                            <div>
                                <h3>Dietas</h3><br>
                                {{session()->get('user')->nutriciones}}
                                {{session()->get('user')->id}}
                            </div>
                            <br>

                            <div>
                                <h3>Historial</h3><br>
                                {{session()->get('user')->historiales}}
                                {{session()->get('user')->id}}
                            </div>

                        </article>
                    </div>
                </div>


            </div>

        </div>
</div>
</body>
@endsection
