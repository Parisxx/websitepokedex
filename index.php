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
    <p> Ivysaur
    

<div class="footer">
  <p> @copyright2022
</div>
</body>
</html>
