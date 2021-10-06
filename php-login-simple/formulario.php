<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Denuncias</title>
    <link rel="stylesheet" href="css/formulario.css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<?php 
include 'database.php';
if(isset($_POST['submit'])){
    $name=$_POST['nombre'];
    $correo=$_POST['correo'];
    $celular=$_POST['celular'];
    $tipodenuncacuia=$_POST['tipodenuncia'];
    $descripcion=$_POST['descripcion'];

    $sql= "INSERT INTO `denuncias` (nombre, corre, celular, tipodenuncia, descripcion) VALUES ('$nombre', '$correo', '$celular', '$tipodenuncia', '$descripcion')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Datos ingresados";
    }else{
        echo "No se guardo";
    }

}
?>
<body style="background-image: url(img/9.jpeg); background-repeat: no-repeat;    background-size: cover;">

    <div class="content">

        <h1 class="logo">Denuncias</h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Denuncias</h3>
                <form  method="POST">
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="nombre">
                    </p>
                    <p>
                        <label>Correo</label>
                        <input type="email" name="correo">
                    </p>
                    <p>
                        <label>Celular</label>
                        <input type="tel" name="celular">
                    </p>
                    <p>
                        <label>Tipo de denuncia</label>
                        <input type="text" name="tipodenuncia">
                    </p>
                    <p class="block">
                        <label>Descripción</label>
                        <textarea name="descripcion" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Más información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Calle 333333</li>
                    <li><i class="fas fa-phone"></i> 333 33 33 (333)</li>
                    <li><i class="fas fa-envelope-open-text"></i> Denuncias@denuncias.com</li>
                </ul>
                <p>Denunciar cada acto!</p>
                <a href="/php-login-simple" class="link"><i class="fas fa-arrow-left"></i> Volver</a>
            </div>
        </div>

    </div>

</body>

</html>