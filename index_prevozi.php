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

<div id="prijava">
    <?php if($prijava): ?>
        Pozdravljen, <?php echo $_SESSION['imeu']; ?>! 
        <a href="odjava.php">ODJAVA</a>
    <?php else: ?>
        <a href="prijava.php">PRIJAVA</a>
    <?php endif; ?>
</div>

<div id="content">
    <h1>Nročanje prevozov</h1>

    <?php if($prijava): ?>
        <a href="narocanje.php">NAROČI PREVOZ</a>
    <?php else: ?>
        <p>Za naročilo prevoza se moraš najprej prijaviti.</p>
    <?php endif; ?>
</div>
<?php require_once 'noga.php'; ?>
</body>
</html>