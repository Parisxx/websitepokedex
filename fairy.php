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

<h1 class="titel"> Fairy </h1> 
<h1 class="titel2"> (Type) </h1>


<p> The Fairy type was introduced in Generation 6 - the first new type for more than 12 years! Its main
     intention was to balance the type chart by reducing the power of dragons, while also giving an offensive boost to the Poison 
     and Steel types. Several old Pokémon were retyped and new Pokémon introduced. There are only around 60 Fairy type Pokémon
     (depending on how you count alternate forms or mega evolutions), in total slightly above Ice.

</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>
