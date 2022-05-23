<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 

$risultati = [
        [
            'casa' => 'Dinamo Sassari',
            'ospite' => 'Virtus Bologna',
            'ptCasa' => '55',
            'ptOspite' => '60',
        ],
        [
            'casa' => 'Reggiana',
            'ospite' => 'Universo Treviso',
            'ptCasa' => '75',
            'ptOspite' => '67',
        ],
        [
            'casa' => 'Olimpia Milano',
            'ospite' => 'Cantù',
            'ptCasa' => '99',
            'ptOspite' => '42',
        ],
        [
            'casa' => 'Venezia',
            'ospite' => 'Varese',
            'ptCasa' => '68',
            'ptOspite' => '67',
        ],
        [
            'casa' => 'Napoli',
            'ospite' => 'Cremona',
            'ptCasa' => '84',
            'ptOspite' => '79',
        ]
    ];



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
    
<?php
for($i=0; $i<count($risultati); $i++){
    echo "<span>{$risultati[$i]['casa']} - </span> 
          <span>{$risultati[$i]['ospite']} | </span>
          <span>{$risultati[$i]['ptCasa']} - </span>
          <span>{$risultati[$i]['ptOspite']}</span> <br>";
} 
?>


</body>
</html>