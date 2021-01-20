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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">



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
                                    <h2 class="icon brands fa-twitter circled"><span class="label">Tweets</span></h2>
                                </header>
                                <ul class="divided">
                                    <li>
                                        <article class="tweet">
                                            Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                            <span class="timestamp">5 minutes ago</span>
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
                                    <h2 class="icon solid fa-file circled"><span class="label">Posts</span></h2>
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
                                    <h2 class="icon solid fa-camera circled"><span class="label">Photos</span></h2>
                                </header>
                                <div class="row gtr-25">
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/pic10.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/pic11.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/pic12.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/pic13.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/pic14.jpg" alt="" /></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="image fit"><img src="../resources/assets/img/pic15.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </section>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12">

                            <!-- Contact -->
                                <section class="contact">
                                    <header>
                                        <h3>Nisl turpis nascetur interdum?</h3>
                                    </header>
                                    <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                                    <ul class="icons">
                                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                                        <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                        <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
                                    </ul>
                                </section>

                            <!-- Copyright -->
                                <div class="copyright">
                                    <ul class="menu">
                                        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                                    </ul>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
	</footer>
</html>
