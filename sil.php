<?php 

if ($_GET) 
{

include("vbaglan.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

// id'si seçilen veriyi silme sorgumuzu yazıyoruz.
if ($baglanti->query("DELETE FROM makale WHERE id =".(int)$_GET['id'])) 
{
    header("location:ekle.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>