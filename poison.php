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
<img class="typeimg" src="./fotos/PoisonType.png" width="100px">
<h1 class="titel"> Poison </h1> 
<h1 class="titel2"> (Type) </h1>


<p> The Poison type is regarded as one of the weakest offensively. 
    Prior to Pokémon X/Y it was super-effective only against Grass (many of which are dual Poison so neutralizes the effect). 
    It now has an extra advantage against the new Fairy type. 
    In the first generation it was also super-effective against Bug but this was changed. 
    It fares a little better defensively but its best advantage is through status moves like Toxic.

</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>