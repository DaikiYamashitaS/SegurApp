<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/barrios.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


  <title>Barrios</title>
  <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    color: #fff;
}

.tipss {
    width: 100%;
    height: 100vh;
}

.tips {
    width: 20%;
    display: flex;
    justify-content: center;
    margin: 0 auto;
    font-size: 22px;
    font-weight: 700;
    margin-top: 20px;
    border: 1px solid #000;
    border-radius: 8px;
    padding: 20px 10px;
    background: #804000;
}

.tips-text {
    width: 20%;
    display: flex;
    justify-content: center;
    margin: 0 auto;
    font-size: 25px;
    margin-top: 50px;
    text-align: center;
}

.tips-text ul li {
    list-style: none;
    cursor: pointer;
    margin-top: 8px;
    transition: all 300ms ease;

}

.tips-text ul li:hover {
    transform: scale(1.2, 1.2);
    color: #000;
}

.barrio {
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    margin-top: 30px;
}

.link {
    text-decoration: none;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    transition: all 300ms ease;
}

.link:hover {
    color: #000;
    transform: scale(1.2, 1.2);
}
@media (max-width:600px) {
  .tips{
    font-size: 20px;
  }
  .barrio{
    font-size: 30px;
  }
}
@media (max-width:500px) {
  .tips{
    font-size: 15px;
  }
  .barrio{
    font-size: 30px;
  }
}
  </style>
</head>

<body style="background-image: url(img/9.jpeg); background-repeat: no-repeat;    background-size: cover;">
  <section class="tipss">

    <div class="tips">
      <h2 class="text">Barrios</h2>
    </div>
    <h2 class="barrio">Barrios comuna 12 y 13</h2>
    <div class="tips-text">
      <ul>

        <li>Villanueva</li>
        <li>Asturias</li>
        <li>Eduardo Santos</li>
        <li>Alfonso Barberena A</li>
        <li>El Paraíso</li>
        <li>Fenalco Kennedy</li>
        <li>Nueva Floresta</li>
        <li>Julio Rincón</li>
        <li>Doce de Octubre</li>
        <li>El Rodeo</li>
        <li>Sindical</li>
        <li>Bello Horizonte1​ </li>


        <li>El Pesebre
        </li>
        <li>Blanquizal</li>
        <li>Santa Rosa de Lima
        </li>
        <li>Los Alcázares
        </li>
        <li>Metropolitano</li>
        <li>La Pradera
        </li>
        <li>Juan XXIII
        </li>
        <li>La Quiebra
        </li>
        <li>Antonio Nariño
        </li>
        <li>San Javier n.º 1
        </li>
        <li>San Javier n.º 2
        </li>
        <li>Veinte de Julio
        </li>
        <li>El Salado

        </li>
        <li>Nuevos Conquistadores

        </li>
        <li>Las Independencias
        </li>
        <li>El Corazón

        </li>
        <li>Belencito
        </li>
        <li>Betania
        </li>
        <li>La Divisa
        </li>
        <li>Eduardo Santos
        </li>
        <li>El Socorro
        </li>
        <a href="/php-login-simple" class="link"><i class="fas fa-arrow-left"></i> Volver</a>
        </li>
      </ul>


    </div>
  </section>
</body>

</html>