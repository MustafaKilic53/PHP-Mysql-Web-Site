<?php 
	require_once 'baglantiperf.php';
		$Hasta_No=$_POST['Hasta_No'];
		$Hasta_Ad=$_POST['Hasta_Ad'];
		$Hasta_Soyad=$_POST['Hasta_Soyad'];
		$Hasta_Mail=$_POST['Hasta_Mail'];
		$Hastane_Ad=$_POST['Hastane_Ad'];
		$Hastane_Mesaj=$_POST['Hastane_Mesaj'];
		$Hasta_Tarih=$_POST['Hasta_Tarih'];
		
	
	if (isset($_POST['btn_kaydet'])) {
		
	 $sorgu="INSERT INTO randevu_sistemi (Hasta_No, Hasta_Ad, Hasta_Soyad, Hasta_Mail, Hastane_Ad, Hastane_Mesaj, Hasta_Tarih) VALUES ($Hasta_No, '$Hasta_Ad','$Hasta_Soyad','$Hasta_Mail','$Hastane_Ad','$Hastane_Mesaj','$Hasta_Tarih')";

	 if (mysqli_query($baglanti,$sorgu)) {
			header("location:index3.php");
		}
		else{
			header("location:kayitolusmama.php");
		}
	}
	if (isset($_POST['btn_sil'])) {
    $Hasta_No=$_POST['Hasta_No'];
    $sil="DELETE FROM randevu_sistemi WHERE Hasta_No=$Hasta_No";

    if (mysqli_query($baglanti,$sil)) {
      header("location:index2.php");
    }
    else{
      echo "kayıt silinmedi hata var". mysqli_error($baglanti);
    }



   

  }
 ?>