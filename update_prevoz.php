<?php
require_once 'povezava.php';
if(isset($_GET['send'])) {
    $status = $_GET['status'];
    $opomba = $_GET['opomba'];
    $id = $_GET['idpr'];
    
    $sql = "UPDATE prevozi SET status = '$status', opomba = '$opomba' WHERE id=$id;";
    
    if(mysqli_query($link, $sql)) {
        header("Refresh:2; url=izpis_prevozov.php");
        echo 'Posodobitev uspešna. Preusmeritev...';
    } else {
        echo 'Nekaj je šlo narobe';    
    }
}
?>