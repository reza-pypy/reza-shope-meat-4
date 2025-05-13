<?php
session_start();
$title=$_POST["title"];

$price=$_POST["price"];

$dis=$_POST["description"];

$imageurl="images/".$image=$_FILES["image"]["name"];

$connect=mysqli_connect("localhost","root","","c-meat");
$result=mysqli_query($connect,"UPDATE `images` SET `filename`='$imageurl',`description`='$dis',`title`='$title',`price`='$price' WHERE 1");
mysqli_close($connect);
if($result===true){
    echo("saved");
}else{
    echo("did not saved");
}




?>