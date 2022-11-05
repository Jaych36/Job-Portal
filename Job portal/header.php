<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .navbar{
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
    padding-top: 10px;
   
  }

</style>
  <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collabse navbar-collabse" id="navbarNav"></div>
  </div>
</nav>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Jobs</a>
  <a href="jobs.php">Candidate Applied</a>
  <a href="contact">Contact</a>
  <a href="about">About</a>
  <a href="carrier.php">Carrier</a>
  <a href="register.php">Register</a>
</div>

