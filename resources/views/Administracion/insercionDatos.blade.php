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
                            $('#entrenamientos_table').DataTable();
                            $('#nutricion_table').DataTable();
                            $('#alimentos_table').DataTable();
                        } );
                    </script>
                    <article id="main">

                            <h2>Insercion de datos</h2>
                            <br>
                            <table id="entrenamientos_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Zona</th>
                                        <th>Usuario</th>
                                        <th>Recurso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ejercicios as $ejercicio)
                                    <tr>

                                        <td>{{$ejercicio->nombre}}</td>
                                        <td>{{$ejercicio->zona}}</td>
                                        <td>{{$ejercicio->user_id}}</td>
                                        <td>
                                            <a href="{{route('ejercicio.descargar', $ejercicio)}}" type="button"><i class="far fa-file-pdf fa-lg"></i></a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <table id="alimentos_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Comida</th>
                                        <th>Valor nutricional</th>
                                        <th>Tipo Dieta</th>
                                        <th><i class="fas fa-tools lg"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alimentos as $alimento)
                                    <tr>

                                        <td>{{$alimento->nombre}}</td>
                                        <td>{{$alimento->tipoAlimento}}</td>
                                        <td>{{$alimento->comida}}</td>
                                        <td>{{$alimento->valorNutricional}}</td>
                                        <td>{{$alimento->tipoDieta}}</td>
                                        <td>
                                            <a href="{{route('ejercicio.descargar', $ejercicio)}}" type="button">Añadir <i class="fas fa-plus lg"></i></a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <table id="nutricion_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Recurso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nutriciones as $nutricion)
                                    <tr>
                                        <td>{{$nutricion->nombre}}</td>
                                        <td>{{$nutricion->user_id}}</td>
                                        <td>
                                            <a href="{{route('dieta.descargar', $nutricion)}}" type="button"><i class="far fa-file-pdf fa-lg"></i></a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                    </article>
                </div>
            </div>
            <br/>
            <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#agregarRegistro">Agregar Registro</a>
        </div>

        <script>
            $(function() {
                $('#ejercicio').css("display", "none");
                $('#nutricion').css("display", "none");
                $('#selectEntrada').change(function(){
                    if($('#selectEntrada').val() == '1') {
                        $('#ejercicio').css("display", "block");
                        $('#nutricion').css("display", "none");
                    } else {
                        $('#ejercicio').css("display", "none");
                        $('#nutricion').css("display", "block");
                    }
                });
            });
        </script>
        <div class="modal fade" id="agregarRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="card card-5" style="margin: 5% 10%;">
                <div class="card-heading">
                    <h2 class="title">Nuevo Entrada</h2>
                </div>
                <div class="card-body">
                    <form><div class="form-row m-b-55">
                        <div class="name">Opción</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-9">
                                    <select class="form-select" aria-label="Default select example" id="selectEntrada" name="opcionEscogida">
                                        <option selected>Escoge opción a crear...</option>
                                        <option value="0">Nutrición</option>
                                        <option value="1">Ejercicio</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div></form>
                    <div id="ejercicio" style="display:none">
                        <h3>Ejercicio</h3><br>
                        <form method="POST" action="{{route('Guardar.ejercicio')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row m-b-55">
                                    <div class="name">Info</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="nombre">
                                                    <label class="label--desc">Nombre</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Archivo</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="archivo">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Guardar</button>
                                </div>

                        </form>
                    </div>
                    <div id="nutricion" style="display:none">
                        <h3>Nutrición</h3><br>
                        <form method="POST" action="{{route('Guardar.nutricion')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row m-b-55">
                                    <div class="name">Info</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="nombre">
                                                    <label class="label--desc">Nombre</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Archivo</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="archivo">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Guardar</button>
                                </div>
                            </form>
                    </div>
            </div>
            </div>
            </div>
        </div>

    </div>
</div>
</body>
@endsection
