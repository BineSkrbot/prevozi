<?php
session_start();
// Preverimo, ali je uporabnik sploh prijavljen in ali ima vlogo admin (id 1)
if (!isset($_SESSION['idu']) || $_SESSION['vloga_id'] != 1) {
    header("Location: prijava.php");
    exit();
}
?>