<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


		@yield('titulo')


        {{-- Scripts --}}
        <script src="{{ url('../resources/assets/js/jquery.js') }}"></script>
        <script src="{{ url('../resources/assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('../resources/assets/js/jquery.dropotron.min.js') }}"></script>
        <script src="{{ url('../resources/assets/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ url('../resources/assets/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ url('../resources/assets/js/browser.min.js') }}"></script>
        <script src="{{ url('../resources/assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ url('../resources/assets/js/fonts.js') }}"></script>
        <script src="{{ url('../resources/assets/js/util.js') }}"></script>
        <script src="{{ url('../resources/assets/js/main.js') }}"></script>

        {{-- Estilos --}}
        <link rel="stylesheet" href="{{ url('../resources/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ url('../resources/assets/css/home.css') }}">
        <link rel="stylesheet" href="{{ url('../resources/assets/css/noscript.css') }}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> --}}



		@yield('otros_imports')
    </head>


		@yield('contenido')

            {{-- Modal para el login --}}
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-title text-center">
                        <h4>Inicio de sesión</h4>
                      </div>
                      <div class="d-flex flex-column text-center">
                        <form action="{{route('Login.compruebaUsuario')}}" method="post">
                            @csrf
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Dirección de Email..." required>
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control"  name="password" placeholder="Contraseña..." required>
                          </div>
                          <button type="submit" class="btn btn-info btn-block btn-round">Inicio</button>
                        </form>
                    </div>
                  </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <div class="signup-section">Aun no estas registrado? <a href="{{route('Registro.index')}}" class="text-info"> Registrate</a>.</div>
                    </div>
                </div>
              </div>
            </div>
            {{-- Fin modal login --}}
	<footer>

			<!-- Footer -->
            <div id="footer">


                <div class="container">
                    <div class="row">

                        <!-- Tweets -->
                            <section class="col-4 col-12-mobile">
                                <header>
                                    <h2 class="icon brands fa-twitter circled"><i class="fab fa-twitter"></i><span class="label">Tweets</span></h2>
                                </header>
                                <ul class="divided">
                                    <li>
                                        <article class="tweet">
                                            No te pierdas ninguno de nuestros post.
                                            <span class="timestamp">Hace 5 min</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Recuerda que puedes ser colaborador compartiendo tus post en nuestra web
                                            <span class="timestamp">Hace 2 horas</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Nuevo post en la web, no te lo pierdas¡
                                            <span class="timestamp">Hace 4 horas</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Aun no has creado tu rutina??? rellena el formulario son 2 minutos'
                                            <span class="timestamp">Ayer</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Que tal va tu entreno hoy ?
                                            <span class="timestamp">Ayer</span>
                                        </article>
                                    </li>
                                </ul>
                            </section>

                        <!-- Posts -->
                            <section class="col-4 col-12-mobile">
                                <header>
                                    <h2 class="icon solid fa-file circled"><i class="fas fa-newspaper"></i><span class="label">Posts</span></h2>
                                </header>
                                <ul class="divided">
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h4><a href="#">Entrenamiento espalda completo</a></h4>
                                            </header>
                                            <span class="timestamp">Hace 3 horas</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h4><a href="#">Lista de convocados campeonato power de europa</a></h4>
                                            </header>
                                            <span class="timestamp">Hace 6 horas</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h4><a href="#">Asi se prepara Macgregor</a></h4>
                                            </header>
                                            <span class="timestamp">Ayer</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h4><a href="#">Cual es el mejor metodo de volumen</a></h4>
                                            </header>
                                            <span class="timestamp">Hace dos dias</span>
                                        </article>
                                    </li>
                                </ul>
                            </section>

                        <!-- Photos -->
                            <section class="col-4 col-12-mobile">
                                <header>
                                    <h2 class="icon solid fa-camera circled"><i class="fab fa-instagram"></i><span class="label">Photos</span></h2>
                                </header>
                                <div class="row gtr-25">
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/instagram1.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/instagram2.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/instagram3.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/instagram4.jpg" alt="" /></a>

                                    </div>
                                </div>
                            </section>

                    </div>

                    <div class="row">
                        <div class="col-12">
                                <section class="contact"><br><br><br><br>

                                    <ul class="icons">
                                        <li><a><i class="fab fa-twitter"></i></a></li>
                                        <li><a><i class="fab fa-facebook"></i></a></li>
                                        <li><a><i class="fab fa-instagram"></i></a></li>
                                        <li><a><i class="fab fa-linkedin"></i></a></li>
                                        <li><a><i class="fab fa-pinterest"></i></a></li>
                                        <li><a><i class="fab fa-reddit"></i></a></li>
                                    </ul>
                                </section>
                                <div class="copyright">
                                    <ul class="menu">
                                        <li>&copy; Todos los derechos reservados.</li>
                                    </ul>
                                </div>

                        </div>

                    </div>
            </div>
	</footer>
</html>
