<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenida</title>
</head>
<body style="text-align: center">
    <img style="width: 500px; height: 250px;" src="https://i.pinimg.com/originals/2e/0c/73/2e0c73a5f92c075e6a03dc5890f4274a.jpg">
    <h3>Hola {{session()->get('user')->nombre}}, bienvenido a la familia</h3>
    <div>
        <article>
            <h4>
                Bienvenido a Power, una aplicación creada por y para soñadores, esperamos poder ayudarte
                a lograr tus objetivos.

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
