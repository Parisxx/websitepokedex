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
<h1 class="titel"> Water </h1> 
<h1 class="titel2"> (Type) </h1>


<p> Water is one of the three basic elemental types along with Fire and Grass, 
    which constitute the three starter Pokémon. This creates a simple triangle to explain the type concept easily to new players. 
    Water is the most common type with over 100 Pokémon, 
    which are based on a wide variety of fish and other sea-dwelling creatures.As of Generation 6, 
    Water has been paired with every other type.

    
</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>