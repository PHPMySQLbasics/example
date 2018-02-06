<?php
/**
 * Sample index.php with a navigation for different pages
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Theater</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> <!-- include bootstrap -->
</head>
<body>
<nav>
    <!-- include the navigation bar -->
    <?php
    include 'nav.html';
    ?>
</nav>
<div class="container">
    <main>

        <!-- extends the url with the selected page and include the selected php file -->
        <?php
        if (isset($_GET['seite']))
        {
            switch($_GET['seite'])
            {
                case 'startseite':
                    include 'start.php';
                    break;
                case 'neuspielplan':
                    include 'neuspielplan.php';
                    break;
                case 'suchetheaterstuck':
                    include 'suchetheaterstuck.php';
                    break;
            }
        }
        ?>
    </main>
</div>
</body>
</html>
