<?php
require_once 'povezava.php';
require_once 'seja.php';

if(isset($_POST['send'])) {
    $v_id = $_POST['vozniki_id'];
    $z_id = $_POST['zacetek_id'];
    $c_id = $_POST['cilj_id'];
    $opomba = mysqli_real_escape_string($link, $_POST['opomba']);
    $u_id = $_SESSION['idu']; 

    $sql = "INSERT INTO prevozi (status, zahtevan_ob, uporabniki_id, vozniki_id, zacetna_lokacija_id, ciljna_lokacija_id, opomba) 
            VALUES ('na cakanju', NOW(), '$u_id', '$v_id', '$z_id', '$c_id', '$opomba')";

    if(mysqli_query($link, $sql)) {
        echo "Prevoz uspešno naročen! <a href='index_prevozi.php'>Nazaj</a>";
    } else {
        echo "Napaka: " . mysqli_error($link);
    }
}
?>