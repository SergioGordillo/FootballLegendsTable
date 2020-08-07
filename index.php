<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Players Table</title>
</head>
<!-- You have to create a multidimensional array which will include:

Spanish Legends: Casillas, Xavi, Iniesta.
French Legends: Henry, Zidane, Thuram.
English Legends: Lineker, Beckham, Charlton.

Each column has to be in a separate document (using includes). 
The final result has to be shown in a table.

-->
<body>
<?php

    //Creation of the multidimensional array
    $players=array(
        "SPANISH"=>array("Casillas", "Xavi", "Iniesta"),
        "FRENCH"=>array("Henry", "Zidane", "Thuram"),
        "ENGLISH"=>array("Lineker", "Beckham", "Charlton")
    )
?>


<!-- Creation of the table and the UI -->
<table border="1">
        <tr>
            <th>Spanish Legends</th>
            <th>French Legends</th>
            <th>English Legends</th>
        <tr>
        <?php require_once "spanish.php"; ?>
        <?php require_once "french.php"; ?>
        <?php require_once "english.php"; ?>
     
</table>
    
</body>
</html>