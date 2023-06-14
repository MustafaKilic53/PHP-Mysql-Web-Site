<!DOCTYPE html>
<html lang="en">
<?php 
 require_once 'baglantiperf.php';
 ?>
<head>
  <style>#hero {
  width: 100%;
  height: 59vh;
  background: url("../img/herobg.jpg") top center;
  background-size: cover;
  margin-bottom: -200px;
}</style>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hastane Randevu Sistemi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .counts {
  background: #c9c9c9;
  padding: 70px 0 60px;
}
.section-bg{
  background-color: #c9c9c9;
}
.section-title{
  text-decoration-color: #000000;
}
  </style>

  <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">E-Randevu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Anasayfa</a></li>
          <li><a class="nav-link scrollto" href="index.php">Acil</a></li>
          <li><a class="nav-link scrollto" href="index.php">Hastane</a></li>
          <li><a class="nav-link scrollto" href="index.php">Doktorlarımız</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="index2.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Doktor</span> Randevu Sistemi</a>
      <a href="index.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Hasta</span> Randevu Sistemi</a>

    </div>
  </header><!-- End Header -->
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">
      <h1>Doktor Randevu Sistemi</h1>
      <h2>E-Randevu</h2>
    </div>
      <div class="container">

        
          
 <?php
    $query = "SELECT * FROM randevu_sistemi";
    $result = mysqli_query($baglanti, $query);



echo "<table class='table table-dark table-striped' >";

echo "<tr>";
echo "<th>Hasta No</th>";
echo "<th>Hasta Ad</th>";
echo "<th>Hasta Soyad</th>";
echo "<th>Hasta Mail</th>";
echo "<th>Hastane Ad</th>";
echo "<th>Randevu Tarihi</th>";
echo "<th>Hasta Mesaj</th>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Hasta_No'] . "</td>";
    
    echo "<td>" . $row['Hasta_Ad'] . "</td>";
    echo "<td>" . $row['Hasta_Soyad'] . "</td>";
    echo "<td>" . $row['Hasta_Mail'] . "</td>";
    echo "<td>" . $row['Hastane_Ad'] . "</td>";
    echo "<td>" . $row['Hasta_Tarih'] . "</td>";
    echo "<td>" . $row['Hastane_Mesaj'] . "</td>";
    echo "</tr>";
}
echo "</table>";
  ?>
  <form method="post" action="perfsorgu.php">
<input type="text" name="Hasta_No" placeholder="Hasta Numarası Gir">
  <button type="submit" name="btn_sil" class="btn btn-dark" >Randevuyu Sil</button>

</form>
        </div>

    </section><!-- End Appointment Section -->
    <!-- End Contact Section -->

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Longday</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
function myFunction() {
    document.getElementById("demo").style.display = "block";
}
</script>

</body>

</html>
