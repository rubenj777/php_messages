<?php
require_once "code.php";
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
        </div>
    </nav>

    <div class="container d-flex mt-5 justify-content-center">

        <div class="d-flex flex-column col-8">
            <div class='mb-3 p-3 card'>

                <h3 style='color:teal'><?= $message['auteur'] ?></h3>

                <?php if ($editMode) { ?>

                    <form action="updateMsg.php" method="post">
                        <textarea name="content" id="" cols="30" rows="10"><?= $message['description'] ?></textarea>
                        <button type="submit" name="update" value="<?= $message['id'] ?>" class="btn btn-primary">Modifier</button>
                    </form>

                <?php } else { ?>

                    <p><?= $message['description'] ?></p>
                    <p>Message posté le <?= $message['date'] ?></p>
                    <div class='d-flex'>
                        <form action='deleteMsg.php' method='post'>
                            <button name='delete' value='<?= $message['id'] ?>' type='submit' class='btn btn-danger me-2'><strong>X</strong></button>
                        </form>
                        <a href="message.php?id=<?= $message['id'] ?>&edit" class="btn btn-warning">Modifier le message</a>
                    </div>

                <?php } ?>

            </div>

        </div>




</body>

</html>