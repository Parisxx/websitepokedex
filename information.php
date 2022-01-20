<?php
   session_start();
   require_once("db_connection.php");
   $pdo = connect();


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
        echo "<div class='photo'>";
          echo "<h2>". $data['entry'] . "</h2>";
          echo "<h1>" . $data['name'] ."</h1>";
          echo "<img src='./fotos/" . $data['photo'] . "' width='400' />";
        echo "</div>";

        echo "<div class='information'>";
          echo "<br>";
          echo "<br>";

          echo "<button id='type'style='background-color:" . $data['color1'] .";' type='button'>" . $data['type1']. " </button>";
          echo "<button id='type' style='background-color:" . $data['color2'] .";' type='button'>" . $data['type2']. " </button>";


          #echo "<p> Type: " . $data['type'] . "</p>";
          echo "<p> Weakness: " . $data['weakness'] . "</p>";
          echo "<p> Category: " . $data['category'] ."</p>";
          echo "<p> Abilities: " . $data['abilities'] . "</p>";
          echo "<br>";
          echo "<br>";
          echo "<p> Height: " . $data['height'] ."</p>";
          echo "<p> Weight: " . $data['weight'] ."</p>";
          echo "<p> Gender: " . $data['gender'] . "</p>";
        echo "</div>";

        echo "<div class='description1'>";
            echo "<p>" . $data['description'] . "</p>";
       echo "</div>";

       echo "<div class='evolution'>";
          echo "<h2> Evolutions</h2>";
          echo "<img src='./fotos/" . $data['evo1'] . "' width='200' />";
          echo "<img src='./fotos/arrow.png' width='50'  class='arrow' />";
          echo "<img src='./fotos/" . $data['evo2'] . "' width='200' />";
          echo "<img src='./fotos/arrow.png' width='50' class='arrow' />";
          echo "<img src='./fotos/" . $data['evo3'] . "' width='200' />";
       echo "</div>";

      }
    ?>
    
</div>
    

<div class="footer">
    <p> Paris Stassen, Robin Reinders, Vigo Lutke Schipholt
    <p> @copyright2022
</div>
</body>
</html>