<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


		@yield('titulo')

        {{-- Estilos --}}
        <link rel="stylesheet" href="{{ url('../resources/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ url('../resources/assets/css/home.css') }}">
        <link rel="stylesheet" href="{{ url('../resources/assets/css/noscript.css') }}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> --}}


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



		@yield('otros_imports')
    </head>


		@yield('contenido')


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
                                            Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                            <span class="timestamp">Hace 5 min</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Hendrerit rutrum quisque.
                                            <span class="timestamp">30 minutes ago</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                            <span class="timestamp">3 hours ago</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="tweet">
                                            Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                            <span class="timestamp">5 hours ago</span>
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
                                                <h3><a href="#">Nisl fermentum integer</a></h3>
                                            </header>
                                            <span class="timestamp">3 hours ago</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h3><a href="#">Phasellus portitor lorem</a></h3>
                                            </header>
                                            <span class="timestamp">6 hours ago</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h3><a href="#">Magna tempus consequat</a></h3>
                                            </header>
                                            <span class="timestamp">Yesterday</span>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="post stub">
                                            <header>
                                                <h3><a href="#">Feugiat lorem ipsum</a></h3>
                                            </header>
                                            <span class="timestamp">2 days ago</span>
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
                    <hr />
                    <div class="row">
                        <div class="col-12">
                                <section class="contact"><br><br>
                                        <h3>Contacta con nosotros</h3>
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
            </div>
	</footer>
</html>
