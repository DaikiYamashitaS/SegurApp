<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /php-login');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: /php-login-simple");
  } else {
    $message = 'Los datos son incorrectos';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Iniciar sesión</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

</head>

<body style="background-image: url(img/9.jpeg); background-repeat: no-repeat;    background-size: cover;">


  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>
  <div class="login-container">
    <div class="login-info-container">
      <h1 class="title">Iniciar sesión</h1>
      <div class="social-login">
        <div class="social-login-element">
          <img src="img/google.svg" alt="google-image">
          <span>Google</span>
        </div>
        <div class="social-login-element">
          <img src="img/facebook.svg" alt="facebook-image">
          <span>Facebook</span>
        </div>
      </div>

      <form class="inputs-container" action="login.php" method="POST">
        <input class="input" name="email" type="text" placeholder="Correo">
        <input class="input" name="password" type="password" placeholder="Contraseña">
        <button class="btn" type="submit">Iniciar sesión</button>
        <p>No tienes una cuenta? <a href="signup.php" class="span">Registrarse</a></p>
      </form>
    </div>
    <img class="image-container" src="img/8.jpeg" alt="">
  </div>
</body>

</html>