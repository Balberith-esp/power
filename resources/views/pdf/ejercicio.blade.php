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


    <h5>Zona:
        {{session()->get('entreamiento')["zonaIndicado"]}}
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
            switch (session()->get('entreamiento')["nivelIndicado"]) {
                case 1:
                    echo "Novato";
                    $recomendacionEstado = "Comience con entrenamientos cortos entre 3-4 dias por semana, progrese en funcion de su capacidad";
                    break;
                case 2:
                    echo "Principiante";
                    $recomendacionEstado = "Entrenamiento regular, buscando superar metas pero guardando la seguridad";
                    break;
                case 3:
                    echo "Intermedio";
                    $recomendacionEstado = "Entrenamiento 5-6 dias por semana, busque nuevas marcas paulatinamente";
                    break;
                case 4:
                    echo "Avanzado";
                    $recomendacionEstado = "Entrenamiento de resistencia con fuerza alternando rutinas y pesos";
                    break;
                case 5:
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
        <img src="https://ae01.alicdn.com/kf/HTB1DCWtX42rK1RkSnhJq6ykdpXaa/Eat-Sleep-Gym-Repeat-Stickers-vinilo-dise-o-de-arte-pegatinas-para-carrocer-a-de-coche.jpg"
                style="margin:20px 150px; width: 350px; height: 250px;">
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

</body>
</html>
