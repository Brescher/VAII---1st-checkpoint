<?php
require "Article.php";
require "DBStorage.php";

//$storage = new FileStorage();
$storage = new DBStorage();

if (isset($_POST['title'])) {
    $storage->Save(new Article($_POST['title'], $_POST['text']));
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styl.css">
</head>
<?php include "nav.php" ?>
<body>


<div class="container">
    <div class="row">
        <div class="col-2">

        </div>

        <div class="col-sm-9">
            <p>V prípade problému, tu napíšte ticket, pracovník podpory si ho prečíta a pokúsi sa vyriešíť váš
                problém.</p>
            <p>Do prvého políčka napíšte názov problému a do druhého jeho stručný popis.</p>
        </div>

        <div class="col-1">

        </div>
    </div>

    <form method="post">
        <div class="row justify-content-center mt-1" align="center">
            <div class="col-sm-6">
                    <input type="text" name="title" required>
            </div>
        </div>

        <div class="row justify-content-center mt-1" align="center">
            <div class="col-sm-6">
                    <textarea name="text" rows="5" cols="40" required></textarea>
            </div>
        </div>

        <div class="row justify-content-center mt-1" align="center">
            <div class="col-sm-6">
                <input type="submit" value="Odoslat">
            </div>
        </div>
    </form>
    </div>
</div>
<?php foreach ($storage->LoadAll() as $article) { ?>
    <div class="container">
        <div class="row  mt-4">
            <div class = "col-sm-3">

            </div>

            <div class="col-sm-6">
                <h3><?php echo $article->getTitle() ?></h3>
                <p><?php echo $article->getText() ?></p>
            </div>
        </div>
    </div>
<?php } ?>
</body>
</html>
