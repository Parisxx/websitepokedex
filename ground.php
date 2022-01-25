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
<img class="typeimg" src="./fotos/GroundType.png" width="100px">
<h1 class="titel"> Ground </h1> 
<h1 class="titel2"> (Type) </h1>


<p> Ground is one of the strongest types offensively: it is super-effective against five other types (as is Fighting) and Earthquake is one of the strongest moves in the game with power and accuracy both 100. Unfortunately,
     many Ground type Pokémon are dual Rock types, lumbering them with 4x Grass and Water disadvantages.

</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>
