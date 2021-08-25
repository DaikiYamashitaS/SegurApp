<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera pagina en php</title>
    <link rel="sylesheet" href="css/">
    <script src="js/Registros.js"></script>
</head>
<body>
    <?php
        print "Esta es la primera prueba...<br>";
        print "Bienvenidos al curso de PHP <br>";
        // http://localhost/FAZ%202021/primeraFAZ.php


        $Nombre = "puvlo ";
        $Apellidos = "Lopez"; 
        
        $resultado = $Nombre . "" . $Apellidos;
        echo" el resultado es:  " .$resultado;
    ?>
</body>
</html>