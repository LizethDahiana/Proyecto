<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" href="img/LOGO.jpg">
    <link rel="stylesheet" href="estilos.css">
    <script src="registro.js"></script>
</head>

<body>


    <form name="form" action="./php/enviar.php" method="post">
        <div class="form">


            <h1>Registrate</h1>

            <div class="grupo">

                <input type="text" name="nombre" id="nombre" required/>
                <span class="barra"></span>
                <label for=""> Nombre</label>

            </div>

            <div class="grupo">

                <input type="text" name="identificacion" id="identificacion" required/>
                <span class="barra"></span>
                <label for=""> Identificacion</label>

            </div>

            <div class="grupo">

                <input type="text" name="telefono" id="telefono" required/>
                <span class="barra"></span>
                <label for=""> Telefono</label>

            </div>

            <div class="grupo">

                <input type="email" name="email" id="email" required/>
                <span class="barra"></span>
                <label for="">Email</label>
            </div>

            <div class="grupo">

                <input type="password" name="clave" id="clave" required/>
                <label for="">Clave</label>
            </div>

            <button type="submit"> INGRESAR</button>



        </div>
    </form>

</body>

</html>


