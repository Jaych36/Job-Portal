session_start();
if(isset($_POST[`login`])){
  $email=$_POST[`email`];
  $password=$_POST[`password`];

  $query="SELECT * FROM user WHERE `email`=`$email` AND `password`=`$password`";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  if(mysqli_num_rows($result)==1)
  {
    $_SESSION[`email`]=$login_user;
    header("location : index.php");

  }
  else{
    $error="Incorrect email or password";
  }
}