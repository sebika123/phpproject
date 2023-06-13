<?php
$name=$_POST['name'];
$number=$_POST['contact'];

echo "Name is".$name." and Phone number is ".$number;
include 'db.php';
$sql="INSERT INTO names(name,number)VALUES('$name','$number')";
$result=mysqli_query($conn,$sql);

if($result){
    header('location:index.php');
}

?>