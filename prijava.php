<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stil.css">
    <title>Prevozi Velenje</title>
</head>
<body>
 <div id="content">
    <h2>Prijava</h2>
    <form action="prijava_preveri.php" method="post">
	 <p>Email: <input type="email" name="mail" required></p>
	 <p>Geslo: <input type="password" name="pass" required></p>
	 <p>
	   <input type="reset" value="Ponastavi">
	   <input type="submit" name="send" value="Prijava">
	 </p>
	</form>

    <p>
        <a href="index_prevozi.php">Nazaj na domov</a>
    </p>
 </div>
 <?php require_once 'noga.php'; ?>
</body>
</html>