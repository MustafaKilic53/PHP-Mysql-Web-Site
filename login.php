
 <input type="text" name="Hasta_No">
         <input type="submit" name="btn_getir">
<?php 
if (isset($_POST['btn_getir'])){
 $Hasta_No=$_POST['Hasta_No'];
 $kayit="SELECT * FROM randevu_sistemi WHERE Hasta_No=$Hasta_No";
  while ($kayit=mysqli_fetch_array($Hasta_No)) {
    header("location:index2.php?durum=nyny&Hasta_No=".$kayit['Hasta_No'] ."&Hasta_Ad=".$kayit['Hasta_Ad']."&Hasta_Soyad=".$kayit['Hasta_Soyad']."&Hastane_Ad=".$kayit['Hastane_Ad'].$kayit['Hastane_Mesaj']);
  }
    
  }
  else
  {
      header("location:index2.php?durum=nyny");

  }
 }
// if (isset($_GET['durum'])) {
//       if ($_GET['durum']=="ok") {
//         echo $_GET['Hasta_Ad'];
//         echo $_GET['Hasta_Soyad'];
//         echo $_GET['Hasta_Mail'];
//         echo $_GET['Hastane_Ad'];
//         echo $_GET['Hastane_Mesaj'];
//       }
//       else{
//         echo "Kayıt getirilemedi";
//       }
//     }
 
   ?>