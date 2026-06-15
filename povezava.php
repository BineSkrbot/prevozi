<?php
$link = mysqli_connect("localhost", "root", "", "prevozi");
if (!$link) { die("Povezava ni uspela: " . mysqli_connect_error()); }
mysqli_set_charset($link, "utf8");
?>