@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
@endsection
@section('titulo')
    <title>Control Users</title>
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
                            $('#users_table').DataTable();
                        } );
                    </script>
                    <article id="main">
                        <header>
                            <h2>Control Usuarios</h2>
                            <br>
                            <table id="users_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>Pais</th>
                                        <th>Provincia</th>
                                        <th>Ciudad</th>
                                        <th>Estado</th>
                                        <th>Foto</th>
                                        <th>Roles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{$usuario->nombre}}</td>
                                        <td>{{$usuario->apellidos}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>{{$usuario->pais}}</td>
                                        <td>{{$usuario->provincia}}</td>
                                        <td>{{$usuario->ciudad}}</td>

                                        @if($usuario->activo == 1)
                                            <td> Activo</td>
                                        @else
                                            <td>Deshabilitado</td>
                                        @endif

                                        <td>{{$usuario->fotoPerfil}}</td>
                                        <td>
                                            @foreach ($usuario->roles as $item)
                                                {{$item->nombre}}
                                            @endforeach
                                        </td>

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
