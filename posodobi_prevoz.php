<?php
require_once 'povezava.php';


if (isset($_GET['idpr']) && !empty($_GET['idpr'])) {
    $id = $_GET['idpr'];
} else {
   
    header("Location: izpis_prevozov.php");
    
}
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Posodobi prevoz</title>
</head>
<body>
    <h2>Posodobi prevoz</h2>
    <form action="update_prevoz.php" method="GET">
     <p>Status: <input type="text" name="status" required></p>
     <p>Opomba: <input type="text" name="opomba" required></p>
     
     <input type="hidden" name="idpr" value="<?php echo htmlspecialchars($id); ?>">
     
     <input type="submit" name="send" value="Posodobi">
    </form>
    <p><a href="izpis_prevozov.php">Nazaj na seznam</a></p>
	<?php require_once 'noga.php'; ?>
</body>
</html>