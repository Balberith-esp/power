@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"></script>

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
                        <li><a href="{{route('Foro.index')}}">Foro</a></li>
						<li><a href="Noticias.index">Noticias</a></li>
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
                            $('#users_table').DataTable({
                                url:'dataTables.spanish.json'
                            });
                        } );
                    </script>
                    <article id="main">
                        <header>
                            <h2>Control Usuarios</h2>
                            <br>
                            <table id="users_table" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
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
                                        <td >{{$usuario->id}}</td>
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
                    <a type="button" class="btn btn-success"  data-toggle="modal" data-target="#agregarUsuario">Agregar Usuario</a>
                    <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modificarUsuario">Modificar Usuario</a>
                </div>
                <div class="modal fade" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="card card-5" style="margin: 5% 10%;">
                        <div class="card-heading">
                            <h2 class="title">Nuevo usuario</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('Registro.creaUsuario')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row m-b-55">
                                    <div class="name">Nombre</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="nombre">
                                                    <label class="label--desc">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="primerApellido">
                                                    <label class="label--desc">1º Apellido</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="segundoApellido">
                                                    <label class="label--desc">2º Apellido</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Contraseña</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="password" name="contraseña">
                                                    <label class="label--desc">Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="password" name="repContraseña">
                                                    <label class="label--desc">Repite Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Direccion</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="pais">
                                                    <label class="label--desc">Pais</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="provincia">
                                                    <label class="label--desc">Provincia</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="ciudad">
                                                    <label class="label--desc">Ciudad</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Foto Usuario</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="fotoPerfil">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Registro</button>
                                </div>
                            </form>
                        </div></div>
                </div>


                <div class="modal fade" id="modificarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="card card-5"  style="margin:0% 10%;">
                        <div class="card-heading">
                            <h2 class="title">Editar usuario</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('modificar.usuario')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row m-b-55">
                                    <div class="name">Nombre</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="nombre">
                                                    <label class="label--desc">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="primerApellido">
                                                    <label class="label--desc">1º Apellido</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="segundoApellido">
                                                    <label class="label--desc">2º Apellido</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Contraseña</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="password" name="contraseña">
                                                    <label class="label--desc">Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="password" name="repContraseña">
                                                    <label class="label--desc">Repite Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Direccion</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="pais">
                                                    <label class="label--desc">Pais</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="provincia">
                                                    <label class="label--desc">Provincia</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="ciudad">
                                                    <label class="label--desc">Ciudad</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Foto Usuario</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="fotoPerfil">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row p-t-20">
                                    <label class="label "><a> Usuario Activo</a></label>
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Si
                                            <input type="radio" checked="checked" name="active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="active">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Registro</button>
                                </div>
                            </form>
                        </div></div>
                </div>
            </div>
            <br/>
        </div>

    </div>
</div>

</body>
@endsection
