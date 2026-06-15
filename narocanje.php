<?php 
require_once 'glava.php'; 
if(!$prijava) { header("Location: prijava.php"); exit(); }

$vozniki = mysqli_query($link, "SELECT * FROM vozniki");
$zacetek = mysqli_query($link, "SELECT * FROM zacetna_lokacija");
$cilj = mysqli_query($link, "SELECT * FROM ciljna_lokacija");
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stil.css">
    <title>Prevozi Velenje</title>
</head>
<h2>Naroči prevoz</h2>
<form action="narocanje_v_bazo.php" method="post">
    Voznik: <select name="vozniki_id">
        <?php while($v = mysqli_fetch_array($vozniki)) echo "<option value='".$v['id']."'>".$v['ime']." ".$v['priimek']."</option>"; ?>
    </select><br>
    Začetek: <select name="zacetek_id">
        <?php while($z = mysqli_fetch_array($zacetek)) echo "<option value='".$z['id']."'>".$z['naslov']."</option>"; ?>
    </select><br>
    Cilj: <select name="cilj_id">
        <?php while($c = mysqli_fetch_array($cilj)) echo "<option value='".$c['id']."'>".$c['naslov']."</option>"; ?>
    </select><br>
    Opomba: <textarea name="opomba"></textarea><br>
    <input type="submit" name="send" value="Naroči prevoz">
</form>

<?php require_once 'noga.php'; ?>