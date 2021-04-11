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
    <h2>{{session()->get('nutricion')["nombreIndicado"]}}</h2>
  </header>
  <body>

    <h4>Analisis de alimentación creado para {{session()->get('user')->nombre}}</h4>


    <h5>Datos actuales:</h5>
        <p>
            <ul>
                <li>Edad: {{session()->get('nutricion')['edadIndicado']}}</li>
                <li>Sexo: <?php if(session()->get('nutricion')['sexoIndicado'] == 1){echo "Hombre";}else{echo "Mujer";}?></li>
                <li>Peso: {{session()->get('nutricion')['pesoIndicado']}}</li>
                <li>Altura: {{session()->get('nutricion')['alturaIndicada']}}</li>
                <li>Dias de entreno : <?php echo (session()->get('nutricion')['diasdIndicado']-1)?></li>
            </ul>
        </p>
    <h5>Objetivo buscado:
        <?php
            switch (session()->get('nutricion')["objetivoIndicado"]) {
                case 1:
                    echo "Mantenimiento";
                    $recomendacionObjetivo = "Mantene balance calorico estandar, cuidando el consumo de macronutrientes en los porcentajes adecuados.";
                    break;
                case 2:
                    echo "Definición";
                    $recomendacionObjetivo = "Reducir el consumo de grasas y carbohidratos aumentando la ingesta de proteinas para cuidar el musculo mientras
                                                    reducimos las calorias en un pequeño porcentaje";
                    break;
                case 3:
                    echo "Perdida de peso";
                    $recomendacionObjetivo = "Reducimos las calorias base y creamos un deficit entre un 10-30 %";
                    break;
                case 4:
                    echo "Ganar masa muscular";
                    $recomendacionObjetivo = "Aumentamos las calorias base y creamos un superavit entre un 10-30 %";
                    break;
            }

        ?>
    </h5>
    <h5>Actividad actual:
        <?php
            switch (session()->get('nutricion')["actividadIndicado"]) {
                case 1:
                    echo "Trabajo sedentario";
                    $recomendacionActividad = "Debido al sedentarismo de su trabajo se requerira de un ejercicio constate y deberia incluir actividades
                                                    de tipo cardiovascular, cuidando mucho la ingesta calorica ya que su actividad es escasa ";
                    break;
                case 2:
                    echo "Actividad ocasional";
                    $recomendacionActividad = "Su indice de consumo energetico es mayor por lo que debera adaptar su ingesta los dias que la actividad
                                                    extra lo requiera";
                    break;
                case 3:
                    echo "Ejercicio cotidiano de forma natural";
                    $recomendacionActividad = "Su consumo energetico se debe ver reflejado en la alimentacion cuidando siempre la procedencia pero estableciendo
                                                el valor calorico necesario en la dieta";
                    break;
                case 4:
                    echo "Trabajo exigente";
                    $recomendacionActividad = "Su trabajo demanda un gasto elevado y este le obligara a elevar el consumo energetico medio y si es necesario
                                                realizar descanso de entrenamiento cuando lo considere necesario.";
                    break;
            }

        ?>
    </h5><hr><hr>
    <H4>Resultados para sus datos:<h4>
        <p>
            <?php
                $genero = session()->get('nutricion')['sexoIndicado'];
                $peso = session()->get('nutricion')['pesoIndicado'];
                $altura = session()->get('nutricion')['alturaIndicada'];
                $edad = session()->get('nutricion')['edadIndicado'];

                if($genero == 1){
                    $tmb =  (66 + (13.7 * $peso) + (5 * $altura) - (6.75 * $edad));
                    switch (session()->get('nutricion')["actividadIndicado"]) {
                        case 1:
                            $tmb*1.2;
                            break;
                        case 2:
                            $tmb*1.4;
                            break;
                        case 3:
                            $tmb*1.5;
                            break;
                        case 4:
                            $tmb*1.7;
                            break;
                        case 5:
                            $tmb*1.9;
                            break;
                    }
                }else{
                    $tmb = (665 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $edad));
                    switch (session()->get('nutricion')["actividadIndicado"]) {
                        case 1:
                            $tmb*1.2;
                            break;
                        case 2:
                            $tmb*1.4;
                            break;
                        case 3:
                            $tmb*1.5;
                            break;
                        case 4:
                            $tmb*1.7;
                            break;
                        case 5:
                            $tmb*1.9;
                        break;

                    }

                }

            if(session()->get('nutricion')["objetivoIndicado"] == 2 or session()->get('nutricion')["objetivoIndicado"] == 3){
                $calorias = round(($tmb - ($tmb/100*30)));
                echo $calorias." Calorias diarias <br><h5>Macronutrientes</h5>";
                echo "Hidratos de carbono: ".round($calorias/2)." cal.<br>";
                echo "Grasas: ".round($calorias-($calorias/100*65))." cal.<br>";
                echo "Proteinas: ".round($calorias-($calorias/100*85))." cal.<br>";
            }elseif (session()->get('nutricion')["objetivoIndicado"] == 1) {
                $calorias = round($tmb);
                echo  $calorias  ." Calorias diarias<br><h5>Macronutrientes</h5>";
                echo "Hidratos de carbono: ".round($calorias/2)." cal.<br>";
                echo "Grasas: ".round($calorias-($calorias/100*65))." cal.<br>";
                echo "Proteinas: ".round($calorias-($calorias/100*85))." cal.<br>";
            }else{
                $calorias = round($tmb + ($tmb/100*30));
                echo  $calorias ." Calorias diarias<br><h5>Macronutrientes</h5>";
                echo "Hidratos de carbono: ".round($calorias/2)." cal.<br>";
                echo "Grasas: ".round($calorias-($calorias/100*65))." cal.<br>";
                echo "Proteinas: ".round($calorias-($calorias/100*85))." cal.<br>";

            }


        ?>
        </p>
    <hr><hr>
    <img src="https://i.pinimg.com/originals/50/7b/38/507b38d97eae87e090a07699d1487130.jpg" style="width: 650px; height:500px; margin-top:55px">
    <H4>Recomendaciones:<h4>
        <ul>
            <li><?php echo $recomendacionObjetivo ?></li>
            <li><?php echo $recomendacionActividad ?></li>
        </ul><br><br>

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
