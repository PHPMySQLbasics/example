<!DOCTYPE HTML>
<html>
<head>
    <title>Filmdatenbank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<nav>
    <?php
    include 'nav.html';
    ?>
</nav>
<main>
    <br>
<?php
include 'config.php';

    switch($_GET['seite'])
    {
        case 'suche_produktionsfirma':
            include 'sucheProduktionsfirma.php';
            break;
        case 'suche_schauspieler':
            include 'sucheschauspieler.php';
            break;
        default:
            break;
    }
?>
</main>
</body>
</html>
