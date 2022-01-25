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
<img class="typeimg" src="./fotos/FlyingType.png" width="100px">
<h1 class="titel"> Flying </h1> 
<h1 class="titel2"> (Type) </h1>


<p>Most Flying type Pokémon are based on birds or insects, along with some mythical creatures like dragons.
     On average they are faster than any other type.
Nearly every Flying type has Flying as the secondary type, usually with Normal. There are only three pure Flying type Pokémon 
(Tornadus, Rookidee, Corvisquire), and four Pokémon with Flying as a primary type (Noibat, Noivern, Corviknight, Cramorant). As of Generation 6, 
the type has also been paired with every other type.
</div>

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>