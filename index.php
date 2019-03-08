<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
  <header>
      <h1>The Super-Superhero System</h1>
      <h2>Superhero Home Page</h2>
  </header>
<p>What would you like to do?</p>
<ul>
    <li><a href="superheroform.html">Insert a superhero</a></li>
    <li><a href="displaySuperheros.php">Display all superheroes</a></li>
    <li><a href="battle.php">Insert a battle</a></li>
    <li><a href="displayBattle.php">Display all battles</a></li>
<ul>
  <?php
  include("db_connect.php");
  $sql_query = "SELECT * FROM superheroes";
  $result= $db->query($sql_query);
  while($row = $result->fetch_array())
  {
      $firstname=$row['firstName'];
      $lastname=$row['lastName'];
      $id = $row['superheroID'];
      echo "<li><a href=''displayBattles.php?id='{id}'>Battles for {$firstname} {$lastname}</a></li>";

  }
  ?>

</ul>
</ul>

</body>
</html>
/**
 * Created by PhpStorm.
 * User: pauline
 * Date: 2019-03-08
 * Time: 19:23
 */