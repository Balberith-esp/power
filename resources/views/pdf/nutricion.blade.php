<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <style>
  table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
    padding: 3px 2px;
    height:30;
    color:black;

}
table.blueTable tbody td {
  font-size: 10px;
  height:40px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 14px;
  font-weight: bold;
  text-align: center;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  padding: 2px 8px;
  border-radius: 5px;
}
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
      color: blue;
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
    <h1>Equipo Power</h1>
    <h2>{{session()->get('nutricion')["nombreIndicado"]}}</h2>
  </header>
  <hr><hr>
  <body>

    <h4>Analisis de alimentación creado para {{session()->get('user')->nombre}}</h4>

    <h5>Datos actuales:</h5>
        <p>
            <ul>
                <li>Edad: {{session()->get('user')->edad}}</li>
                <li>Sexo: {{session()->get('user')->sexo}}</li>
                <li>Peso: {{session()->get('user')->peso}}</li>
                <li>Altura: {{session()->get('user')->altura}}</li>
                <li>Dias de entreno : <?php echo (session()->get('nutricion')['diasdIndicado']-1)?></li>
            </ul>
        </p>
    <h5>Objetivo buscado:
        <?php
            switch (session()->get('nutricion')["objetivoIndicado"]) {
                case 'mantenimiento':
                    echo "Mantenimiento";
                    $recomendacionObjetivo = "Mantene balance calorico estandar, cuidando el consumo de macronutrientes en los porcentajes adecuados.";
                    break;
                case 'definicion':
                    echo "Definición";
                    $recomendacionObjetivo = "Reducir el consumo de grasas y carbohidratos aumentando la ingesta de proteinas para cuidar el musculo mientras
                                                    reducimos las calorias en un pequeño porcentaje";
                    break;
                case 'perdida':
                    echo "Perdida de peso";
                    $recomendacionObjetivo = "Reducimos las calorias base y creamos un deficit entre un 10-30 %";
                    break;
                case 'volumen':
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
    </h5><hr><hr><br><br><br>
    <H4>Resultados para sus datos:<h4>
        <p>
            <?php
                $genero = session()->get('user')->sexo;
                $peso = session()->get('user')->peso;
                $altura = session()->get('user')->altura;
                $edad = session()->get('user')->edad;

                if($genero == 'hombre'){
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
    <H4>Recomendaciones:<h4>
        <ul>
            <li><?php echo $recomendacionObjetivo ?></li>
            <li><?php echo $recomendacionActividad ?></li>
        </ul>
        <?php  
          $alimentos = [
            'desayuno' => [
              'Lacteos' =>[],
              'Cereales' =>[],
            ],
            'almuerzo' => [
              'Fruta' =>[],
            ],
            'comida' => [
              'Legumbre' =>[],
              'Pasta' =>[],
              'Verduras' =>[],
              'Carnes' => [],
              'Pescados' => [],
              'Otro' => [],
            ],
            'merienda' => [
              'Fruta' =>[],
            ],
            'cena' => [
              'Legumbre' =>[],
              'Pasta' =>[],
              'Verduras' =>[],
              'Carnes' => [],
              'Pescados' => [],
              'Otro' => [],
            ],
          ];
          foreach (session()->get('alimentacion') as $val){
              $pos = $val['tipoAlimento'];
              if($val['comida'] == 'Comida o cena'){
                  array_push($alimentos['comida'][$pos],$val);
                  array_push($alimentos['cena'][$pos],$val);
              }elseif($val['comida'] == 'Desayuno'){
                  array_push($alimentos['desayuno'][$pos],$val);
              }else{
                array_push($alimentos['almuerzo'][$pos],$val);
                array_push($alimentos['merienda'][$pos],$val);
              };          
          } 

          // var_dump($alimentos['desayuno']['Lacteos'][0]['nombre'])


         ?>
         <br><br><br>
          <table class="blueTable">
          <thead>
            <tr>
              <th></th>
              <th>Lunes</th>
              <th>Martes</th>
              <th>Miercoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
              <th>Sabado</th>
              <th>Domingo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th><small>Desayuno</small></th>
              
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ; 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Lacteos'])-1); 
                      echo $alimentos['desayuno']['Lacteos'][$val]['nombre'].' - '.$alimentos['desayuno']['Lacteos'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['desayuno']['Cereales']) -1);
                      echo $alimentos['desayuno']['Cereales'][$val]['nombre'].' - '.$alimentos['desayuno']['Cereales'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
            </tr>
            <tr>
              <th><small>Almuerzo</small></th>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ; 
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
            </tr>
            <tr>
              <th><small>Comida</small></th>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Legumbre'])-1); 
                      echo $alimentos['comida']['Legumbre'][$val]['nombre'].' - '.$alimentos['comida']['Legumbre'][$val]['valorNutricional'].'Kcal.<br/>' ; 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Carnes']) -1);
                      echo $alimentos['comida']['Carnes'][$val]['nombre'].' - '.$alimentos['comida']['Carnes'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Verduras'])-1); 
                      echo $alimentos['comida']['Verduras'][$val]['nombre'].' - '.$alimentos['comida']['Verduras'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['comida']['Pescados']) -1);
                      echo $alimentos['comida']['Pescados'][$val]['nombre'].' - '.$alimentos['comida']['Pescados'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Pasta'])-1); 
                      echo $alimentos['comida']['Pasta'][$val]['nombre'].' - '.$alimentos['comida']['Pasta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['comida']['Carnes']) -1);
                      echo $alimentos['comida']['Carnes'][$val]['nombre'].' - '.$alimentos['comida']['Carnes'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Legumbre'])-1); 
                      echo $alimentos['comida']['Legumbre'][$val]['nombre'].' - '.$alimentos['comida']['Legumbre'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['comida']['Pescados']) -1);
                      echo $alimentos['comida']['Pescados'][$val]['nombre'].' - '.$alimentos['comida']['Pescados'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Verduras'])-1); 
                      echo $alimentos['comida']['Verduras'][$val]['nombre'].' - '.$alimentos['comida']['Verduras'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['comida']['Carnes']) -1);
                      echo $alimentos['comida']['Carnes'][$val]['nombre'].' - '.$alimentos['comida']['Carnes'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Legumbre'])-1); 
                      echo $alimentos['comida']['Legumbre'][$val]['nombre'].' - '.$alimentos['comida']['Legumbre'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['comida']['Carnes']) -1);
                      echo $alimentos['comida']['Carnes'][$val]['nombre'].' - '.$alimentos['comida']['Carnes'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['comida']['Pasta'])-1); 
                      echo $alimentos['comida']['Pasta'][$val]['nombre'].' - '.$alimentos['comida']['Pasta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['comida']['Pescados']) -1);
                      echo $alimentos['comida']['Pescados'][$val]['nombre'].' - '.$alimentos['comida']['Pescados'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
            </tr>
            <tr>
              <th><small>Merienda</small></th>
             <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ; 
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['almuerzo']['Fruta'])-1); 
                      echo $alimentos['almuerzo']['Fruta'][$val]['nombre'].' - '.$alimentos['almuerzo']['Fruta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                ?>
              </td>
            </tr>
            <tr>
              <th><small>Cena</small></th>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Verduras'])-1); 
                      echo $alimentos['cena']['Verduras'][$val]['nombre'].' - '.$alimentos['cena']['Verduras'][$val]['valorNutricional'].'Kcal.<br/>' ; 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Carnes']) -1);
                      echo $alimentos['cena']['Pescados'][$val]['nombre'].' - '.$alimentos['cena']['Pescados'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Verduras'])-1); 
                      echo $alimentos['cena']['Verduras'][$val]['nombre'].' - '.$alimentos['cena']['Verduras'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['cena']['Otro']) -1);
                      echo $alimentos['cena']['Otro'][$val]['nombre'].' - '.$alimentos['cena']['Otro'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Pasta'])-1); 
                      echo $alimentos['cena']['Pasta'][$val]['nombre'].' - '.$alimentos['cena']['Pasta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['cena']['Carnes']) -1);
                      echo $alimentos['cena']['Carnes'][$val]['nombre'].' - '.$alimentos['cena']['Carnes'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Verduras'])-1); 
                      echo $alimentos['cena']['Verduras'][$val]['nombre'].' - '.$alimentos['cena']['Verduras'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['cena']['Otro']) -1);
                      echo $alimentos['cena']['Otro'][$val]['nombre'].' - '.$alimentos['cena']['Otro'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Pasta'])-1); 
                      echo $alimentos['cena']['Pasta'][$val]['nombre'].' - '.$alimentos['cena']['Pasta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['cena']['Pescados']) -1);
                      echo $alimentos['cena']['Pescados'][$val]['nombre'].' - '.$alimentos['cena']['Pescados'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Verduras'])-1); 
                      echo $alimentos['cena']['Verduras'][$val]['nombre'].' - '.$alimentos['cena']['Verduras'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['cena']['Otro']) -1);
                      echo $alimentos['cena']['Otro'][$val]['nombre'].' - '.$alimentos['cena']['Otro'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
              <td>
                  <?php 
                      $val= rand ( 0 , sizeof($alimentos['cena']['Pasta'])-1); 
                      echo $alimentos['cena']['Pasta'][$val]['nombre'].' - '.$alimentos['cena']['Pasta'][$val]['valorNutricional'].'Kcal.<br/>' ;  
                      $val= rand ( 0 , sizeof($alimentos['cena']['Carnes']) -1);
                      echo $alimentos['cena']['Carnes'][$val]['nombre'].' - '.$alimentos['cena']['Carnes'][$val]['valorNutricional'].'Kcal.<br/>' ;
                ?>
              </td>
            </tr>
          </tbody>
        </table>

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
