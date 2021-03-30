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
      /* background-image : "../resources/assets/img/imagenFondo.jpg"; */
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
    <h1>Proyecto Power</h1>
    <h2>{{session()->get('entreamiento')["nombreIndicado"]}}</h2>
  </header>
  <body>

    <h4>Rutina de ejercicios creada para {{session()->get('user')->nombre}}</h4>


    <h4>Zona {{session()->get('entreamiento')["zonaIndicado"]}}</h4>
    <h4>Objetivo buscado {{session()->get('entreamiento')["objetivoIndicado"]}}</h4>
    <h4>Estado actual {{session()->get('entreamiento')["nivelIndicado"]}}</h4>
    <h4>Duracion {{session()->get('entreamiento')["tiempoIndicado"]}}</h4>



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
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>

</body>
</html>
