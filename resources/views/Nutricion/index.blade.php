@extends('layouts.master')

@section('otros_imports')
<link rel="stylesheet" href="{{ url('../resources/assets/css/formRegStyle.css') }}">

@endsection
@section('titulo')
    <title>Dietas</title>
@endsection
@section('contenido')
<body class="right-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
        <div id="header">

            <!-- Inner -->
                <div class="inner">
                    <header>
                        <h1>Nutricion</h1>
                    </header>
                </div>

            <!-- Nav -->
            <nav id="nav">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
                        <li><a href="{{route('Entrenamientos.index')}}">Entrenamientos</a></li>
                        <li><a href="#">Nutricion</a></li>
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
                            <h3>Nutrición Deportiva</h3>
                        </header>
                        <p>
                            La nutrición deportiva es la rama de la nutrición humana especializada en las personas que practican deporte.
                            La nutrición deportiva no olvida los criterios básicos de alimentación equilibrada durante el día a día,
                            para afrontar las cargas de entreno y favorecer la recuperación.
                        </p>
                        <br>
                            <h4>Consultar valores nutricionales</h4><br><form>
                            <input type="text" name="ingrediente" id="ingrediente" placeholder="ingrediente..."></form><br>
                            <button  class="btn btn-success" name="buscaIngrediente" id="buscaIngrediente" onclick="busca()">Consultar</button>
                            <div id="response"></div>
                    </section>
                    <script>
                        function busca(){
                            const settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://edamam-food-and-grocery-database.p.rapidapi.com/parser?ingr="+$('#ingrediente').val(),
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1",
                                    "x-rapidapi-host": "edamam-food-and-grocery-database.p.rapidapi.com"
                                }
                            };

                            $.ajax(settings).done(function (response) {

                                if(response.parsed.length!=0){
                                    $('#response').html(    (

                                        "<br>Calorias: "+response.hints[0].food.nutrients['ENERC_KCAL'].toString()+"<br>"+
                                        "Proteina: "+response.hints[0].food.nutrients['PROCNT'].toString()+"<br>"+
                                        "Grases: "+response.hints[0].food.nutrients['FAT'].toString()+"<br>"+
                                        "Carbohidratos: "+response.hints[0].food.nutrients['CHOCDF'].toString()+"<br>"+
                                        "Grasas: "+response.hints[0].food.nutrients['FIBTG'].toString()+"<br><br>"+
                                        "<img style='width:200px' src='"+response.hints[0].food['image'].toString()+"'/><br>"
                                        )
                                    );
                                }else{
                                    $('#response').html(    (
                                        "No se han encontrado datos para el alimento buscado..."
                                    )
                                    );
                                }
                            });

                        }
                    </script>
                    <hr/>
                    <section>
                        <header>
                            <h3>Algunos tipos de dieta...</h3><br>
                        </header>

                        <div class="row gtr-50">
                            <div class="col-4">
                                <a href="#" class="image fit"><img src="../resources/assets/img/proteina.png" alt="" /></a>
                            </div>

                            <div class="col-8">
                                <h4>Hiperproteica</h4>
                                <p><br>
                                    Una dieta proteica es un método que consiste en reducir al máximo el consumo de los carbohidratos reemplazándolos
                                    por proteínas, esto hace que el cuerpo se vea obligado a comenzar a utilizar la grasa consumida y almacenada
                                    para obtener energía.
                                    <a>leer mas......</a>
                                </p>
                            </div>
                            <div class="col-4">
                                <a href="#" class="image fit"><img src="../resources/assets/img/keto.jpg" alt="" /></a>
                            </div>
                            <div class="col-8">
                                <h4>KETO</h4>
                                <p><br>
                                    La dieta keto o cetogénica se centra en la ingesta de más alimentos ricos en grasas buenas y proteínas
                                    (pescado azul, aguacate, aceite de coco y de oliva) con una restricción de la ingesta de hidratos de carbono
                                    <a>leer mas......</a>
                                </p>
                            </div>
                            <div class="col-4">
                                <a href="#" class="image fit"><img src="../resources/assets/img/detox.jpg" alt="" /></a>
                            </div>
                            <div class="col-8">
                                <h4>Detox</h4>
                                <p><br>
                                    Un detox sirve para mejorar, optimizar y apoyar el proceso natural de desintoxicación del cuerpo al disminuir
                                    la cantidad de toxinas que ingerimos, además de que provee el cuerpo de los nutrientes que necesita para
                                    trabajar adecuadamente.
                                    <a>leer mas......</a>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-8 col-12-mobile imp-mobile" id="content">
                    <article id="main">
                        <header>
                            <h2>Inicia tu nueva rutina alimenticia</h2>
                            <p>
                                Crea tu dieta
                            </p>
                        </header>
                        <a href="#" class="image featured"><img src="../resources/assets/img/comida.jpg" alt="" /></a>
                        <br>
                        <p>
                            A continuación se muestra un formulario en el que podra introducir sus datos y preferencias alimentacias,  en funcion de ellos se le generara
                            un rutina de alimentacion adaptada para para usted
                        </p>
                        <br>
                        <div>
                            <p>
                                <h5>Introduce tus datos</h5>
                            </p><br><br>
                        </div>
                        <form method="POST" action="{{route('Dieta.creaDieta')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row m-b-55">
                                <div class="name">Nombre dieta</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" required name="nombreIndicado">
                                                <label class="label--desc">Nombre</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Sexo</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <select class="form-select" aria-label="Default select example" name="sexoIndicado" required>
                                                <option selected value="1">Sexo....</option>
                                                <option value="1">Hombre</option>
                                                <option value="2">Mujer</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Edad</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="number" name="edadIndicado" required min="10">
                                                <label class="label--desc">Edad</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Altura</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="number" name="alturaIndicada" required min="120">
                                                <label class="label--desc">Altura</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Peso</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="number" name="pesoIndicado" required min="40">
                                                <label class="label--desc">Peso</label>
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
                                                <option selected value="1">Objetivo....</option>
                                                <option value="1">Mantenimiento</option>
                                                <option value="2">Definicion</option>
                                                <option value="3">Perdida de peso</option>
                                                <option value="4">Ganar masa muscular</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Actividad fisica</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <select class="form-select" aria-label="Default select example" name="actividadIndicado" required>
                                                <option selected value="1">Indice de actividad....</option>
                                                <option value="1">Trabajo sedentario (ej. oficina)</option>
                                                <option value="2">Me muevo de forma de forma ocasional</option>
                                                <option value="3">Me muevo habitualmente aunque sin una gran carga de trabajo</option>
                                                <option value="4">Trabajo exigente fisicamente</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Dias de entreno</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <select class="form-select" aria-label="Default select example" name="diasdIndicado" required>
                                                <option selected value="1">Nº dias...</option>
                                                <option value="1">0</option>
                                                <option value="2">1</option>
                                                <option value="3">2</option>
                                                <option value="4">3</option>
                                                <option value="5">4</option>
                                                <option value="6">5</option>
                                                <option value="7">6</option>
                                                <option value="8">7</option>
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
