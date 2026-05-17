<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Domov</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>  

    <div class="container-fluid text-center my-5">
        
        <img src="images/home_logo.png" alt="logo z slikami" class="col-6">

        <h1 class="mb-4 container-fluid pt-5 col-9 domacinaslov">O kmetiji</h1>
        
        <p class="container-fluid col-9">Naša kmetija se nahaja na Padeškem vrhu ob poti iz Zreč proti Rogli. Od leta 1994 razvijamo turistično dejavnost, leta 1999 pa smo pridobili certifikat za ekološko kmetovanje. Gostom ponujamo 5 prijetnih sob in domačo kuhinjo z jedmi iz ekoloških sestavin. Z veseljem vas sprejmemo in vam ponudimo pristno doživetje narave ter domačnosti.</p>

        <hr class="container-fluid col-9 mt-5 mb-0">
        
        <!-- Glavni vsebnik, ki vse postavi navpično (flex-column) -->
        <div class="d-flex flex-column align-items-center gap-4 pt-5">
    
    <!-- Zgornji del: Slika + Naslov (to že imaš) -->
            <div class="d-flex justify-content-center align-items-center gap-3">
                <img src="images/clovecek.png" alt="človeček" style="height: 120px; width: auto;">
                <h1 class="mb-0 domacinaslov">Rezervacije</h1>
            </div>

    <!-- Spodnji del: Gumba drug ob drugem -->
            <div class="d-flex justify-content-center gap-3 w-100">
                <a href="rezervacija.php" class="gumb-zelen">
                    <img src="images/calendar-icon.png" alt="koledarIkona" style="width: 30px;">
                    <span>Datum</span>
                </a>
                <a href="rezervacija.php" class="gumb-zelen">
                    <strong>Rezerviraj</strong>
                </a>
            </div>

</div>

<hr class="container-fluid col-9 mt-5 mb-5">

<!-- Odstranil sem col-9 in dodal mx-auto -->
<div class="d-flex align-items-center justify-content-center gap-4 pt-5 mx-auto" style="max-width: 80%;">
    
    <!-- LEVO: Slika -->
    <img src="images/zanimivosti.png" alt="Zanimivosti" style="width: 850px; height: auto;">

    <!-- DESNO: Blok za tekst -->
    <div class="text-start">
        <h1 class="mb-2 p-0">Zanimivosti</h1>
        <p class="zanimivost">Doživite pristno povezanost z naravo in bogato ponudbo aktivnosti za vse okuse. Sprostite se ob dolgih sprehodih, odkrivanju zdravilnih zelišč, gob in gozdnih sadežev ali pa se podajte na kolesarjenje in jahanje konj. Za ljubitelje športa so na voljo tudi namizni tenis, košarka in badminton, pozimi pa vas pričakuje smučanje na Rogli ter razvajanje v Termah Zreče. Tukaj vsak najde nekaj zase.</p>
    </div>

</div>

    </div>


<?php include 'footer.php'; ?>  

</body>
</html>