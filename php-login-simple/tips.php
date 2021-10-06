<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/tips.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


  <title>Tips</title>
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
    font-size: 25px;
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
    margin-top: 100px;
}

.tips-text ul li {
    list-style: none;
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
    .tips-text ul li{
      font-size: 20px;
    }
  }
  @media (max-width:500px) {
    .tips{
      font-size: 15px;
    }
    .tips-text ul li{
      font-size: 10px;
    }
  }
  </style>
</head>

<body style="background-image: url(img/9.jpeg); background-repeat: no-repeat;    background-size: cover;">
  <section class="tipss">

    <div class="tips">
      <h2 class="text">Tips</h2>
    </div>

    <div class="tips-text">
      <ul>
        <li>-No llevar todo lo valioso junto</li>
        <li>-No perder de vista el bolso</li>
        <li>-No dejar a la vista objetos de valor</li>
        <li>-Desconfiar de empujones y acercamientos sospechosos</li>
        <li>-De noche, caminar por calles iluminadas</li>
      <a href="/php-login-simple" class="link"><i class="fas fa-arrow-left"></i> Volver</a>
        <li></li>
      </ul>
    </div>
  </section>
</body>

</html>