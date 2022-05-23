<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
-->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Pippo',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Pliuto',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Paperino',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Topolonsky',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Minisky',
            'text' => 'Testo post 6'
        ]
    ],
];
    


?>

​
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>
    </head>

     <body>
     <p>
            
<?php
// for($i=0; $i<count($posts); $i++){
//     //  echo "<span>{$posts[$i]} - </span>";
//     var_dump ($posts);
// //   for($o=0; $o<count($posts[$i]); $o++){
      
//       echo "<span>{$posts[$i][$o]['title']} - </span>";
//   }   

foreach ($posts as $key => $value){
      echo $key ?> <br> <?php 
    //  var_dump ($value);
     for($i=0; $i<count($value); $i++){
       echo "<span>{$value[$i]['title']} <br> </span>
             <span>{$value[$i]['author']} <br> - </span>
             <span>{$value[$i]['text']}<br>  - </span>";
     }
}

// }


?>
    </body>

    </html>
​