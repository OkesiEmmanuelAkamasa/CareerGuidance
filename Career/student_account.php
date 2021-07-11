<?php
require_once('config.php');
require_once('DB_Connection.php');



if (isset($_POST['register'])){
    //setting post variables
    $fullname=mysqli_real_escape_string($connection,$_POST['fullname']);
    $username=mysqli_real_escape_string($connection, $_POST['username']);
    $passwrd=mysqli_real_escape_string($connection,$_POST['passwrd']);
    $psw_repeat=mysqli_real_escape_string($connection, $_POST['psw_repeat']);
    $phone_number=mysqli_real_escape_string($connection, $_POST['phone_number']);

    //check if the password fields matched
    // if(!$passwrd=$psw_repeat){
    //     echo"<div class='alert mt-3 p-3 alert-danger'> Username is Required! </div>";
    // }else{
    //     $passwrd=md5($passwrd);
    // }


        $sql = "INSERT INTO `tbl_user`(`fullname`, `username`, `passwrd`, `phone_number`) VALUES ('$fullname','$username','$passwrd','$phone_number')";
        $result= mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)==1){
            echo"<div class='alert mt-5 p-3 alert-success'> Created Successful! </div>";
            header('location:index_student.php');
        }else{
            echo"<div class='alert mt-3 p-5 alert-danger'> sorry, unable to create account! </div>";

        }
    }

    if (isset($_POST['login'])){
        $usernameError=$passwordError="";
        $user=mysqli_real_escape_string($connection, $_POST['username']);
        $password=mysqli_real_escape_string($connection,$_POST['passwrd']);
        if(empty($user)){
            echo"<div class='alert mt-3 p-3 alert-danger'> Username is Required! </div>";
        }
        if(empty($password)){
            echo"<div class='alert mt-3 p-3 alert-danger'> Password is Required! </div>";
        }
        if(!empty($user)&& (!empty($password))){
            $sql = "SELECT username, passwrd FROM `tbl_user` WHERE username='$user' AND passwrd='$password'";
            $result= mysqli_query($connection,$sql);
            if(mysqli_num_rows($result)==1){
                echo"<div class='alert mt-3 p-3 alert-success'> Login Successful! </div>";
                header('location:index_student.php');
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
                    <div class="card-header"><h1 class="text-light"> <span class="text-primary">User</span>Sign In</h1></div>
                    <div class="card-body">
                    <form action="student_account.php" method="POST">

                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="passwrd" required>

                        <input type="checkbox" class="text-light" checked="checked"> Remember me

                        <div class="clearfix">
                        <button type="button"  class="cancelbtn" name="">Cancel</button>
                        <button type="submit" class="signupbtn" name="login">Sign In</button>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 m-5">
                <div class="card signcard m-5">
                    <div class="card-header"><h1 class="text-light"><span class="text-primary">User</span>Sign Up</h1></div>
                    <div class="card-body">
                    <form action="student_account.php" method="POST">
                        <label><b>Name</b></label>
                        <input type="text" placeholder="Enter Name" name="fullname" required>

                        <label><b>username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="passwrd" required>

                        <label><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
                        <label><b>Phone Number.</b></label>
                        <input type="tel" placeholder="Enter valid phone number " name="phone_number" required>


                        <p class="text-light">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                        <button type="button"  class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn" name="register">Sign Up</button>
                        </div>

                    </form>
                    </div>
                </div>
            </div>

        </div>



    </div>

</body>
</html>
