<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['vloga'] != 1) {
    header("Location: prijava.php");
    exit();
}
?>