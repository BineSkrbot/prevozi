<?php
require_once 'povezava.php';
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <title>Pregled prevozov</title>
</head>
<body>
    <h2>Seznam vseh prevozov</h2>
    <?php
    $sql = "SELECT p.*, u.ime, u.priimek 
            FROM prevozi p 
            JOIN uporabniki u ON p.uporabniki_id = u.id";
    $result = mysqli_query($link, $sql);
    
    echo '<table border="1"><tr><th>Št.</th><th>Uporabnik</th><th>Status</th><th>Opomba</th><th>Akcija</th></tr>';
    $stevc = 1;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>"
            . "<td>".$stevc."</td>"
            . "<td>".$row['ime']." ".$row['priimek']."</td>"
            . "<td>".$row['status']."</td>"
            . "<td>".$row['opomba']."</td>"
            . "<td>"
                . "<a href='brisi_prevoz.php?idpr=".$row['id']."'>Briši</a> | "
                . "<a href='posodobi_prevoz.php?idpr=".$row['id']."'>Posodobi</a>"
            . "</td>"
            . "</tr>";
        $stevc++;
    }
    ?>
    </table>
    <p><a href="index_prevozi.php">Nazaj na domačo stran</a></p>
	<p><a href="nadzorna_plosca.php">Na nadzorno ploščo</a></p>
	<?php require_once 'noga.php'; ?>
</body>
</html>