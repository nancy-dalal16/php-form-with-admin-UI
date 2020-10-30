<?php 
 include "config.php";
if(isset($_POST['submit'])){



$name = $_POST['name'];
$email = $_POST['email']; 
$phone =$_POST['phone'];
$address =$_POST['address'];
$date = $_POST['date'];
$facebook = $_POST['facebook'];

$instagram = $_POST['instagram'];
$google = $_POST['google']; 
$img= $_FILES['img']['name'];
$img_temp=$_FILES['img']['tmp_name'];

move_uploaded_file($img_temp , "uploads/$img");
$options =$_POST['options'];
$code = $_POST['code'];

$vehicle = implode(",",$_POST["vehicle"]);
$reference = $_POST['reference'];
$sales = $_POST['sales'];
$sql = "INSERT into store_details (name,email,phone,address,date,facebook,instagram,google,img,options,code,vehicle,reference,sales)  VALUES('$name','$email','$phone','$address','$date','$facebook','$instagram','$google','$img','$options','$code','$vehicle','$reference','$sales')";
$ExecQuery = MySQLi_query($conn, $sql); 


if($ExecQuery)
{
    header("location: view.php");

}
}

?>