<?php


$title=$_POST["title"];

$price=$_POST["price"];

$dis=$_POST["description"];

$imageurl="images/".$image=$_FILES["image"]["name"];

$connect=mysqli_connect("localhost","root","","c-meat");
$result=mysqli_query($connect,"INSERT INTO `images`( `filename`, `description`, `title`, `price`) VALUES
 ('$imageurl','$dis','$title','$price');");
mysqli_close($connect);
if($result===true){
    echo("saved");
}else{
    echo("did not saved");
}


?>