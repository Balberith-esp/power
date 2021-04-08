@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">

@endsection
@section('titulo')
    <title>Entrenamientos</title>
@endsection
@section('contenido')
<body class="left-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
        <div id="header">

            <!-- Inner -->
                <div class="inner">
                    <header>
                        <h1>Entrenamientos</h1>
                    </header>
                </div>

            <!-- Nav -->
            <nav id="nav">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
                        <li><a href="#">Entrenamientos</a></li>
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
                                <h3>Entrenamiento Deportivo</h3>
                            </header>
                            <p>
                                El entrenamiento deportivo ayuda al atleta a lograr sus objetivos mediante la administración del proceso de mejora
                                del rendimiento. La mejora del rendimiento es un proceso cíclico que provoca adaptaciones en el organismo para
                                aplicarlas a la disciplina deportiva de interés
                            </p>
                        </section>
                        <hr/>
                        <section>
                            <header>
                                <h3>Entrenamientos populares</h3>
                            </header>

                            <div class="row gtr-50">
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="../resources/assets/img/biceps.png" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Biceps y triceps</h4>
                                    <p><br>
                                        <li>Curl de un solo brazo en banco inclinado. </li>
                                        <li>Curl con banda de resistencia. </li>
                                        <li>Curl con mancuernas en banco inclinado.</li>
                                        <li>Curl de martillo de pie.</li>
                                        <a>leer mas......</a>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="../resources/assets/img/cuadriceps.png" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Cuadriceps y femoral</h4>
                                    <p><br>
                                        <li>Sentadilla Asistida. </li>
                                        <li>Sentadilla Isométrica (Wall Sit) </li>
                                        <li>Zancadas o Estocadas.</li>
                                        <li>Subidas al Banco (Step Up).</li>
                                        <a>leer mas......</a>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="image fit"><img src="../resources/assets/img/pectoral.png" alt="" /></a>
                                </div>
                                <div class="col-8">
                                    <h4>Pectoral</h4>
                                    <p><br>
                                        <li>Curl de un solo brazo en banco inclinado. </li>
                                        <li>Curl con banda de resistencia. </li>
                                        <li>Curl con mancuernas en banco inclinado.</li>
                                        <li>Curl de martillo de pie.</li>
                                        <a>leer mas......</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-8 col-12-mobile imp-mobile" id="content">
                        <article id="main">
                            <header>
                                <h2>Inicia tu entrenamiento</h2>
                                <p>
                                    Crea tu rutina
                                </p>
                            </header>
                            <a href="#" class="image featured"><img src="../resources/assets/img/rutinaEntrenamiento.jpg" alt="" /></a>
                            <br>
                            <p>
                                A continuacion se muestra un formulario en el que podra introducir sus datos y en funcion de ellos se le generara
                                un rutina de ejercicios pensada para usted
                            </p>
                            <br>
                            <div>
                                <p>
                                    <h5>Introduce tus datos</h5>
                                </p><br><br>
                            </div>
                            <form method="POST" action="{{route('Rutina.creaRutina')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row m-b-55">
                                    <div class="name">Nombre entrenamiento</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="nombreIndicado" required>
                                                    <label class="label--desc">Nombre</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Zona entrenamiento</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="zonaIndicado" required>
                                                    <label class="label--desc">Zona</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Objetivo</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-9">
                                                <select class="form-select" aria-label="Default select example" name="objetivoIndicado" required>
                                                    <option selected value="1">Objetivo buscado....</option>
                                                    <option value="1">Fuerza</option>
                                                    <option value="2">Resistencia</option>
                                                    <option value="3">Volumen</option>
                                                    <option value="4">Definición</option>
                                                    <option value="5">Mantenimiento</option>
                                                    <option value="6">Alto rendimiento</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Nivel actual</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-9">
                                                <select class="form-select" aria-label="Default select example" name="nivelIndicado" required>
                                                    <option selected value="1">Nivel....</option>
                                                    <option value="1">Novato</option>
                                                    <option value="2">Principiante</option>
                                                    <option value="3">Intermedio</option>
                                                    <option value="4">Avanzado</option>
                                                    <option value="5">Experto</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Duración</div>
                                    <div class="value">
                                        <div class="row row-refine">
                                            <div class="col-9">
                                                <select class="form-select" aria-label="Default select example" name="tiempoIndicado" required>
                                                    <option selected value="1">Duración....</option>
                                                    <option value="1">0-30 min</option>
                                                    <option value="2">30-60 min</option>
                                                    <option value="3">60-90 min</option>
                                                    <option value="4">90-120 min</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    @if (session()->has('user'))
                                    <button class="btn btn--radius-2 btn--red" type="submit">Solicitar rutina de ejercicios</button>
                                    @else
                                        <button class="btn btn--radius-2 btn--red" type="submit" disabled>Solicitar rutina de ejercicios</button>
                                        <p>Debe estar registrado para realizar rutinas, a que esperas es totalmente gratis, <a href="{{route('Registro.index')}}" class="text-info"> Registrate</a>.</p>
                                    @endif
                                </div>
                            </form>
                        </article>
                    </div>
                </div>
                <br/>
            </div>

        </div>
</div>
</body>
@endsection
