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
<img class="typeimg" src="./fotos/DragonType.png" width="100px">
<h1 class="titel"> Dragon </h1> 
<h1 class="titel2"> (Type) </h1>


<p> Dragons are among the most elusive and powerful of all Pokémon. Nine legendary Pokémon are part Dragon type and four have 
    legendary-like stats.

They are notoriously difficult to train due to requiring more EXP points per level than most non-legendary Pokémon,
 and the fact they evolve much later and thus are in their weaker forms for longer.
 Interestingly, many final-evolution Dragon types have a 4x weakness to the Ice type.
</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>
