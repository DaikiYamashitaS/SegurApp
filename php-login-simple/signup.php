<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Usuario creado';
  } else {
    $message = 'No se puede crear la cuenta';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registrarse</title>
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
      <h1 class="title">Registrarse</h1>
        <form class="inputs-container" action="signup.php" method="POST">
        <input class="input" name="email" type="text" placeholder="Correo">
        <input class="input" name="password" type="password" placeholder="Contraseña">
        <input class="input" name="confirm_password" type="password" placeholder="Confirmar contraseña">

        <button class="btn" type="submit">Iniciar sesión</button>
        <p>Tienes una cuenta? <a href="login.php" class="span">Iniciar sesión</a></p>
      </form>
    </div>
    <img class="image-container" src="img/8.jpeg" alt="">
  </div>
</body>

</html>