@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
@endsection
@section('titulo')
    <title>Insertar Datos</title>
@endsection
@section('contenido')
<body class="right-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
        <div id="header">

            <!-- Inner -->
                <div class="inner">
                    <header>
                        <h1>Administracion</h1>
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

                <div class="col-8 col-12-mobile imp-mobile" id="content">
                    <script>
                        $(document).ready( function () {
                            $('#entrenamientos_table').DataTable();
                            $('#nutricion_table').DataTable();
                        } );
                    </script>
                    <article id="main">
                        <header>
                            <h2>Insercion de datos</h2>
                            <br>
                            <table id="entrenamientos_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Zona</th>
                                        <th>Descripcion</th>
                                        <th>user_id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ejercicios as $ejercicio)
                                    <tr>

                                        <td>{{$ejercicio->nombre}}</td>
                                        <td>{{$ejercicio->zona}}</td>
                                        <td>{{$ejercicio->descipcion}}</td>
                                        <td>{{$ejercicio->user_id}}</td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <table id="nutricion_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Clasificacion</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nutriciones as $nutricion)
                                    <tr>
                                        <td>{{$nutricion->nombre}}</td>
                                        <td>{{$nutricion->tipo}}</td>
                                        <td>{{$nutricion->clasificacion}}</td>
                                        <td>{{$nutricion->user_id}}</td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                        </header>

                    </article>
                </div>
            </div>
            <br/>
        </div>

    </div>
</div>
</body>
@endsection
