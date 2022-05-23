<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

$text = 'nostrum voluptate velit deleniti minima. corrupti perferendis, non optio, eaque dolores voluptatum. Eveniet, doloremque inventore! Porro, suscipit, voluptates nam ratione dolorem ipsam quisquam deserunt ducimus corrupti. officia expedita deleniti. Illum est molestiae omnis, nulla id repudiandae. tempore harum temporibus corporis pariatur quod iusto laudantium, praesentium fuga magnam unde alias repellat!';

$pieces = explode(".", $text);



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

   for($i = 0; $i < count($pieces); $i++){
    $x = $pieces[$i];
     echo "<span>{$x}.</span> <br>" ;
}
   
   ?>
</html>