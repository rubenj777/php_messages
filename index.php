<?php
session_start();
require_once "code.php";
require_once "auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css" />
  <title>Message</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/messageboard">Facebook</a>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto align-items-center">

          <?php

          if (isset($_SESSION['connected']) && $_SESSION['connected']) { ?>
            <li>
              <form action='' method='post'>
                <input type='submit' name='logout' value='Se déconnecter' class='btn btn-secondary me-2'>
              </form>
            </li>
            <li style="color:black">Bienvenue, <?= $_SESSION['username']; ?></li>

          <?php } else { ?>

            <li class=''>
              <form action='' method='post' class='d-flex'>
                <input type='text' name='username' placeholder="username" class="me-3">
                <input type='password' name='password' placeholder="password" class="me-3">
                <input type='submit' value='Se connecter' class='btn btn-success me-3'>
              </form>
            </li>

          <?php }
          ?>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container d-flex mt-5 justify-content-center">
    <form action="createMsg.php" method="post" class="col-4 m-5">
      <div class="d-flex flex-column justify-content-center">

        <?php if (isset($_SESSION['connected']) && $_SESSION['connected']) { ?>

          <p><?= $_SESSION['username'] ?></p>
        <?php } else { ?>
          <input type="text" name="auteur" placeholder="Votre nom" class="m-2">

        <?php } ?>



        <textarea name="description" cols="5" rows="3" placeholder="Votre message" class="m-2"></textarea>
        <button type="submit" class="btn btn-success m-2">Poster</button>
      </div>
    </form>

    <div class="d-flex flex-column col-8">

      <?php foreach ($messages as $message) { ?>

        <div class='mb-3 p-3 card'>
          <h3 style='color:teal'><?= $message['auteur'] ?></h3>
          <p><?= $message['description'] ?></p>



          <p>Message posté le <?= $message['date'] ?></p>



          <div class='d-flex'>
            <form action='deleteMsg.php' method='post'>
              <button name='delete' value='<?= $message['id'] ?>' type='submit' class='btn btn-danger me-2'><strong>X</strong></button>
            </form>
            <a href="message.php?id=<?= $message['id'] ?>" class="btn btn-info">Voir le message</a>
          </div>


        </div>

      <?php } ?>

    </div>


  </div>

  </div>




</body>

</html>