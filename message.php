<body background="resim/login_bg.jpg" style="background-repeat:no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<center>
<div id="msg">


  <br><br><br><br>
<?php




session_start();

if($_SESSION["kullaniciadi"] == "b191210301@sakarya.edu.tr" && $_SESSION["kullanicisifresi"] == "123")	
{


echo "Hoşgeldiniz ".$_SESSION["kullaniciadi"]."<br><br>
<a href='hakkinda.html'>Web Sitemiz</a> | <a href='cikis.php'>Oturumu Kapat</a>";
	
}
else
{

header("location: index.php");	

}

?>
</div>
</center>
