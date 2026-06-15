
<?php
require_once 'povezava.php';

if(isset($_GET['idpr'])) {  
    $id = $_GET['idpr'];
    $sql = "DELETE FROM prevozi WHERE id = $id";
    
    if(mysqli_query($link, $sql)) {
        header("Refresh:2; url=izpis_prevozov.php");
        echo 'Prevoz je bil uspešno izbrisan. Čez 2 sekundi boste preusmerjeni...';
    } else {
        echo 'Napaka pri brisanju: ' . mysqli_error($link);
    }
}
?>