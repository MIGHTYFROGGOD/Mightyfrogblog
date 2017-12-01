<?php
//DATABASE CONNECTION
$stmt="";
$dbh = new PDO('mysql:host=localhost;dbname=blog','root' ,'');
  $stmt = $dbh->query('SELECT * FROM `eintreage` ORDER BY id DESC'); // WHERE = wo ?like = nach was %=platzhalter OREDER BY = nach welcherspalte DES = descending

  foreach($stmt->fetchAll() as $x) {
    ?>
    <!--<div class="comments">
      <a href="pages/comment.php">Your Opinion</a>
    </div>-->
    <?php
    echo 'Username: '. $x["username"] . '<br />';
    echo 'He/She wrote: '.'<br />'. $x["blog"] . '<br />';
    echo 'Date: '. $x["date"] . '<br />';
    echo 'Time: '. $x["time"] . '<br />';
    echo '<br />';
    echo '<br />';

  }?>
  <?php

/*$dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$dbr = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$id = $_POST["ID"] ?? '';

if(isset($_POST["horrible"])) {
$bewertung= "Horrible";
}
if(isset($_POST["meh"])) {
$bewertung= "Meh";
}
if(isset($_POST["medium"])) {
$bewertung= "Medium";
}
if(isset($_POST["good"])) {
$bewertung= "Good";
}
if(isset($_POST["godlike"])) {
$bewertung= "Godlike";
}

if($bewertung == "Horrible") {
$stmt = $dbr->query("UPDATE eintreage SET summ_bewertungen = summ_bewertungen + 1, anzahl_bewertungen = anzahl_bewertungen +1 WHERE id ='$id'");
}
if($bewertung == "Meh") {
$stmt = $dbr->query("UPDATE eintreage SET summ_bewertungen = summ_bewertungen + 2,  anzahl_bewertungen = anzahl_bewertungen +1 WHERE id ='$id'");
}
if($bewertung == "Medium") {
$stmt = $dbr->query("UPDATE eintreage SET summ_bewertungen = summ_bewertungen + 3 WHERE id ='$id'");
$stmt1 = $dbr->query("UPDATE eintreage SET anzahl_bewertungen = anzahl_bewertungen + 1 WHERE id ='$id'");
}
if($bewertung == "Good") {
$stmt = $dbr->query("UPDATE eintreage SET summ_bewertungen = summ_bewertungen + 4 WHERE id ='$id'");
$stmt1 = $dbr->query("UPDATE eintreage SET anzahl_bewertungen = anzahl_bewertungen + 1 WHERE id ='$id'");
}
if($bewertung == "Godlike") {
$stmt = $dbr->query("UPDATE eintreage SET summ_bewertungen = summ_bewertungen + 5 WHERE id ='$id'");
$stmt1 = $dbr->query("UPDATE eintreage SET anzahl_bewertungen = anzahl_bewertungen + 1 WHERE id ='$id'");
}
}

$stmt = $dbh -> query ('SELECT *, (summ_bewertungen / anzahl_bewertungen) AS AvgRating  FROM eintreage ORDER BY id DESC');
$blogArray = [];
foreach ($stmt->fetchAll() as $x) {
array_push($blogArray, $x);
}
echo '<form action="pages/Blog.php" method="post">';
echo '<button class="btn-primary" name="horrible" type="submit">Horrible</button>';
echo '<button class="btn-primary" name="meh" type="submit">Meh</button>';
echo '<button class="btn-primary" name="medium" type="submit">Medium</button>';
echo '<button class="btn-primary" name="good" type="submit">Good</button>';
echo '<button class="btn-primary" name="godlike" type="submit">Godlike</button>' . '<br />';
echo '<input name = "id" type="hidden" value="'. $x["id"] . '" />';

if($x['AvgRating'] != NULL) {
if($x["AvgRating"] < 2)
echo 'Durchschnittsbewertung= Horrible';
if($x["AvgRating"] >=2 && $x["AvgRating"] < 3)
echo 'Durchschnittsbewertung= Meh';
if($x["AvgRating"] >=3 && $x["AvgRating"] < 4)
echo 'Durchschnittsbewertung= Medium';
if($x["AvgRating"] >=4 && $x["AvgRating"] < 5)
echo 'Durchschnittsbewertung= Good';
if($x["AvgRating"] == 5 && $x["AvgRating"] > 4.8)
echo 'Durchschnittsbewertung= Godlike';
}
else {
echo 'Seien Sie der erste der bewertet! :C';
}
echo '</form>';
*/?>
