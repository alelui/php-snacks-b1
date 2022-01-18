<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$calendario = [
    [
        "casa" => 'Olimpia Milano',
        "puntiCasa" => '55',
        "ospiti" => 'Cantù',
        "puntiOspiti" => '60',        
    ],
    [
        "casa" => 'Bulls',
        "puntiCasa" => '95',
        "ospiti" => 'Panters',
        "puntiOspiti" => '45',        
    ],
    [
        "casa" => 'Banana Rama',
        "puntiCasa" => '35',
        "ospiti" => 'Nianin',
        "puntiOspiti" => '78',        
    ],
];
// echo "<pre>";
// var_dump($calendario);
// echo "<pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabellone Partite</h1>
    <?php
        
        for($i = 0; $i < count($calendario); $i++){
            echo "<p>{$calendario[$i]["casa"]} - {$calendario[$i]["puntiCasa"]} | {$calendario[$i]["ospiti"]} - {$calendario[$i]["puntiOspiti"]}</p>";
        };
    ?>
</body>
</html>