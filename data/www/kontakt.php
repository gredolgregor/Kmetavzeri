<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>  

<section class="contact-section py-5" style="
    background-image: url('images/gorovje_linije.png'); 
    background-repeat: repeat-x; 
    background-position: bottom; 
    background-size: auto 120px; 
    padding-bottom: 150px !important;">
    
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="address-box">
          <h2 class="fw-bold mb-3">Naš naslov:</h2>
          <p class="fs-3 fw-bold mb-0">Mernik Tomaž</p>
          <p class="fs-3 fw-bold mb-0">Padeški vrh 2</p>
          <p class="fs-3 fw-bold">3214 Zreče</p>
        </div>
      </div>

      <div class="col-lg-7">
         <div class="map-container"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.5014170405398!2d15.371293199999998!3d46.418940299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476f87703ce50a61%3A0xdf92d57e212c8840!2sTuristi%C4%8Dna%20kmetija%20Ram%C5%A1ak!5e0!3m2!1sen!2ssi!4v1778528740164!5m2!1sen!2ssi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="inquiry-section py-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6">
        <h2 class="display-4 fw-bold">Pošljite povpraševanje!</h2>
      </div>

      <div class="col-lg-6">
        <form class="contact-form">
          <div class="mb-3">
            <input type="text" class="form-control custom-input" placeholder="Ime in priimek:">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control custom-input" placeholder="E-naslov:">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control custom-input" placeholder="Zadeva:">
          </div>
          <div class="mb-4">
            <textarea class="form-control custom-input" rows="5" placeholder="Sporočilo:"></textarea>
          </div>
          <div class="text-start">
            <button type="submit" class="btn btn-send">Pošlji</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>  

</body>
</html>