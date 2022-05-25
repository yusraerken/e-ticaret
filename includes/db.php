<?php 
$con = mysqli_connect("localhost","root","","ecommerce");

if(!$con){
  die("veri tabanı bağlantı işlemi başarısız". mysqli_connect_error());
}
else
{
	echo "bağlantı başarılı";
}
?>