<?php

// giris.php sayfası

session_start();

if(isset($_POST["girisbuton"]))
{

	$_SESSION["kullaniciadi"] = $_POST["kadi"];
	$_SESSION["kullanicisifresi"] = $_POST["sifre"];
	
	header('location: message.php');	
}

?>
<body >
<link rel="stylesheet" href="style.css">

<form name="kullanicigirisi" method="post" action="">
<div>
<center>
<div></br></br></br></br>
<h1>OTURUM AÇ</h1>
<img src="resim/login_logo.jpg"/>
<table width="354" border="0" cellpadding="2" cellspacing="5">
  <tr>
    <td width="130" height="25">Kullanıcı Adı</td>
    <td width="12">:</td>
    <td width="189">
      <label for="kadi"></label>
      <input type="text" name="kadi" id="kadi" required>
    </td>
  </tr>
  <tr>
    <td>Kullanıcı Şifresi</td>
    <td>:</td>
    <td><input type="password" name="sifre" id="sifre" required ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="girisbuton" id="girisbuton" value="Giriş Yap">
   </td>
  </tr>
</table>
</div>
</center>
</div>
</form>
</div>
</body>