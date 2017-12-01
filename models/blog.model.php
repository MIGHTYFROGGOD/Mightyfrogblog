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
