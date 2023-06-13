<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/> 
</head>
<body>
    <?php
    //working on variables
// $firstname="Sebika";
// $lastname="nepal";
// $age=23;
// $weight=53;
// echo " My name is".$firstname."".$lastname." age=".$age." and ".$weight."with wweight<br>";

// $num1=20;
// $num2=30;
// $sum=$num1+$num2;
// echo var_dump($name);
// echo "the sum is".$sum."<br>";

//constants working demo
// define("name","Sebika_nepal");
// echo name;
// if($age<18){
//     echo"not elligible<br>";
// ;
// }
// else{
//     echo"elligible to vote<br>";

// }

// while($sum<=60){
//     echo $sum."<br>";
//     $sum++;

// }
//array
// $names=array("sebika","rojina","anbika");
// foreach($names as $values){
//     echo $values."<br>";
// }
//function in php
// function numbers(){
//     global $num1,$num2;
//     echo $num1."<br>".$num2;
// } 
// numbers();

//making contact details


?>
<header><h1>My Contact Applications</h1></header>
<form action="adddata.php" method="post">
    <div class="main">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required/><br>

        <label for="name">Contact:</label><br>
        <input type="number" name="contact" id="contact" required/><br>

       
        <input type="submit" value="submit" />
    </div>
</form>

<hr>

<h2> List of contacts </h2>
<table>  
    <tr>
        <th>Name:</th>
        <th>phone number:</th>
        <th>Actions</th>
</tr>


<?php
include 'db.php';
$sql="SELECT * FROM names";

$result=mysqli_query($conn,$sql);
if($result){
    while($row= mysqli_fetch_assoc($result)){
    $name=$row['name'];
    $contact=$row['number'];

    ?>
<tr>
    <td><?php   
    echo $name ?></td>
    <td>

    <td>

    <a href="#">Update </a>

    </td>

    <td>

    <a href="#">DElete </a>
    
    </td>
    <td>

    <a href="#">Update </a>
    
    </td>
    <?php   
    echo $contact ?>

    </td>
</tr>

<?php
}
}
?>
</table>
</body>
</html>