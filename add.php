<?php

// Include database file
include 'customers.php';

$customerObj = new Customers();

// Insert Record in customer table
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $file = $_FILES['image'];
    $insertData = $customerObj->insertData($name, $email, $username, $dob, $file);

    if ($insertData){
        header("Location:index.php");
    }else{
        return false;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Upload File in database using OOPs concept with PHP Mysql</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="card text-center" style="padding:15px;">
      <h4>Upload File in database using OOPs concept with PHP Mysql</h4>
    </div><br>
    <div class="container">
      <form method="POST" action="add.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" class="form-control" name="dob" required="">
        </div>
        <div class="form-group">
          <label for="profile_image">Profile Image:</label>
          <input type="file" class="form-control" name="image" required="">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
      </form>
    </div>
  </body>
</html>