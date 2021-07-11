<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Career Guidance System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      body, html {
      height: 100%;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .hero-image {
    /* The image used */
    background-image: url("images/StudentStand.jpg");

    /* Set a specific height */
    height: 50%;

    /* Position and center the image to scale nicely on all screens */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Place text in the middle of the image */
.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}
      /* Three columns side by side */
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
    padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: purple;
    text-align: center;
    cursor: pointer;
    width: 100%;
}


.button:hover {
    background-color: #555;
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->

  </head>
  <body onload="typeWriter()" class="text-center">
    <div class="hero-image">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CGS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index_student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="career_field.php">Career-Guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="about.php" tabindex="-1" aria-disabled="true">About Us</a>
        </li>
      </ul>

    </div>

  </div>
</nav>
<div class="hero-text">
  <h1 id="loadtitle"></h1>
  <p class="Lead ">Your Career Matters</p>

</div>
</div>
    <div class="wrapper m-2"></div>
        <div class="row">
  <div class="column">
    <div class="card">
      <img src="img1.jpg" alt="" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">survey Careers </p>
        <p>Careers  </p>
        <p></p>
        <p><a class="button text-light" href="career_field.php">check career fields &raquo;</a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img1.jpg" alt="" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">About Us  </p>
        <p class="text-center">visit the about us page to gain knowledge on how the system operate and some other things you could do.  </p>
        <p>Get to know much about us </p>
        <p><a class="button text-light" href="about.php">About Us</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">

      <div class="container">
        <h2>Contact Us</h2>
        <p class="title">Feedback channel</p>
        <p>Get in Touch with Us here</p>
        <p></p>
        <p><a class="button text-light" href="contact.php">Contact Us</a></p>
      </div>
    </div>
  </div>

    </div>

    <script>
    var i = 0;
    var txt = 'Career Guidance System'; /* The text */
    var speed = 40; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
        if(i<txt.length) {
            document.getElementById("loadtitle").innerHTML += txt.charAt(i);
          i++;
            setTimeout(typeWriter, speed);
        }
    }

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
    </script>



  <footer class="mt-auto text-white-50">
    <p>Copyright&copy; All Rights Reserved. <?= date("Y")?> <a href="https://getbootstrap.com/" class="text-white">Project</a>, by <a href="https://nunvi.com" class="text-white">NunviTech</a>.</p>
  </footer>
</div>



  </body>
</html>
