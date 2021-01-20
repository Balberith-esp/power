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
                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user"></i></a></li>
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
                        <a href="#" class="image featured"><img src="../resources/assets/img/entrenamientoFuerza.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Fuerza</a></h3>
                        </header>
                        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                    </article>

                    <article>
                        <a href="#" class="image featured"><img src="../resources/assets/img/entrenamientoResistencia.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Resistencia</a></h3>
                        </header>
                        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                    </article>

                    <article>
                        <a href="#" class="image featured"><img src="../resources/assets/img/entrenamientoVolumen.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Volumen</a></h3>
                        </header>
                        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                    </article>

                    <article>
                        <a href="#" class="image featured"><img src="../resources/assets/img/entrenamientoDefinicion.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Definicion</a></h3>
                        </header>
                        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                    </article>

                    <article>
                        <a href="#" class="image featured"><img src="../resources/assets/img/entrenamientoMantenimiento.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Mantenimiento</a></h3>
                        </header>
                        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                    </article>

                    <article>
                        <a href="#" class="image featured"><img src="../resources/assets/img/entrenamientoAltoRendimiento.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Alto Rendimiento</a></h3>
                        </header>
                        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                    </article>



                </div>
            </section>

        <!-- Main -->
            <div class="wrapper style2" id="noticias">

                <article id="main" class="container special">
                    <a href="#" class="image featured"><img src="../resources/assets/img/pic06.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Sed massa imperdiet magnis</a></h2>
                        <p>
                            Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                            pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                        </p>
                    </header>
                    <p>
                        Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                        posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                        sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                        mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                        lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                        consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                        interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                        natoque aenean scelerisque.
                    </p>
                    <footer>
                        <a href="#" class="button">Continue Reading</a>
                    </footer>
                </article>

            </div>

        <!-- Features -->
            {{-- <div class="wrapper style1">

                <section id="features" class="container special">
                    <header>
                        <h2>Morbi ullamcorper et varius leo lacus</h2>
                        <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
                    </header>
                    <div class="row">
                        <article class="col-4 col-12-mobile special">
                            <a href="#" class="image featured"><img src="../resources/assets/img/pic07.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Gravida aliquam penatibus</a></h3>
                            </header>
                            <p>
                                Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                            </p>
                        </article>
                        <article class="col-4 col-12-mobile special">
                            <a href="#" class="image featured"><img src="../resources/assets/img/pic08.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                            </header>
                            <p>
                                Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                            </p>
                        </article>
                        <article class="col-4 col-12-mobile special">
                            <a href="#" class="image featured"><img src="../resources/assets/img/pic09.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Magna laoreet et aliquam</a></h3>
                            </header>
                            <p>
                                Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                            </p>
                        </article>
                    </div>
                </section>

            </div>
		</div> --}}
    </body>
@endsection
