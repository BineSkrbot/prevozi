<?php
require_once 'povezava.php';
session_start(); 

if (isset($_POST['send'])) {
    $em = mysqli_real_escape_string($link, $_POST['mail']);
    $pass_input = $_POST['pass']; 

    $sql = "SELECT * FROM uporabniki WHERE email = '$em'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (sha1($pass_input) === $row['geslo']) {

            $_SESSION['id'] = $row['id'];
			$_SESSION['idu'] = $row['id'];
            $_SESSION['imeu'] = $row['ime'];
            $_SESSION['vloga'] = $row['vloga_id'];
            if ($row['vloga_id'] == 1) {
                header("Location: nadzorna_plosca.php");
            } else {
                header("Location: index_prevozi.php");
            }
            exit();
        } else {
            echo 'Napačno geslo. <a href="prijava.php">Nazaj</a>';
        }
    } else {
        echo 'Uporabnik ne obstaja. <a href="prijava.php">Nazaj</a>';
    }
}
?>