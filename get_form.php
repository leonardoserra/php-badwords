<?php
//codice
$paragraph = $_GET['paragraph'];
$censorship = $_GET['censorship'];
$length_paragraph = 'lunghezza testo: ' . strlen($paragraph) . ' caratteri';
$censored = str_replace($censorship, '***', $paragraph);
$length_censored = 'lunghezza testo: ' . strlen($censored) . ' caratteri';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style_get_form.css" />

</head>
<body>
    <h1>Ciao sono la pagina dopo</h1>
    <div>
        <?php
            echo "<div>Testo: $paragraph</div>";
            echo "<div>$length_paragraph</div>";
            
            echo "<div>Testo: $censored</div>";
            echo "<div>$length_censored</div>";
        ?>
    </div>
</body>
</html>