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
<div><h1>PREVOZI VELENJE</h1>
</div>
<div id="uvod">
    <h3>DOBRODOŠLI!</h3>
    <p>
    Dobrodošli na naši spletni strani.<br>
    Nudimo najboljše prevoze<br>
    za vse osebe,<br>
    ob katerem koli dnevu<br> 
    in<br>
    ob kateri koli uri.<br>
    </p>


    <p>Naša ekipa poskrbi za varen,
    udoben in zanesljiv prevoz do vašega cilja.
    </p>
</div>

<div id="vsebina">
    <h2>Naročanje prevozov</h2>

    <?php if($prijava): ?>
        <a href="narocanje.php">NAROČI PREVOZ</a>
    <?php else: ?>
        <p>Za naročilo prevoza se moraš najprej prijaviti.</p>
    <?php endif; ?>
</div>
<footer>
        <p>&copy; 2026 Prevozi Velenje.</p>
        <p>Kontakt: bine.skrbot@scv.si</p>
    </footer>
</body>
</html>