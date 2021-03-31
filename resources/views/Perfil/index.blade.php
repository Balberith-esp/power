@extends('layouts.master')

@section('otros_imports')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
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
                                @foreach ( session()->get('user')->ejercicios as $item)

                                        <div class="row">
                                            <div class="col-6"><li>{{$item->nombre}}</div>
                                            <div class="col-3">
                                                <a href="{{route('ejercicio.descargar', $item)}}" type="button" class="btn btn-info">Descargar</a>
                                            </div>

                                        </div><br>

                                @endforeach



                            </div>
                            <br>

                            <div>
                                <h3>Dietas</h3><br>
                                @foreach ( session()->get('user')->nutriciones as $item)

                                        <div class="row">
                                            <div class="col-6"><li>{{$item->tipo}}</div>
                                            <div class="col-3">
                                                <a href="{{route('dieta.descargar', $item)}}" type="button" class="btn btn-info">Descargar</a>
                                            </div>
                                        </div>
                                    <br>
                                @endforeach
                            </div>
                            <br>

                            <div>
                                <h3>Historial</h3><br>
                                <script>
                                    $(document).ready( function () {
                                        $('#historial').DataTable();
                                    } );
                                </script>
                                <table id="historial" class="display">
                                    <thead>
                                        <tr>
                                            <th>Peso</th>
                                            <th>Fecha</th>
                                            <th>Sensacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                         {{-- {{session()->get('user') }} --}}
                                        @foreach ( session()->get('user')->historiales as $item)
                                        <tr>
                                            <td>{{$item->peso}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->sensacionMejora}}</td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#agregarEntrada">
                                    Agregar entrada
                                </button>
                                <div class="modal fade" id="agregarEntrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <form action="{{ route('historial.nuevo') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Agregar historico</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                  <div class="col"><label>Peso actual</label></div>
                                                  <div class="col"><input type="number" name="pesoActual" id="pesoActual" placeholder="peso"></div>
                                                  <div class="col"><label>Sensacion (Opcional)</label></div>
                                                  <div class="col"><textarea name="sensaciones" id="sensaciones" placeholder="sensaciones"
                                                        style="width: 90%; height: 75%; resize:none"></textarea></div>
                                                </div>
                                              </div>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                          <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                                  </div>
                            </div>

                        </article>
                    </div>
                </div>


            </div>

        </div>
</div>
</body>
@endsection
