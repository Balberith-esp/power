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
                            <li><a href="{{route('Foro.index')}}">Foro</a></li>
						    <li><a href="{{route('Noticias.index')}}">Noticias</a></li>
                            <li><a href="{{route('Entrenamientos.index')}}">Entrenamientos</a></li>
                            <li><a href="{{route('Nutricion.index')}}">Nutricion</a></li>
                            @if (session()->has('user'))
                            	@if (session()->get('user')->roles[0]->nombre == 'admin')
								    <li><a href="{{route('Administracion.index')}}">Administracion</a></li>
							    @endif
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
            <div class="wrapper style2" >

                <article id="main" class="container special">
                    <header>
                        <h2>Primer analisis</h2>
                        <p>
                            Mediante el siguiente formulario te invitamos a que te conozcas un poco mejor y resuelvas las dudas que pudieras tener a la hora
                            de plantear tus proximos objetivos.
                        </p>
                    </header>
                    <form>

                        <legend>Datos</legend>
                        <div class="form-row m-b-55">

                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" id="pesoIndicado" required min="40" max="200">
                                            <label class="label--desc">Peso</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" id="alturaIndicado" required min="40" max="200">
                                            <label class="label--desc">Altura</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" id="edadIndicado" required min="40" max="200">
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
                                            <input class="input--style-5" type="number" id="cinturaIndicado" required min="40" max="200">
                                            <label class="label--desc">Cintura</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" id="cuelloIndicado" required min="40" max="200">
                                            <label class="label--desc">Cuello</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" id="caderaIndicado" required min="40" max="200">
                                            <label class="label--desc">Cadera</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row m-b-55">
                                <div class="name">Genero</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <select class="form-select" aria-label="Default select example" id="generoIndicado" >
                                                <option selected value="male">Indique busqueda....</option>
                                                <option value="male">Masculino</option>
                                                <option value="female">Femenino</option>
                                              </select>
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
                                        <select class="form-select" aria-label="Default select example" name="busquedaIndicada" id="busquedaIndicada">
                                            <option selected value="1">Indique busqueda....</option>
                                            <option value="1">Calcular BMI</option>
                                            <option value="2">Calcular peso Ideal</option>
                                            <option value="3" disabled>Ver macros</option>
                                            <option value="4" disabled style="background-color:#ef5350">Calcular porcentaje de grasa corporal</option>
                                            <option value="5" disabled style="background-color:#ef5350">Calcular calorias diarias </option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <br>
                            <a type="button" class="btn btn-success" onclick="busca()">Solicitar informacion</a>
                        </div>
                    </form>
                    <div id="response"></div>
                    <br>
                </article>

            </div>
            <script>
                function busca(){

                    var edad = $("#edadIndicado").val();
                    var peso = $("#pesoIndicado").val();
                    var altura = $("#alturaIndicado").val();
                    var cuello = $("#cuellodIndicado").val();
                    var cintura = $("#cinturaIndicado").val();
                    var cadera = $("#caderaIndicado").val();

                    var genero = $("#generoIndicado").val();
                    var busquedaIndicada = $("#busquedaIndicada").val();

                    var settings;


                    switch ($("#busquedaIndicada").val()){
                        case '1':
                            settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://fitness-calculator.p.rapidapi.com/bmi?age="+edad+"&weight="+peso+"&height="+altura,
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1",
                                    "x-rapidapi-host": "fitness-calculator.p.rapidapi.com"
                                }
                            };
                            $.ajax(settings).done(function (response) {

                                if(response.length!=0){
                                    $('#response').html(
                                        (
                                            "<br>BMI: "+response['bmi'].toFixed(2)+"<br>"+
                                            "Estado: "+response['health'].toString()+"<br>"+
                                            "Rango BMI : "+response['healthy_bmi_range'].toString()+"<br>"

                                        )
                                    );
                                }else{
                                    $('#response').html(    (
                                        "Algun dato introducido no es correcto o el servicio se encuentra temporalmente inactivo"
                                    )
                                    );
                                }

                            });
                            break;
                        case '2':
                            settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://fitness-calculator.p.rapidapi.com/idealweight?gender="+genero+"&weight="+peso+"&height="+altura,
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1",
                                    "x-rapidapi-host": "fitness-calculator.p.rapidapi.com"
                                }
                            };
                            $.ajax(settings).done(function (response) {

                                if(response.length!=0){
                                    $('#response').html(
                                        (
                                            "Su peso ideal aproximado es: "+response['Hamwi'].toFixed(2)+" kg.<br>"

                                        )
                                    );
                                }else{
                                    $('#response').html(    (
                                        "Algun dato introducido no es correcto o el servicio se encuentra temporalmente inactivo"
                                    )
                                    );
                                }

                             });

                            break;
                        case '3':
                            settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://fitness-calculator.p.rapidapi.com/macros",
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1",
                                    "x-rapidapi-host": "fitness-calculator.p.rapidapi.com"
                                }
                            };
                            $.ajax(settings).done(function (response) {


                                if(response.length!=0){

                                    $('#response').html(
                                        (
                                            "<br>BMI: "+JSON.stringify(response.Proteins, null, 4)+"<br>"
                                        )
                                    );
                                }else{
                                    $('#response').html(    (
                                        "Algun dato introducido no es correcto o el servicio se encuentra temporalmente inactivo"
                                    )
                                    );
                                }

                                });
                            break;
                        case '4':
                            settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://fitness-calculator.p.rapidapi.com/bodyfat?age="+edad+"&gender="+genero+"&weigth="+peso+"&heigth="+altura+"&neck="+cuello+"&waist="+cadera+"&hip="+cintura,
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1",
                                    "x-rapidapi-host": "fitness-calculator.p.rapidapi.com"
                                }
                            };
                            $.ajax(settings).done(function (response) {

                                console.log(response)
                                if(response.length!=0){

                                    $('#response').html(
                                        (
                                            "Su peso porcentaje de grasa corporal aproximado es: "+response['val'].toFixed(2)+".<br>"
                                        )
                                    );
                                }else{
                                    $('#response').html(    (
                                        "Algun dato introducido no es correcto o el servicio se encuentra temporalmente inactivo"
                                    )
                                    );
                                }

                                });
                            break;
                        case '5':
                            settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://fitness-calculator.p.rapidapi.com/dailycalory?age="+edad+"&gender="+genero+"&heigth="+altura+"&weigth="+peso,
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1",
                                    "x-rapidapi-host": "fitness-calculator.p.rapidapi.com"
                                }
                            };
                            $.ajax(settings).done(function (response) {

                                console.log(response)
                                if(response != null){

                                    $('#response').html(
                                        // (
                                            //
                                        // )
                                    );
                                }else{
                                    $('#response').html(    (
                                        "Algun dato introducido no es correcto o el servicio se encuentra temporalmente inactivo"
                                    )
                                    );
                                }

                                });
                            break;

                    }

                }
            </script>
    </body>
@endsection
