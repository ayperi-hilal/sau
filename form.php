
<?php
session_start();
echo "Mesajınız başarılı bir şekilde gönderilmiştir."."<br>";
echo "Adı Soyad : ".$_POST["adisoyad"]."<br>";
echo "Email : ". $_POST["email"]."<br>";
echo  "Mesaj : ".$_POST["mesaj"]."<br>";

echo "<a href='iletisim.html'>Kapat</a>"

	
?>
