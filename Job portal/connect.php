<?php
$conn = mysqli_connect("localhost:3307","root","","jobs") or die("connection fail");

if($conn){
  echo "connected";
}
else{
  echo "not try again";
}

?>