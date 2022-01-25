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
<img class="typeimg" src="./fotos/PsychicType.png" width="100px">
<h1 class="titel"> Psychic </h1> 
<h1 class="titel2"> (Type) </h1>


<p> The Psychic type has few outright strengths, however, it also has
     few weaknesses. In the first generation it ended up being massively overpowered, mainly due to a complete lack 
     of powerful Bug moves, its only weakness. Furthermore, a mistake in the game meant that Ghost-type moves had no effect 
     on Psychic (although this only affected the low-powered Lick). Generation
     2 rectified the situation with the addition of the Dark type along with better Pokémon and moves of all types.

</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>
