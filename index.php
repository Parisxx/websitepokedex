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
    <img src="./fotos/pokeball.png"  class="pokeball" alt="pokeball">
      <h1 id="headertext">Pokedex</h1> 
     </div>
     <br>

    <?php
    while ($data = $stmt->fetch())
      {
          echo "<div class='pokemon'>";
            echo "<h2>". $data['entry'] . "</h2>";
            echo "<h1>" . $data['name'] ."</h4>";
            echo "<h3> " . $data['type'] . "</h3>";
            echo "<img src='./fotos/" . $data['photo'] . "' width='300' />";

          echo "</div>";

          
      }
    ?>
    

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>
