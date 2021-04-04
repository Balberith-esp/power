<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
</head>
<body style="text-align: center">
    <div>
        <article>
            <H4>Estimado cliente/a {{session()->get('user')->nombre}}</H4>
            <h4>
               Le enviamos este mensaje para informarle que ya puede acceder a
               su rutina {{session()->get('user')->nombre}} desde su area de usuario.
                Atentamente, Equipo Power.
            </h4>

        </article>
    </div>
    <img style="width: 500px; height: 250px;" src="https://www.imdsg.es/wp-content/uploads/fondo.jpg">
    <div>
        <p>
            Cualquier duda no dude en contactar con nosotros en info@power.es
        </p>
    </div>
</body>
</html>
