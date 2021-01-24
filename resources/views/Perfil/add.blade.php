@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">

@endsection
@section('titulo')
    <title>Perfil</title>
@endsection
@section('contenido')
<div id="page-wrapper">

    <!-- Header -->
        <div id="header">
            <script>
                /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
            <!-- Inner -->
                <div class="inner">
                    <header>
                        <h1>Registro</h1>
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
        {{-- <div class="page-wrapper bg-gra-03 p-t-45 p-b-50"> --}}
            <div class="wrapper wrapper--w790">
        <div class="card card-5">
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

                    <div class="form-row p-t-20">
                        <label class="label "><a> Acepta los terminos y condiciones</a></label>
                        <div class="p-t-15">
                            <label class="radio-container m-r-55">Si
                                <input type="radio" checked="checked" name="exist">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">No
                                <input type="radio" name="exist">
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
@endsection
