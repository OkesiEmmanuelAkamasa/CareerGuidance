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
          opacity: 0.8;
      }
      .signcard{
        margin-left:60%;
        background-color:black;
        opacity: 0.6;

      }
    </style>

</head>
<body class="text-center">
    <div class="container-fluid box">
        <div class="row">
            <div class="col-sm-6  m-5">
                <div class="card signcard m-5">
                    <div class="card-header"><h1 class="text-light"><span class="text-primary">User</span>Sign Up</h1></div>
                    <div class="card-body">
                    <form action="/action_page.php">
                        <label><b>Name</b></label>
                        <input type="text" placeholder="Enter Name" name="fullname" required>

                        <label><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                        <label><b>Phone Number.</b></label>
                        <input type="tel" placeholder="Enter valid phone number " name="phone_number" required>

                        <input type="checkbox" checked="checked"> Remember me
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                        <button type="button"  class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>



        

    </div>
    
</body>
</html>