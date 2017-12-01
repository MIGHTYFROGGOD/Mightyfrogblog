<?php
if (empty($errors) && !empty($username)&& !empty($blog)) {
$blog = nl2br($blog);
$blog=strip_tags($blog, '<img><a><br>');
$username=htmlspecialchars($username);
$dbh = new PDO('mysql:host=localhost;dbname=blog','root' ,'');
$stmt = $dbh->query("INSERT INTO `eintreage` (username,date,time,blog) VALUES ('$username',curdate(), curtime(), '$blog')");
  }

?>
