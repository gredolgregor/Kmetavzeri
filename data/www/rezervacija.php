<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Rezervacija</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<?php
include 'baza.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime       = $_POST['ime'];
    $priimek   = $_POST['priimek'];
    $email     = $_POST['email'];
    $telefon   = $_POST['telefon'];
    $prihod    = $_POST['datum_prihoda'];
    $odhod     = $_POST['datum_odhoda'];
    $oseb      = $_POST['stevilo_oseb'];
    $soba      = $_POST['soba_id'];
    $sporocilo = $_POST['sporocilo'];

    $sql = "INSERT INTO gost (ime, priimek, email, telefon) VALUES ('$ime', '$priimek', '$email', '$telefon')";
    $conn->exec($sql);
    $gost_id = $conn->lastInsertId();

    $sql2 = "INSERT INTO rezervacija (gost_id, soba_id, datum_prihoda, datum_odhoda, stevilo_oseb, sporocilo) VALUES ('$gost_id', '$soba', '$prihod', '$odhod', '$oseb', '$sporocilo')";
    $conn->exec($sql2);

    echo "<p style='color:#628F00; text-align:center; font-size:1.2rem; padding: 20px;'>✓ Rezervacija uspešno oddana! Kontaktirali vas bomo v najkrajšem možnem času.</p>";
}
?>

<div class="container-fluid text-center my-5">

    <h1 class="mb-4 container-fluid pt-5 col-9 domacinaslov">Rezervacija</h1>
    <p class="container-fluid col-9">Izpolnite obrazec in vas bomo kontaktirali za potrditev.</p>
    <hr class="container-fluid col-9 mt-5 mb-5">

    <form action="rezervacija.php" method="POST" class="col-7 mx-auto text-start rezervacija-forma">

        <!-- OSEBNI PODATKI -->
        <div class="rez-sekcija">
            <h3>Osebni podatki</h3>

            <div class="row g-3">
                <div class="col-md-6 mb-3">
                    <label>Ime *</label>
                    <input type="text" name="ime" placeholder="Janez" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Priimek *</label>
                    <input type="text" name="priimek" placeholder="Novak" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>E-naslov *</label>
                    <input type="email" name="email" placeholder="janez@email.si" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Telefon *</label>
                    <input type="tel" name="telefon" placeholder="+386 40 000 000" required>
                </div>
            </div>
        </div>

        <!-- REZERVACIJA -->
        <div class="rez-sekcija">
            <h3>Podatki o rezervaciji</h3>

            <div class="mb-3">
                <label>Soba *</label>
                <select name="soba_id" required>
                    <option value="" disabled selected>-- Izberite sobo --</option>
                    <option value="1">Dvoposteljna – 70 €/noč</option>
                    <option value="2">Triposteljna 1 z balkonom – 95 €/noč</option>
                    <option value="3">Triposteljna 2 z balkonom – 95 €/noč</option>
                    <option value="4">Triposteljna 3 z balkonom – 95 €/noč</option>
                    <option value="5">Štiriposteljna z balkonom – 120 €/noč</option>
                </select>
            </div>

            <div class="row g-3">
                <div class="col-md-6 mb-3">
                    <label>Datum prihoda *</label>
                    <input type="date" name="datum_prihoda" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Datum odhoda *</label>
                    <input type="date" name="datum_odhoda" required>
                </div>
            </div>

            <div class="mb-3">
                <label>Število oseb *</label>
                <input type="number" name="stevilo_oseb" min="1" max="4" value="1" required>
            </div>

            <div class="mb-3">
                <label>Sporočilo / posebne želje</label>
                <textarea name="sporocilo" placeholder="Npr. alergije, pozni prihod..."></textarea>
            </div>
        </div>

        <input type="submit" value="Oddaj rezervacijo">

    </form>

</div>

<?php include 'footer.php'; ?>

</body>
</html>