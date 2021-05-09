<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header {
      position: fixed;
      left: 0px;
      top: -100px;
      right: 0px;
      height: 100px;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>Power TEAM</h1>
    <h2>{{session()->get('entreamiento')["nombreIndicado"]}}</h2>
  </header>
  <body>

    <h4>Rutina de ejercicios creada para {{session()->get('user')->nombre}}</h4>


    <h5>Zona: {{ implode(" ",session()->get('entreamiento')["zonaIndicado"]) }}

        
    </h5>
    <h5>Objetivo buscado:
        <?php
            switch (session()->get('entreamiento')["objetivoIndicado"]) {
                case 1:
                    echo "Fuerza";
                    $recomendacionObjetivo = "Series cortas con pesos cercanos a su rm";
                    break;
                case 2:
                    echo "Resistencia";
                    $recomendacionObjetivo = "Series de muchas repeticiones con pesos bajos";
                    break;
                case 3:
                    echo "Volumen";
                    $recomendacionObjetivo = "Busque la congestion muscular";
                    break;
                case 4:
                    echo "Definición";
                    $recomendacionObjetivo = "Trabaje ejercicios con tecnica estricta, poco peso y un recorrido largo";
                    break;
                case 5:
                    echo "Mantenimiento";
                    $recomendacionObjetivo = "Series estandar";
                    break;
                case 6:
                    echo "Alto rendimiento";
                    $recomendacionObjetivo = "Alterne el agotamiento muscular con dias de de mantenimiento";
                    break;
            }

        ?>
    </h5>
    <h5>Estado actual:
        <?php
            switch (session()->get('user')->nivel) {
                case 'novato':
                    echo "Novato";
                    $recomendacionEstado = "Comience con entrenamientos cortos entre 3-4 dias por semana, progrese en funcion de su capacidad";
                    break;
                case 'principiante':
                    echo "Principiante";
                    $recomendacionEstado = "Entrenamiento regular, buscando superar metas pero guardando la seguridad";
                    break;
                case 'intermedio':
                    echo "Intermedio";
                    $recomendacionEstado = "Entrenamiento 5-6 dias por semana, busque nuevas marcas paulatinamente";
                    break;
                case 'avanzado':
                    echo "Avanzado";
                    $recomendacionEstado = "Entrenamiento de resistencia con fuerza alternando rutinas y pesos";
                    break;
                case 'experto':
                    echo "Experto";
                    $recomendacionEstado = "Evite estancamientos cambiando rutinas y alternando los pequeños grupos musculares en los entrenos focalizados";
                    break;
            }

        ?>
    </h5>
    <h5>Duracion:
        <?php
            switch (session()->get('entreamiento')["tiempoIndicado"]) {
                case 1:
                    echo "0-30 min";
                    $recomendacionTiempo = "Trabaje grupos grandes de forma explosiva";
                    break;
                case 2:
                    echo "30-60 min";
                    $recomendacionTiempo = "Puede entrenar algun grupo focalizado haciendo incapie en los trabajos de cuerpo completo";
                    break;
                case 3:
                    echo "60-90 min";
                    $recomendacionTiempo = "Alterne grupos grandes con pequeños e introduzca series largas";
                    break;
                case 4:
                    echo "90-120 min";
                    $recomendacionTiempo = "Alterne el ejercicio completo con los focalizados para alcanzar el mayor rendimiento";
                    break;
            }

        ?>
    </h5>
    <hr><hr>
    <H4>Recomendaciones:<h4>
        <ul>
            <li><?php echo $recomendacionObjetivo ?></li>
            <li><?php echo $recomendacionEstado ?></li>
            <li><?php echo $recomendacionTiempo ?></li>
        </ul><br><br>

        <h4>Ejercicios recomendados para las zonas indicadas</h4>
    <body>
    </body>
    <footer>
      <table>
        <tr>
          <td>
              <p class="izq">
                Power.com
              </p>
          </td>
          <td>
            <p class="page">
              P
            </p>
          </td>
        </tr>
      </table>
    </footer>


    <?php
    // {{-- Entrenamiento brazo --}}
        if (in_array('brazo',session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://i.pinimg.com/originals/d1/41/cd/d141cd12dc024d15aef469d762ebe6f6.jpg" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Brazo</h3><br>';
        }
    // {{-- Entrenamiento pierna --}}
    if (in_array('pierna', session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://i.pinimg.com/originals/1d/9b/aa/1d9baac826099dfda5cfd91256e15387.png" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Pierna</h3><br>';
        }
    // {{-- Entrenamiento espalda --}}
    if (in_array('espalda', session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://i.pinimg.com/originals/be/bc/89/bebc89e859bac084a046c8d54d6a00ba.jpg" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Espalda</h3><br>';
        }
    // {{-- Entrenamiento hombro --}}
    if (in_array('hombro', session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://i.pinimg.com/originals/fe/45/c0/fe45c0765fcd577ad51ca843f0526cd6.png" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Hombro</h3><br>';
        }
    // {{-- Entrenamiento pecho --}}
    if (in_array('pecho', session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://i.pinimg.com/originals/47/96/86/4796864e3baaf4a575a8c6059c1a414d.jpg" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Pecho</h3><br>';
        }
    // {{-- Entrenamiento abdo --}}
    if (in_array('abdomen', session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://cdn.statically.io/img/interlife.es/wp-content/uploads/2020/08/rutina-abdominales-herbalife.png?quality=100&f=auto<h3>Entrenamiento Abdomen</h3><br="" style=" height:650px; width:500px"><br>';
        }

    // {{-- Entrenamiento All --}}
    if (in_array('full', session()->get('entreamiento')["zonaIndicado"])) {
            echo '<img src="https://i.pinimg.com/originals/d1/41/cd/d141cd12dc024d15aef469d762ebe6f6.jpg" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Brazo</h3><br>';
            echo '<img src="https://i.pinimg.com/originals/1d/9b/aa/1d9baac826099dfda5cfd91256e15387.png" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Pierna</h3><br>';
            echo '<img src="https://i.pinimg.com/originals/fe/45/c0/fe45c0765fcd577ad51ca843f0526cd6.png" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Hombro</h3><br>';
            echo '<img src="https://i.pinimg.com/originals/47/96/86/4796864e3baaf4a575a8c6059c1a414d.jpg" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Pecho</h3><br>';
            echo '<img src="https://buscadordeportivo.files.wordpress.com/2015/11/abs.jpg?w=640" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Abdomen</h3><br<>';
            echo '<img src="https://i.pinimg.com/originals/be/bc/89/bebc89e859bac084a046c8d54d6a00ba.jpg" alt="" style=" height:650px; width:500px"><h3>Entrenamiento Espalda</h3><br>';





        }

    ?>


</body>
</html>
