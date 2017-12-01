  <h2>Welcome to Fynnus Blogus</h2>
  <div class="gif">
  <img src="media/hello.gif" alt="hello gif">
  </div>
    <h3> Our Blogs:</h3><br>
    <div class="ourblogs">
      <?php include 'zwischendings/home.view.model.php';  ?>

        <h3>Check out the other blogs of my colleagues!</h3><br>
      </div>
    <div class="links">
    <ul>
      <?php include 'zwischendings/home.view.model.2.php'; ?>

      <li><a href="http://<?php echo $ipArray[6][0]?><?php echo $ipArray[6][1] ?>">Björn's Site</a></li>
      <li><a href="http://<?php echo $ipArray[1][0]?><?php echo $ipArray[1][1] ?>">Carolina's Site</a></li>
      <li><a href="http://<?php echo $ipArray[7][0]?><?php echo $ipArray[7][1] ?>">Rafi's Site</a></li>
      <li><a href="http://<?php echo $ipArray[0][0]?><?php echo $ipArray[0][1] ?>">Dave's Site</a></li>
      <li><a href="http://<?php echo $ipArray[3][0]?><?php echo $ipArray[3][1] ?>">Céline's Site</a></li>
      <li><a href="http://<?php echo $ipArray[4][0]?><?php echo $ipArray[4][1] ?>">Jennifers Site</a></li>
      <li><a href="http://<?php echo $ipArray[5][0]?><?php echo $ipArray[5][1] ?>">Timon's Site</a></li>
    </ul>
    </div>
