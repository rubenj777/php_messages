<?php
require_once "code.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css" />
  <title>Message</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/message">Message Board</a>
    </div>
  </nav>

  <div class="container">
    <?= $pageContent ?>
  </div>
</body>

</html>