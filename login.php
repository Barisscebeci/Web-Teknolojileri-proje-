<?php
include("ayar.php");

session_start();
ob_start();
if(($_POST["email"]=="g201210045@sakarya.edu.tr") && ($_POST["password"]=="g201210045"))
{

$_SESSION["login"] = "true";
$_SESSION["email"] = "g201210045@sakarya.edu.tr";
$_SESSION["password"] = "g201210045";

echo "Hosgeldiniz g201210045. Başarıyla giriş yaptınız. Giriş sayfasına yonlendiriliyorsunuz. Lütfen bekleyin..";
												
header("Refresh: 2; url=login.html");

}

else if(($_POST["email"]=="") && ($_POST["password"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=login.html");
}

else
{
	echo "Kullanici adi veya sifreniz yanlis.";
	header("Refresh: 2; url=login.html");
}


ob_end_flush();
// if(($_POST["email"]==$email) and ($_POST["password"]==$pass)){
// $_SESSION["login"] = "true";
// $_SESSION["email"] = $user;
// $_SESSION["pass"] = $pass;
// header("Location:admin.php");
// }
// else{
// echo "Kullancı Adı veya Şifre Yanlış.<br>";
// echo "Giriş sayfasına yönlendiriliyorsunuz.";
// header("Refresh: 2; url=login.html");
// }
// ob_end_flush();
?>