<?php

$username=$_POST['username'];
$password=$_POST['password'];


$sunucu="localhost";
$user="root";
$sifre="root";
$veritabani="users";



$baglanti=new mysqli($sunucu,$user,$sifre,$veritabani);

if($baglanti->connect_error)
{
	die("Hata:".$baglanti->connect_error);
}

$sql="INSERT INTO kullanicilar (kullanici_adi,sifre) values ('$username','$password')";

if($baglanti->query($sql)===TRUE)
{
echo "kayit eklendi";
}
else
{
	echo "eklenemedi sebebi:".$baglanti->connect_error;
}

$baglanti->close();



?>