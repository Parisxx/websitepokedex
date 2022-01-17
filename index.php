<?php
   session_start();
   require_once("db_connection.php");
   $pdo = connect();
 

  $stmt = $pdo->query("SELECT * FROM pokedex");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    
</body>
</html>
