<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/style.css"
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
<body>
  <div class="wrapper">
    <form action="pages/Blog.php" method="POST">
      <form action="Blog.php" method="POST">
        <nav>
          <div class="homebutton">
              <a href="Index.php">Home</a>
          </div>
          <div class="blogbutton">
              <a href="index.php?page=blog">Be a blogger</a>
          </div>
          <!-- <div class="commentbutton">
              <a href="pages/comment.php">write a comment </a>
           </div>-->
        </nav>
      <fieldset>
        <?php
        $page = $_GET['page'] ?? 'home';

        include 'views/'. $page .'.view.php';

        /*
        <?php include 'views/blog.view.php'; ?>
        */?>
      </form>
    </form>
    </div>
  </body>
</html>
