<?php
require  "Article.php";
require "DBStorage.php";

//$storage = new FileStorage();
$storage = new DBStorage();

if (isset($_POST['title'])) {
    $storage->Save(new Article($_POST['title'], $_POST['text']));
}

?>
<!DOCTYPE html>
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

<form method="post">
    <input type="text" name="title">
    <input type="text" name="text">
    <input type="submit" value="Odoslat">
</form>
<?php foreach ($storage->LoadAll() as $article) { ?>
    <div>
        <h3><?php echo $article->getTitle() ?></h3>
        <p><?php echo $article->getText() ?></p>
    </div>
<?php } ?>

</body>
</html>