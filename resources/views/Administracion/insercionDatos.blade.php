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
                            $('#entrenamientos_table').DataTable({pageLength: 4});
                            $('#nutricion_table').DataTable({pageLength: 4});
                            $('#alimentos_table').DataTable({pageLength: 4});
                        } );
                    </script>
                    <article id="main">

                            <h2>Insercion de datos</h2>
                            <br>
                            <h3>Ejercicios</h3>
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
                            <br>
                            <h3>Alimentos</h3>
                            <table id="alimentos_table" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Comida</th>
                                        <th>Valor nutricional</th>
                                        <th>Tipo Dieta</th>
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

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table><br>
                            <h3>Nutricion</h3>
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
                $('#alimento').css("display", "none");
                $('#selectEntrada').change(function(){
                    if($('#selectEntrada').val() == '1') {
                        $('#ejercicio').css("display", "block");
                        $('#nutricion').css("display", "none");
                        $('#alimento').css("display", "none");
                        $('#otroRecurso').css("display", "none");

                    } else if($('#selectEntrada').val() == '0'){
                        $('#ejercicio').css("display", "none");
                        $('#nutricion').css("display", "block");
                        $('#alimento').css("display", "none");
                        $('#otroRecurso').css("display", "none");

                    }else if($('#selectEntrada').val() == '2'){
                        $('#ejercicio').css("display", "none");
                        $('#alimento').css("display", "block");
                        $('#nutricion').css("display", "none");
                        $('#otroRecurso').css("display", "none");

                    }else{
                        $('#ejercicio').css("display", "none");
                        $('#alimento').css("display", "none");
                        $('#nutricion').css("display", "none");
                        $('#otroRecurso').css("display", "block");
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
                                        <option value="2">Alimentacion</option>
                                        <option value="3">Otro Recurso</option>
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
                    <div id="alimento" style="display:none">
                        <h3>Alimento</h3><br>
                        <form method="POST" action="{{route('alimento.nuevo')}}" enctype="multipart/form-data">
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
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="number" name="valorNutricional">
                                                    <label class="label--desc">Valor nutricional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Tipo alimento</div>
                                    <div class="value">
                                        
                                            <div class="col-9">
                                                <select class="form-select" aria-label="Default select example" id="selectEntrada" name="tipoAlimento">
                                                    <option selected>...</option>
                                                    <option value="Fruta">Fruta</option>
                                                    <option value="Hortaliza o verduras">Hortaliza o verduras</option>
                                                    <option value="Carnes">Carnes</option>
                                                    <option value="Pescado">Pescado</option>
                                                    <option value="Lacteos">Lacteos</option>
                                                    <option value="Cereales">Cerales</option>
                                                </select>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Tipo dieta</div>
                                    <div class="value">
                                        
                                            <div class="col-9">
                                                <select class="form-select" aria-label="Default select example" id="selectEntrada" name="tipoDieta">
                                                    <option selected>...</option>
                                                    <option value="Definición">Definición</option>
                                                    <option value="Musculación">Musculación</option>
                                                    <option value="Mantenimiento">Mantenimiento</option>
                                                    <option value="Alto rendimientos">Alto rendimientos</option>
                                                    <option value="Todas">Todas</option>
                                                </select>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Comida</div>
                                    <div class="value">
                                        
                                            <div class="col-9">
                                                <select class="form-select" aria-label="Default select example" id="selectEntrada" name="tipoComida">
                                                    <option selected>...</option>
                                                    <option value="Desayuno">Desayuno</option>
                                                    <option value="Almuerzo">Almuerzo</option>
                                                    <option value="Comida">Comida</option>
                                                    <option value="Merienda">Merienda</option>
                                                    <option value="Cena">Cena</option>
                                                    <option value="Cualquiera">Cualquiera</option>
                                                </select>
                                            </div>
                                        
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Guardar</button>
                                </div>
                            </form>
                    </div>
                
                    <div id="otroRecurso" style="display:none">
                        <h3>Recurso</h3><br>
                        <form method="POST" action="{{route('otroRecurso.nuevo')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row m-b-55">
                                    <div class="name">Info</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="titulo">
                                                    <label class="label--desc">Titulo</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="recurso">
                                                    <label class="label--desc">Enlace al recurso</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Lineas</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="lineas" placeholder="Max 3. Separe las lineas por '/'">
                                                    <label class="label--desc">Lineas</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Imagen</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="file" name="pathImagen">
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
