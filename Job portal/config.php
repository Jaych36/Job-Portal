<?php 

//include("connect.php");

if($conn->connect_error){
  die("conection fail".$conn->connect_error);
}
echo"";
if(isset($_POST[`submit`])){
  $name=$_POST[`name`];
  $email=$_POST[`email`];
  $password=$_POST[`password`];
  $c_password=$_POST[`c_password`];
  $phone_no=$_POST[`phone_no`];


$sql = "INSERT INTO 'user'('Name', 'email', 'password','c_password','phone_no') VALUES ($name,$email,$password,$c_password,$phone_no)";
if(mysqli_query($conn,$sql)){
  echo "records inserted";
}
else{
  echo "error $sql." . mysqli_error ($conn);
}
}
session_start();
if(isset($_POST[`login`])){
  $email = $_POST[`email`];
  $password = $_POST[`password`];

$query="SELECT *FROM user WHERE `email`=`$email` AND `password`=`$password` ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_fetch_row($result)==1){
  header("location:index.php");
}
else{
  $error ='email id or password incorrect';
}
}

if(isset($_POST[`job`])){
  $cname = $_POST[`cname`];
  $pos = $_POST[`pos`];
  $jdesc = $_POST[`jdesc`];
  $skills = $_POST[`skills`];
  $CTC = $_POST[`CTC`];
 
  $sql="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
  if(mysqli_query($conn,$sql)){
    echo "new jobs posted";
  }
  else{
    echo "ERROR: failed to post job $sql. " . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>
