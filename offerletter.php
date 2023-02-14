<?php

//To Handle Session Variables on This Page
session_start();
require_once("db.php");
?>

<!-- Main header -->
<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo">GNC Placement Portal</a>
        <ul class="nav-menu">
           <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact </a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

<!-- Css code-->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 62.5%;
        font-family: 'Roboto', sans-serif;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
        left: 0px;
    }

    .header {
        border-bottom: 1px solid #E2E8F0;
        background-color: #1a2226;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
    }

    .hamburger {
        display: none;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: #101010;

    }

    .nav-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-item {
        margin-left: 5rem;
    }

    .nav-link {
        font-size: 1.6rem;
        font-weight: 400;
        color: #b3c6e0;
    }

    .nav-link:hover {
        color: #482ff7;
    }

    .nav-logo {
        font-size: 2.1rem;
        font-weight: 500;
        color: #d0cce9;

    }

    @media only screen and (max-width: 768px) {
        .nav-menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #0b0606;
            /* background-color: #482ff7; */
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
            z-index: 10;

        }

        .nav-menu.active {
            left: 0;
        }

        .nav-item {
            margin: 2.5rem 0;
        }

        .hamburger {
            display: block;
            cursor: pointer;
        }

    }

    /* Inside the Media Query */

    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }
</style>

<!-- js files-->

<script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
</script>

<script src="../js/sweetalert.js">

</script>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Placement Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper" style="margin-left: 0px;" >
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-info"></i><strong> Important</strong><br>All the details provided by you must be absolutely correct and genuine.
    </div>
    <section class="content-header">
        <div class="container">
            <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
                <h3 class="text-center margin-bottom-20">Upload Your Offer Letter</h3>
                <form action="uploadofferletter.php" method="post" enctype="multipart/form-data">


                            <div class="row">
                                <div class="col-md-6 latest-job ">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control input-lg" id="firstname" name="firstname" placeholder="First Name"  required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control input-lg" id="lastname" name="lastname" placeholder="Last Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="text" class="form-control input-lg" id="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactno">Contact Number</label>
                                        <input type="text" class="form-control input-lg" id="contactno" name="contactno" placeholder="Contact Number" >
                                    </div>
                                    <div class="form-group">
                                        <label for="rollno">Roll Number</label>
                                        <input type="text" class="form-control input-lg" id="rollno" name="rollno" placeholder="Roll Number" >
                                    </div>
                                    <div class="form-group">
                                        <label for="regno">Register Number</label>
                                        <input type="text" class="form-control input-lg" id="regno" name="regno" placeholder="Register Number"  >
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-flat btn-success">Upload Offer Letter</button>
                                    </div>
                                </div>
                                <div class="col-md-6 latest-job ">
                                    <div class="form-group">
                                        <label for="companyname">Company Name</label>
                                        <input type="text" class="form-control input-lg" id="companyname" name="companyname" placeholder="Company Name" >
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Company Address</label>
                                        <textarea id="address" name="address" class="form-control input-lg" rows="5" placeholder="Company Address"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control input-lg" id="city" name="city" placeholder="city" >
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control input-lg" id="state" name="state" placeholder="state" >
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Offer Letter</label>
                                        <label style="color: red;">File Format PDF Only!</label>
                                        <input type="file" name="offerletter" class="btn btn-default" required>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </section>
    </div>
  </div>
</body>
</html>

</form>

<footer class="main-footer" style="margin-left: 0px;">
      <div class="text-center">
        <strong>Copyright &copy; 2023 <a href="#">GNC Placement Portal</a>.</strong> All rights
        reserved.
      </div>
    </footer>

    
    
