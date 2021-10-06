<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bienvenidos</title>
  <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
  <script defer src="index.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <!-- <link rel="stylesheet" href="css/index.css"> -->
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #2c3e50;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}

    .link {
      text-decoration: none;
      color: #000;
      font-size: 20px;
      padding: 20px 10px;
      background: #fff;
      border-radius: 16px;
      box-shadow: 4px 4px 4px #8D8D8A;
      transition: all 300ms ease;
    }

    .link:hover {
      background: none;
      box-shadow: none;
      border: 1px solid #fff;
      color: #fff;

    }

    .titulo {
      text-align: center;
      font-size: 40px;
      border-bottom: 5px solid #2c3e50;
      width: 15%;
      margin: 0 auto;
    }

    .about-services {
      background: #fff;
      padding-bottom: 30px;
    }

    .servicio-cont {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .servicio-ind {
      width: 28%;
      text-align: center;
    }

    .servicio-ind img {
      width: 90%;
    }

    .servicio-ind h3 {
      margin: 10px 0;
    }

    .servicio-ind p {
      font-weight: 300;
      text-align: justify;
    }


    /* footer */

    footer {
      
      padding: 60px 0 30px 0;
      margin: auto;
      overflow: hidden;
    }

    .contenedor-footer {
      display: flex;
      width: 90%;
      justify-content: space-evenly;
      margin: auto;
      padding-bottom: 50px;
      border-bottom: 1px solid #ccc;
    }

    .content-foo {
      text-align: center;
    }

    .content-foo h4 {
      color: #fff;
      border-bottom: 3px solid #af20d3;
      padding-bottom: 5px;
      margin-bottom: 10px;
    }

    .content-foo p {
      color: #ccc;
    }

    .titulo-final {
      text-align: center;
      font-size: 24px;
      margin: 20px 0 0 0;
      color: #9e9797;
    }

    @media (max-width:600px) {

      /* servicios */
      .servicio-cont {
        display: flex;
        justify-content: center;
        flex-direction: column;
      }

      .servicio-ind {
        width: 100%;
        text-align: center;
      }

      .servicio-ind:nth-child(1),
      .servicio-ind:nth-child(2) {
        margin-bottom: 60px;
      }

      .servicio-ind img {
        width: 90%;
      }
    }

    @media (max-width:500px) {

      footer{
        background: #000;

      }
      /* Footer */
      .contenedor-footer {
        display: flex;
        flex-direction: column;
        border: none;
      }

      .content-foo {
        margin-bottom: 20px;
        text-align: center;
      }

      .content-foo h4 {
        border: none;
      }

      .content-foo p {
        color: #ccc;
        border-bottom: 1px solid #f2f2f2;
        padding-bottom: 20px;
      }

      .titulo-final {
        font-size: 20px;
      }

    }
  </style>
</head>

<body>


  <?php if (!empty($user)) : ?>

    
    <nav>
         <div class="logo">
      SegurApp
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="">inicio</a></li>
            <li><a href="tips.php">Tips</a></li>
            <li><a href="barrios.php">Barrios</a></li>
            <li><a href="formulario.php">Denuncias</a></li>
            <li><a href=""><?= $user['email']; ?></a></li>
            <li><a href="logout.php">Salir</a></li>
         </ul>
      </nav>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3862233964696!2d-75.58022878590677!3d6.212686328423714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429d4718db671%3A0xdd656024ad03fe1f!2sPoblado!5e0!3m2!1sen!2sco!4v1632831232090!5m2!1sen!2sco" width="1354" height="653" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
  <?php else : ?>
    <section class="inicio">
      <div class="container">
        <section class="about-services">
          <div class="contenedor">
            <h2 class="titulo">SegurApp</h2>
            <div class="servicio-cont">
              <div class="servicio-ind">
                <img src="img/logo.png" alt="">
              </div>
              <div class="servicio-ind">
                <img src="img/IMG-20211005-WA0157.jpg" alt="">

              </div>
              <div class="servicio-ind">
                <img src="img/IMG-20211005-WA0158.jpg" alt="">

              </div>
            </div>
          </div>
        </section>
        </main>
        <footer style="background-image: url(img/9.jpeg); background-repeat: no-repeat;    background-size: cover;">
          <div class="contenedor-footer">
            <div class="content-foo">
              <a class="link" href="login.php">Iniciar sesión</a>

            </div>
            <div class="content-foo">
              <a class="link" href="signup.php">Registrarse</a>

            </div>
          </div>
        </footer >
      </div>
    </section>
  <?php endif; ?>
  <script src="js/index.js"></script>
  <script>
    const navToggle = document.querySelector(".nav-toggle");
    const navMenu = document.querySelector(".nav-menu");

    navToggle.addEventListener("click", () => {
      navMenu.classList.toggle("nav-menu_visible");

      if (navMenu.classList.contains("nav-menu_visible")) {
        navToggle.setAttribute("aria-label", "Cerrar menú");
      } else {
        navToggle.setAttribute("aria-label", "Abrir menú");
      }
    });
  </script>
</body>

</html>