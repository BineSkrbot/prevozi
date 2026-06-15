<?php
require_once 'povezava.php';
require_once 'admin_preveri.php'; 
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Administracija - Prevozi Velenje</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <h1>Administratorska nadzorna plošča</h1>
    <nav>
        <a href="izpis_prevozov.php">Upravljaj prevoze</a> | 
        <a href="seznam_uporabnikov.php">Seznam uporabnikov</a> | 
        <a href="odjava.php">Odjava</a>|
		<a href="index_prevozi.php">Domov</a>
    </nav>

    <h2>Pregled vseh prevozov</h2>
    <table border="1" class="tabela">
        <tr>
            <th>ID</th><th>Uporabnik</th><th>Status</th><th>Akcije</th>
        </tr>
        <?php
        $sql = "SELECT p.id, p.status, u.ime FROM prevozi p JOIN uporabniki u ON p.uporabniki_id = u.id";
        $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['ime']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <a href='posodobi_prevoz.php?id={$row['id']}'>Spremeni</a> | 
                        <a href='brisi_prevoz.php?idpr={$row['id']}' onclick='return confirm(\"Ste prepričani?\")'>Briši</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
	<?php require_once 'noga.php'; ?>
</body>
</html>