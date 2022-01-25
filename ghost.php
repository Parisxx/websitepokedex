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
<img class="typeimg" src="./fotos/GhostType.png" width="100px">
<h1 class="titel"> Ghost </h1> 
<h1 class="titel2"> (Type) </h1>


<p> Ghosts are rare Pokémon, and the only type to have two immunities. In total there are just 34 Ghost type Pokémon
     (not including Megas/Formes),
     slightly above Ice.

In the first generation, Ghost moves has
 no effect on Psychic Pokémon, however, it was later changed to be super-effective.
  When paired with the Dark type it was the only type combination to have no weaknesses prior to Gen 6.

</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>
