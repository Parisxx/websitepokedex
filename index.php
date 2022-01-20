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
<html>

<head>

<title>Internet</title>
</head>

<body style="background-color:yellow;">



<input type="text" name="q" placeholder="Search Google" cols="4" rows="5">
        <input type="submit" value="search">
<form action="file:///C:/Users/User/Desktop/Untitled1.htm" method="GET">
        

</html>
<div class='types'>
<li><a id='grass' href="grass.php">Grass</a></li>
<li><a id='water' href="water.php">Water</a></li>
<li><a id='fire'href="fire.php">Fire</a></li>
<li><a id='normal' href="normal.php">Normal</a></li>
<li><a id='poison'href="poison.php">Poison</a></li>
<li><a id='flying' href="flying.php">Flying</a></li>
<li><a id='electric' href="electric.php">Electric</a></li>
<li><a id='ice' href="ice.php">Ice</a></li>
<li><a id='fight' href="fight.php">Fighting</a></li>
<li><a id='ground' href="ground.php">Ground</a></li>
<li><a id='psychic' href="psychic.php">Psychic</a></li>
<li><a id='bug' href="bug.php">Bug</a></li>
<li><a id='rock' href="rock.php">Rock</a></li>
<li><a id='ghost' href="ghost.php">Ghost</a></li>
<li><a id='dragon' href="dragon.php">Dragon</a></li>
<li><a id='steel' href="steel.php">Steel</a></li>
<li><a id='dark' href="dark.php">Dark</a></li>
<li><a id='fairy' href="fairy.php">Fairy</a></li>

</div>

<div class="pokemon">

    <?php
     while ($data = $stmt->fetch())
      {

           echo "<div class='column'>";
             echo "<br>";
             echo "<div class='column2'>";

              echo "<a class='link' href='information.php?id=" . $data['id'] ."'>";
                 echo "<h2>". $data['entry'] . "</h2>";
                 echo "<h1>" . $data['name'] ."</h4>";


                 echo "<button id='type'style='background-color:" . $data['color1'] .";' type='button'>" . $data['type1']. " </button>";
                 echo "<button id='type' style='background-color:" . $data['color2'] .";' type='button'>" . $data['type2']. " </button>";
 

                 #echo "<a href='information.php?id=" . $data['id'] ."'>";
                 echo "<img src='./fotos/" . $data['photo'] . "' width='300' />";
                 #echo "</a>"; 
                echo "</a>";
              echo "</div>";
              echo "<br>";
              echo "<br>";
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
