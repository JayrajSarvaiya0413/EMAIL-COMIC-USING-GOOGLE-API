<?php
$url='bf1adw57uf1skqz6m6dk-mysql.services.clever-cloud.com:3306';
$username='uvfmqmibbki1zaip';
$password='p9JlNuAesTQtixenuEdR';
$conn=mysqli_connect($url,$username,$password,"bf1adw57uf1skqz6m6dk");
if(!$conn){
	die('Could not Connect My Sql:' .mysql_error());
}
?>