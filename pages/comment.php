<?php
/*$eingabe= [];
$errors = [];

$comment = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    array_push($eingabe, "<br>Ihre Eingabe: ");

    $comment= trim($_POST["comment"] ?? '');

    if (empty($comment)) {
      array_push($errors, "Please write something into your Blog");
      // $errors[] = "Bitte geben Sie einen Namen ein.";
    }
    else if (!empty($blog)) {
      array_push($eingabe, "comment: $comment");
    }
    if($comment !== '')
      {
        if(strpos($comment, ' ') === false)
        {
          $errors[] = "Your text has no whitespaces.";
        }
      }

}
 ?>
<!-- <!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/style.css"
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
<body>
  <div class="wrapper">
    <form action="comment.php" method="POST">

        <nav>
          <div class="homebutton">
              <a href="../Index.php">Home</a>
          </div>
          <div class="blogbutton">
              <a href="../pages/Blog.php">Be a blogger</a>
          </div>
          <div class="commentbutton">
              <a href="../pages/comment.php">write a comment </a>
          </div>
        </nav>
      <fieldset>
      <h2>State your opinion</h2>
          <label for="blogs">Choose your Blog:</label><br>
          <input class="radio" type="radio" name="Blog01" value="Blog01"><p>iuaduha</p>

          <label for="comment">Your comment:</label><br>
          <textarea id="blog" name="comment" placeholder="write something"></textarea>
        </fieldset>
          <input class="submit" type="submit" value="Send">
          <?php
          if (!empty($errors)) { ?>
          <div class="errors">
            <ul>
            <?php
            foreach ($errors as $ausgabe) {
              echo ('<li>' . $ausgabe . '</li>');
            }
            ?>
            </ul>
          </div>
            <?php } ?>
            <?php
            if (empty($errors) && !empty($comment)){
            $comment = nl2br($comment);
            $comment=strip_tags($comment, '<img><a><br>');
            $dbh = new PDO('mysql:host=localhost;dbname=blog','root' ,'');
            $stmt = $dbh->query("INSERT INTO `eintreage` (comment) VALUES ('$comment')");
              }
       ?>
      </form>
    </div>
  </body>
</html>
