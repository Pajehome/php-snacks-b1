<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$studenti = [

            [
                'nome' => 'Michele',
                'cognome' => 'Papagni',
                'voto' => [
                    '5', '10', '8'
                ]
            ],
            [
                'nome' => 'Michelle',
                'cognome' => 'Papagni',
                'voto' => [
                    '5', '10', '8'
                ]
            ],
            [
                'nome' => 'Michela',
                'cognome' => 'Papagni',
                'voto' => [
                    '5', '10', '8'
                ]
            ],
            [
                'nome' => 'Micheal',
                'cognome' => 'Papagni',
                'voto' => [
                    '5', '10', '8'
                ]
            ], 
    ];

   for($i=0; $i<count($studenti); $i++){
       echo $studenti[$i]['nome'];
       echo $studenti[$i]['cognome'];

       
   }



?>