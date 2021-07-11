<?php
  require_once('config.php');
  require_once('DB_Connection.php');
  $sql="SELECT * FROM tbl_Users ";
  $result=mysqli_query($connection,$sql);

 ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Career Guidance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/studentGrad.jpg);"></div>
	  				<h3>Your Careers Matters!</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="landing.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="EbookUpload.php"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> E-Book Upload</a>
          </li>
          <li>
            <a href="manageUser.php"><span class="fa fa-gift mr-3"></span>Manage User </a>
          </li>
          <li>
            <a href="collegeInfoUpload.php"><span class="fa fa-trophy mr-3"></span> College Info Upload</a>
          </li>

          <li>
            <a href="signin.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Career Guidance</h2>
        <div class="card">
          <div class="card-header bg-info text-light shadow-4">
            <p class="title">User Management Console</p>
          </div>
          <div class="card-body bg-default">

          <table class="table table-striped table-bordered table-hover p-3 m-2">
            <thead>
              <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>

            </thead>

              <tbody>





                      <?php while ($row=mysqli_fetch_assoc($result)) {?>
                        <tr>
                          <td><?php echo $row['fullname'];?></td>
                          <td><?php echo $row['username'];?></td>
                          <td><?php echo $row['passwrd'];?></td>
                          <td><?php echo $row['phone_number'];?></td>
                        </tr>

                    <?php  } ?>













              </tbody>

          </table>
        </div>


          </div>


        </div>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
