<?php
session_start();
$id=$_POST['id'];

$connect=mysqli_connect("localhost","root","","c-meat");

$result=mysqli_query($connect,"DELETE FROM `images` WHERE id='$id'");
mysqli_close($connect);
if($result===true){
    echo("saved");
}else{
    echo("did not saved");
}


?>