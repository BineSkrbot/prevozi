<?php
require_once 'config.php';


// Naročanje (prilagojeno tabeli 'prevozi')
function narociPrevoz($zacetek_id, $konec_id, $opomba) {
    global $povezava;
    if (!isset($_SESSION['uporabnik_id'])) return false;
    
    $u_id = $_SESSION['uporabnik_id'];
    $opomba = $povezava->real_escape_string($opomba);
    
    $sql = "INSERT INTO prevozi (status, opomba, uporabnik_id, zacetna_lokacija_id, ciljna_lokacija_id) 
            VALUES ('Čakanje', '$opomba', '$u_id', '$zacetek_id', '$konec_id')";
    
    return $povezava->query($sql);
}
?>