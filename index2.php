

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
        $nome = $_GET['nome'];
        $mail = $_GET['mail'];
        $eta = $_GET['eta'];
        if(!empty($nome) && !empty($mail) && !empty($eta)){
            $alert = 'parametri errati';
            if(strlen($nome) > 3 && strpos($mail, '@')!== false && strpos($mail, '.') !== false && is_numeric($eta) ){
                $alert = 'accesso consentito';
            } else {
                $alert = 'accesso negato';
            };


            };

            ?>

            <p>
                <?php 
                echo $alert;
?></p>


</body>
</html>