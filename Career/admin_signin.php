<?php
require_once('config.php');
require_once('DB_Connection.php');

if (isset($_POST['login'])){
    $usernameError=$passwordError="";
    $user=mysqli_real_escape_string($connection, $_POST['username']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    if(empty($user)){
        echo"<div class='alert mt-3 p-3 alert-danger'> Username is Required! </div>";
    }
    if(empty($password)){
        echo"<div class='alert mt-3 p-3 alert-danger'> Password is Required! </div>";
    }
    if(!empty($user)&& (!empty($password))){
        $sql = "SELECT Username, Password FROM tbl_admin WHERE Username='$user' AND Password='$password'";
        $result= mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)==1){
            echo"<div class='alert mt-3 p-3 alert-success'> Login Successful! </div>";
            header('location:dashboard.php');
        }else{
            echo"<div class='alert mt-3 p-3 alert-danger'> invalid Credentials </div>";

        }
    }

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance System</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .box{
          margin:0px;
          padding:0px;
          background-image:url('images/studentStand.jpg');
          background-size:cover;
          background-repeat:no-repeat;
          height: 1000px;
          width: 100%;

      }
      .signcard{
        margin-left:60%;
        background-color:black;
        box-shadow:5px 2px 5px 2px black;
        opacity: 0.6;

      }
    </style>

</head>
<body class="text-center">
    <div class="container-fluid box">
        <div class="header bg-dark fixed-top">
            <h1 class="text-primary">Career Guidance System</h1>
        </div>
        <div class="row">
            <div class="col-sm-4  m-5">
                <div class="card signcard m-5">
                    <div class="card-header"><h1 class="text-light"> <span class="text-primary">Admin</span>Sign In</h1></div>
                    <div class="card-body">

                    <form method="POST">

                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <input type="checkbox" class="text-light" checked="checked"> Remember me

                        <div class="clearfix">
                        <button type="button"  class="cancelbtn">Cancel</button>
                        <button type="submit" name="login" class="signupbtn">Sign In</button>
                        </div>
                        <div class="clearfix">
                          <p class="title"><a href="student_account.php">Log in to Student Accout?</a></p>
                        </div>


                    </form>
                    </div>
                </div>
            </div>

                </div>
            </div>

        </div>



    </div>

</body>
</html>
