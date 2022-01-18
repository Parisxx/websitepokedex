<?php
   session_start();
   require_once("db_connection.php");
   $pdo = connect();
 

  #$stmt = $pdo->query("SELECT * FROM pokemon");



  if($_SERVER['REQUEST_METHOD'] == "GET")
  {
  
    $id = $_GET['id'];

    $pdoQuery = "SELECT * FROM pokemon WHERE id =" . $id;

    $stmt = $pdo->query($pdoQuery);

  } 


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

    <?php
     while ($data = $stmt->fetch())
      {
        echo "<h2>". $data['entry'] . "</h2>";
        echo "<h1>" . $data['name'] ."</h1>";
        echo "<img src='./fotos/" . $data['photo'] . "' width='300' />";
        echo "<p> Type: " . $data['type'] . "</p>";
        echo "<p> Weakness: " . $data['weakness'] . "</p>";
        echo "<p> Category: " . $data['category'] ."</p>";
        echo "<p> Abilities: " . $data['abilities'] . "</p>";
        echo "<p> Height: " . $data['height'] ."</p>";
        echo "<p> Weight: " . $data['weight'] ."</p>";
        echo "<p> Gender: " . $data['gender'] . "</p>";

      }
    ?>
    
</div>
    

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>