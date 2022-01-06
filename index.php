<?php
require_once "db.php";
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
      <a class="navbar-brand" href="/messageboard">Message Board</a>
    </div>
  </nav>

  <div class="container d-flex mt-5 justify-content-center">
    <form action="createMsg.php" method="post" class="col-4 m-5">
      <div class="d-flex flex-column justify-content-center">
        <input type="text" name="auteur" placeholder="Votre nom" class="m-2">
        <textarea name="description" cols="5" rows="3" placeholder="Votre message" class="m-2"></textarea>
        <button type="submit" class="btn btn-success m-2">Poster</button>
      </div>
    </form>
    <div class="d-flex flex-column col-8">
      <?php foreach ($messages as $message) { ?>
        <div class="mb-3 p-3 card">
          <h3 style="color:teal"><?= $message['auteur'] ?></h3>
          <p><?= $message['description'] ?></p>
          <p><?= $message['date'] ?></p>
          <form action="deleteMsg.php" method="post">
            <button name="delete" value="<?= $message['id'] ?>" href="" type="submit" class="btn btn-danger"><strong>X</strong></button>
          </form>
        </div>
      <?php } ?>
    </div>

  </div>




</body>

</html>