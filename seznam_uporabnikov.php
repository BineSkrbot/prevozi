<?php
session_start();


if (!isset($_SESSION['id']) || $_SESSION['vloga'] != 1) {
    header("Location: prijava.php");
}

require_once 'povezava.php';
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Email</th>
        <th>Vloga (ID)</th>
    </tr>
    <?php
    $sql = "SELECT id, ime, email, vloga_id FROM uporabniki";
    $rezultat = mysqli_query($link, $sql);
    
    if ($rezultat) {
        while ($row = mysqli_fetch_array($rezultat)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['ime']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['vloga_id']}</td>
                  </tr>";
        }
    }
    ?>
	
</table>
<p><a href="nadzorna_plosca.php">Nazaj na nadzorno ploščo</a></p>
<?php require_once 'noga.php'; ?>