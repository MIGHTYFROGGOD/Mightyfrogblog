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
              <a href="pages/Blog.php">Be a blogger</a>
          </div>
          <div class="commentbutton">
              <a href="pages/comment.php">write a comment </a>
          </div>
        </nav>
      <fieldset>
        <h2>Welcome to Fynnus Blogus</h2>
          <div class="gif">
          <img src="media/hello.gif" alt="hello gif">
          </div>
            <h3> Our Blogs:</h3><br>
            <div class="ourblogs">
              <?php
              //DATABASE CONNECTION
              $stmt="";
              $dbh = new PDO('mysql:host=localhost;dbname=blog','root' ,'');
                $stmt = $dbh->query('SELECT * FROM `eintreage` ORDER BY id DESC'); // WHERE = wo ?like = nach was %=platzhalter OREDER BY = nach welcherspalte DES = descending

                foreach($stmt->fetchAll() as $x) {
                  ?>
                  <div class="comments">
                    <a href="pages/comment.php">Your Opinion</a>
                  </div>
                  <?php
                  echo 'Username: '. $x["username"] . '<br />';
                  echo 'He/She wrote: '.'<br />'. $x["blog"] . '<br />';
                  echo 'Date: '. $x["date"] . '<br />';
                  echo 'Time: '. $x["time"] . '<br />';
                  echo '<br />';
                  echo '<br />';
                  
                }?>



                <h3>Check out the other blogs of my colleagues!</h3><br>
              </div>
            <div class="links">
            <ul>
              <?php  $dbconnection = new PDO('mysql:host=10.20.16.102;dbname=ipadressen','DB_BLJ' ,'BLJ12345l');
                $stmt = $dbconnection->query("SELECT ip, home FROM t_ipadress ORDER BY ID");
                $ipArray = $stmt -> fetchALL ();
                ?>
              <li><a href="http://<?php echo $ipArray[6][0]?><?php echo $ipArray[6][1] ?>">Björn's Site</a></li>
              <li><a href="http://<?php echo $ipArray[1][0]?><?php echo $ipArray[1][1] ?>">Carolina's Site</a></li>
              <li><a href="http://<?php echo $ipArray[7][0]?><?php echo $ipArray[7][1] ?>">Rafi's Site</a></li>
              <li><a href="http://<?php echo $ipArray[0][0]?><?php echo $ipArray[0][1] ?>">Dave's Site</a></li>
              <li><a href="http://<?php echo $ipArray[3][0]?><?php echo $ipArray[3][1] ?>">Céline's Site</a></li>
              <li><a href="http://<?php echo $ipArray[4][0]?><?php echo $ipArray[4][1] ?>">Jennifers Site</a></li>
              <li><a href="http://<?php echo $ipArray[5][0]?><?php echo $ipArray[5][1] ?>">Timon's Site</a></li>
            </ul>
            </div>

      </form>
    </form>
    </div>
  </body>
</html>
