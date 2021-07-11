<?php
require_once('config.php');
require_once('DB_Connection.php');
if(isset($_FILES['fileToUpload'])){
  //declaring variables to store values
  $target_dir="uploads/";
  $file_name=$_FILES['fileToUpload']['name'];
  $file_size=$_FILES['fileToUpload']['size'];
  $file_tmp=$_FILES['fileToUpload']['temp_name'];
  $file_type=$_FILES['fileToUpload']['type'];
  $file_ext=strtolower(end(explode('.', $_FILES['fileToUpload']['name'])));
  $author=$_POST['author'];
  $title=$_POST['title'];
  $errors =array();
  $allowTypes=array('pdf','doc', 'xls', 'txt');
    //allowed certain types of file formats

  if (in_array($file_ext, $allowTypes)===false){
    $errors[]="extension not allowed, please choose a PDF, DOC, XLS, and TXT file format";
  }
  if($file_size>2097152){
    $errors[]="File size must not be greater than 2MB";

  }
  if (empty($errors)===True){
    //upload file to server
    move_uploaded_file($file_tmp,$target_dir.$file_name);
    echo "Upload successful";
      //insert data into the database
      $sql="INSERT INTO tbl_ebook ( book ) VALUES ('$file_name')";
      $success=mysql_query($connection, $sql);
      if($success){

        echo "Successfully Saved to the Database! ";

      }else{
        print_r($errors);

      }


    }
  }





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
              <a href=""><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> E-Book Upload</a>
          </li>

          <li>
            <a href="collegeInfoUpload.php"><span class="fa fa-trophy mr-3"></span> College Info Upload</a>
          </li>

          <li>
            <a href="landing.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Career Guidance</h2>
        <div class="card">
          <div class="card-header bg-primary text-light shadow-4">
            <p class="title">E-Book File Upload</p>
          </div>
          <div class="card-body bg-default text-secondary">
          <div class="error"></div>
          <div class="form-sign">
          <form action="EbookUpload.php" method="post" enctype="mulitpart/form-data" >
            <div class="form-group">

                <div class="input-group">
                  <input type="file" class="form-control" name="fileToUpload" id="">
                </div>
                <div class="input-group">
                  <button type="submit" class="btn btn-primary" name="submit" >Upload</button>
                </div>

                .
            </div>
          </form>
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
