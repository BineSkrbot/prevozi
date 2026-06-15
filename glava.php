<?php
require_once 'povezava.php';
require_once 'seja.php';
$prijava = isset($_SESSION['idu']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prevozi Velenje</title>
    <link href="stil.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
    <p id="prijava">
        <?php
        if(!$prijava) {
            echo '<a href="prijava.php">Prijava</a>';
        } else {
            echo 'Prijavljen: '.$_SESSION['imeu'].' | <a href="odjava.php">ODJAVA</a>';
        }
        ?>
    </p>
    <div id="content">