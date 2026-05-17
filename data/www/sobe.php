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
    <h2 class="text-green">Sobe</h2>
    <p class="w-50">
      Naše prijetne sobe vam nudijo miren oddih v objemu narave, stran od vsakdanjega vrveža. Obkrožene z zelenjem in svežim zrakom so popoln prostor za sprostitev in počitek.
    </p>
    <hr class="line">
  </div>
</section>

<!-- BEŽ SEKCIJA -->
<section class="rooms-section">
  <div class="container text-center">

    <h4 class="mb-3">Izbira sobe</h4>
    <h1 class="big-title">IZBIRATE<br>LAHKO<br>MED</h1>

    <div class="room-layout">

      <!-- LEVI KROG -->
      <div class="left">
        <img src="images/3.png">
      </div>

      <!-- DESNI KROG -->
      <div class="right">
        <img src="images/4.png">
      </div>

      <!-- TEKST -->
      <div class="room-text">
        <p><b>dvoposteljno</b><br>sobo z veliko zakonsko posteljo</p>

        <p><b>3x triposteljno</b><br>sobo z veliko zakonsko posteljo in eno posteljo</p>

        <p><b>štiriposteljno</b><br>sobo z veliko zakonsko posteljo in 2 enojnima</p>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONIALI -->
<section class="bottom-section">
  <div class="container py-5">
    <div class="row text-center">

      <div class="col-md-4">
        <div class="card-custom">
          <h5>ImePriimek</h5>
          <p>Ta soba je res fantastična...</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-custom dark">
          <h5>ImePriimek</h5>
          <p>Ta soba je res fantastična...</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-custom">
          <h5>ImePriimek</h5>
          <p>Ta soba je res fantastična...</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>  

</body>
</html>