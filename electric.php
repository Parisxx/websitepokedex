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
<img class="typeimg" src="./fotos/ElectricType.png" width="100px">
<h1 class="titel"> Electric </h1> 
<h1 class="titel2"> (Type) </h1>


<p>There are relatively few Electric Pokémon; in fact only four were added in the third generation. Most are based on rodents or inanimate objects.
Electric Pokémon are very good defensively, being weak only to Ground moves. Eelektross is the only Pokémon to have no type disadvantages due to its ability, Levitate.

</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>