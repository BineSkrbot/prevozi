<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevozi Velenje - Naročilo Potrjeno</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>

    <div class="okvir">

        <div class="success-icon">✓</div>
        
        <h2>Naročilo uspešno oddano!</h2>
        <p class="subtitle">Voznik bo kmalu potrdil vašo vožnjo.</p>
        

        <div class="povzetek-okvir">
            <h3>Podrobnosti prevoza</h3>
            <div class="povzetek-element">
                <span>Sistem:</span>
                <strong>Prevozi Velenje</strong>
            </div>
            <div class="povzetek-element">
                <span>Status prevoza:</span>
                <span class="status-badge">Čakanje na potrditev</span>
            </div>
            <div class="povzetek-element">
                <span>Cena vožnje:</span>
                <strong>0.00 EUR (Brezplačno)</strong>
            </div>
        </div>

        <p class="info-besedilo">Obvestilo o potrditvi vožnje in podatke o vozniku boste prejeli takoj, ko bo zahteva odobrena.</p>

        <a href="index_prevozi.html" class="btn-home">Nazaj na domov</a>
    </div>
<?php require_once 'noga.php'; ?>
</body>
</html>