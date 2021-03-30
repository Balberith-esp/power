@extends('layouts.master')

@section('otros_imports')

@endsection
@section('titulo')
    <title>Home</title>
@endsection
@section('contenido')
<body class="homepage is-preload">
			<!-- Header -->
            <div id="header">

                <!-- Inner -->
                    <div class="inner">
                        <header>
                            <h1>Proyecto Power</h1>
                            <hr/>
                            <p>El camino empieza aqui</p>
                        </header>
                        <footer>
                            <h4><a href="#banner" class="button circled scrolly">Comienza</a></h4>
                        </footer>
                    </div>

                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#noticias">Noticias</a></li>
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

        <!-- Banner -->
            <section id="banner">
                <header>
                    <h2>Bienvenido al Proyecto <strong>Power</strong>.</h2>
                    <p>
                        Este proyecto nacio con la idea de ayudar a todo el mundo a alcanzar sus objetivos.
                    </p><br>
                    <p>
                        <em>"Hoy haré los que otros no harán, para mañana conseguir los que otros no pueden". </em><br>
                        <strong>Jerry Rice</strong>
                    </p>
                </header>
            </section>

        <!-- Carousel -->
            <section class="carousel">
                <div class="reel">

                    <article>
                        <a href="{{route('Entrenamientos.index')}}" class="image featured"><img src="../resources/assets/img/entrenamientoFuerza.jpg" alt="" /></a>
                        <header>
                            <h3><a href="{{route('Entrenamientos.index')}}">Fuerza</a></h3>
                        </header>
                        <p>Entrenamiento enfocada conseguir la mayor fuerza.</p>
                    </article>

                    <article>
                        <a href="{{route('Entrenamientos.index')}}" class="image featured"><img src="../resources/assets/img/entrenamientoResistencia.jpg" alt="" /></a>
                        <header>
                            <h3><a href="{{route('Entrenamientos.index')}}">Resistencia</a></h3>
                        </header>
                        <p>Entrenamiento enfocada conseguir la mayor fuerza.</p>
                    </article>

                    <article>
                        <a href="{{route('Entrenamientos.index')}}" class="image featured"><img src="../resources/assets/img/entrenamientoVolumen.jpg" alt="" /></a>
                        <header>
                            <h3><a href="{{route('Entrenamientos.index')}}">Volumen</a></h3>
                        </header>
                        <p>Entrenamiento enfocado a ganar masa muscular.</p>
                    </article>

                    <article>
                        <a href="{{route('Entrenamientos.index')}}" class="image featured"><img src="../resources/assets/img/entrenamientoDefinicion.jpg" alt="" /></a>
                        <header>
                            <h3><a href="{{route('Entrenamientos.index')}}">Definicion</a></h3>
                        </header>
                        <p>Entrenamiento para bajar el peso sobrante y definir la musculatura.</p>
                    </article>

                    <article>
                        <a href="{{route('Entrenamientos.index')}}" class="image featured"><img src="../resources/assets/img/entrenamientoMantenimiento.jpg" alt="" /></a>
                        <header>
                            <h3><a href="{{route('Entrenamientos.index')}}">Mantenimiento</a></h3>
                        </header>
                        <p>Entrenamiento para mantener una actividad fisica constante.</p>
                    </article>

                    <article>
                        <a href="{{route('Entrenamientos.index')}}" class="image featured"><img src="../resources/assets/img/entrenamientoAltoRendimiento.jpg" alt="" /></a>
                        <header>
                            <h3><a href="{{route('Entrenamientos.index')}}">Alto Rendimiento</a></h3>
                        </header>
                        <p>Entrenamientos para deportistas profesionales.</p>
                    </article>



                </div>
            </section>

        <!-- Main -->
            <div class="wrapper style2" id="noticias">

                <article id="main" class="container special">
                    <header>
                        <h2>Primer analisis</h2>
                        <p>
                            Mediante el siguiente formulario te invitamos a que te conozcas un poco mejor y resuelvas las dudas que pudieras tener a la hora
                            de plantear tus proximos objetivos.
                        </p>
                    </header>
                    <form method="POST" action="{{route('Dieta.creaDieta')}}" enctype="multipart/form-data">
                        @csrf
                        <legend>Datos</legend>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="pesoIndicado">
                                            <label class="label--desc">Peso</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="alturaIndicado">
                                            <label class="label--desc">Altura</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="edadIndicado">
                                            <label class="label--desc">Edad</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="cinturaIndicado">
                                            <label class="label--desc">Cintura</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="cuelloIndicado">
                                            <label class="label--desc">Cuello</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="caderaIndicado">
                                            <label class="label--desc">Cadera</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="form-row m-b-55">
                            <div class="name">Genero</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="radio" name="rd">
                                            <label class="label--desc">Masculino</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="radio" name="rd">
                                            <label class="label--desc">Femenino</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <legend>Opciones</legend>
                        <div class="form-row m-b-55">
                            <div class="name">Petición sobre</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <select class="form-select" aria-label="Default select example" name="actividadIndicado">
                                            <option selected>Indique busqueda....</option>
                                            <option value="1">Calcular BMI</option>
                                            <option value="2">Calcular peso Ideal</option>
                                            <option value="3">Calcular macros</option>
                                            <option value="4">Calcular porcentaje de grasa corporal</option>
                                            <option value="5">Calcular calorias diarias </option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <br>
                            <button type="submit" class="btn btn-success" type="submit">Solicitar informacion</button>
                        </div>
                    </form>
                </article>

            </div>

    </body>
@endsection
