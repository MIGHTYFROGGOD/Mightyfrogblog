<?php include 'models/blog.model.php'; ?>

<h2>Write your story</h2>
    <label class="form-name" for="username">Your name:</label><br>
    <input class="form-name" type="text" id="username" name="username"></input><br>

    <label for="blog">Your blog:</label><br>
    <textarea id="blog" name="blog" placeholder="Expand this site with your words!"></textarea>
  </fieldset>
    <input name ="blogsend"class="submit" type="submit" value="Send">
    <?php include 'zwischendings/blog.view.model.php'; ?>
    <?php include 'zwischendings/blog.view.model.2.php'; ?>
