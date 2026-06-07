<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Sobe</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>

<!-- TOP ZELENI DEL -->
<section class="top-section text-light">
  <div class="container py-5">
    <h2 class="top-naslov">Sobe</h2>
    <p class="top-opis">
      Naše prijetne sobe vam nudijo miren oddih v objemu narave, stran od vsakdanjega vrveža. Obkrožene z zelenjem in svežim zrakom so popoln prostor za sprostitev in počitek.
    </p>
    <hr class="line">
  </div>
</section>

<!-- BEŽ SEKCIJA -->
<section class="rooms-section" style="background-color: #d9c48f;">
  <div class="container-fluid py-5">

    <h4 class="rooms-podnaslov">Izbira sobe</h4>
    <h1 class="big-title">IZBIRATE<br>LAHKO<br>MED</h1>

    <div class="room-layout">

      <!-- LEVA SLIKA -->
      <img src="images/3.png" class="soba-slika">

      <!-- SREDINA: besedilo -->
      <div class="room-text">
        <p><b>dvoposteljno soboz veliko zakonsko posteljo</b></p>
        <hr class="w-75 mx-auto opacity-25 mt-0">
        <p><b>3x triposteljno sobo z veliko zakonsko posteljo in enojno posteljo z balkonom</b></p>
        <hr class="w-75 mx-auto opacity-25 mt-0">
        <p><b>štiriposteljno sobo z veliko zakonsko posteljo in 2 enojnima posteljama z balkonom</b></p>
      </div>

      <!-- DESNA SLIKA -->
      <img src="images/4.png" class="soba-slika">

    </div>
  </div>
</section>

<!-- TESTIMONIALI -->
<section class="bottom-section">
  <div class="container py-5">
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="card-custom">
          <div class="card-ikona">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4"/></svg>
          </div>
          <h5>ImePriimek</h5>
          <p>Ta soba je res fantastična, tukaj sem spal že 67 krat in še vedno se vsakič počutim, kot da je prvič.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-custom dark">
          <div class="card-ikona">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4"/></svg>
          </div>
          <h5>ImePriimek</h5>
          <p>Ta soba je res fantastična, tukaj sem spal že 67 krat in še vedno se vsakič počutim, kot da je prvič.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-custom">
          <div class="card-ikona">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4"/></svg>
          </div>
          <h5>ImePriimek</h5>
          <p>Ta soba je res fantastična, tukaj sem spal že 67 krat in še vedno se vsakič počutim, kot da je prvič.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>