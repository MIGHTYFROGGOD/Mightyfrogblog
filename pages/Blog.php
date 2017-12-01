<?php
$errors = [];
$eingabe = [];

$username="";
$blog="";
$bild = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    array_push($eingabe, "<br>Ihre Eingabe: ");

    $username = $_POST["username"] ?? '';

  if (empty($username)) {
    array_push($errors, "Please tell us how we should call you.");
}
  else if (!empty($username)) {
    array_push($eingabe, "Your Username: $username");
}
  $blog = trim($_POST["blog"] ?? '');

  if (empty($blog)) {
    array_push($errors, "Please write something into your Blog");
    // $errors[] = "Bitte geben Sie einen Namen ein.";
  }
  else if (!empty($blog)) {
    array_push($eingabe, "Blog: $blog");
  }
  if($blog !== '')
    {
      if(strpos($blog, ' ') === false)
      {
        $errors[] = "Your text has no whitespaces.";
      }
    }
}
?>
  <!DOCTYPE html>
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
      <form action="Blog.php" method="POST">

          <nav>
            <div class="homebutton">
                <a href="../Index.php">Home</a>
            </div>
            <div class="blogbutton">
                <a href="../pages/Blog.php">Be a blogger</a>
            </div>
            <!--<div class="commentbutton">
                <a href="../pages/comment.php">write a comment </a>
            </div>-->
          </nav>
        <fieldset>
        <h2>Write your story</h2>
            <label class="form-name" for="username">Your name:</label><br>
            <input class="form-name" type="text" id="username" name="username"></input><br>

            <label for="blog">Your blog:</label><br>
            <textarea id="blog" name="blog" placeholder="Expand this site with your words!"></textarea>
          </fieldset>
            <input name ="blogsend"class="submit" type="submit" value="Send">
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
              if (empty($errors) && !empty($username)&& !empty($blog)) {
              $blog = nl2br($blog);
              $blog=strip_tags($blog, '<img><a><br>');
              $username=htmlspecialchars($username);
              $dbh = new PDO('mysql:host=localhost;dbname=blog','root' ,'');
              $stmt = $dbh->query("INSERT INTO `eintreage` (username,date,time,blog) VALUES ('$username',curdate(), curtime(), '$blog')");
                }

         ?>
        </form>
      </div>
    </body>
  </html>
