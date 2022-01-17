<?php
   session_start();
   require_once("db_connection.php");
   $pdo = connect();
 

  $stmt = $pdo->query("SELECT * FROM pokemon");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="icon" href="./fotos/pokeball.png">

</head>
<body>
<div class="header">
   <a href="index.php">
      <img src="./fotos/pokeball.png"  class="pokeball" alt="pokeball">
    </a>
      <h1 id="headertext">Pokedex</h1> 
     </div>

<div class="pokemon">

    <?php
     while ($data = $stmt->fetch())
      {
        echo "<h2>". $data['entry'] . "</h2>";
        echo "<h1>" . $data['name'] ."</h1>";
        echo "<img src='./fotos/" . $data['photo'] . "' width='300' />";
        echo "<h3> " . $data['type'] . "</h3>";
        echo "<h3>" . $data['category'] ."</h3>";
        echo "<h3> " . $data['abilities'] . "</h3>";
        echo "<p>" . $data['height'] ."</h4>";
        echo "<p>" . $data['weight'] ."</h4>";
        echo "<p> " . $data['gender'] . "</p>";

      }
    ?>
    
</div>
    

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>