<center>
<div id="msg">


  <br><br><br><br>
<?php

// index.php sayfası


session_start();

if($_SESSION["kullaniciadi"] == "b191210301@sakarya.edu.tr" && $_SESSION["kullanicisifresi"] == "123")	
{


echo "Hoşgeldiniz ".$_SESSION["kullaniciadi"]."<br><br>
<a href='hakkında.html'>Web Sitemiz</a> | <a href='cikis.php'>Çıkış</a>";
	
}
else
{

header("location: login.php");	

}

?>
</div>
</center>