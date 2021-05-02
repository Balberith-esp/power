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

	</footer>
</html>
