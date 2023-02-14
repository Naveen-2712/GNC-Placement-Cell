
 <header id=" header" class="header fixed-top" data-scrollto-offset="0">
     <div class="container-fluid d-flex align-items-center justify-content-between">

         <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
         <img src="assets/img/scs-logo-1.png" height=70px style="height:70px"/>
         </a>
         <div class="Department">
            <a>
                <b><head>School of Information Technology</head></b>
                <h5><strong>B.SC COMPUTER SCIENCE</strong></h5>
            </a>
            <style>
            .Department {
                font-size: 25px;
                font-family: "Copperplate Gothic Light";
            }
            .header{
                background-color: white;
            }
            h5{
                font-size: 20px;
                font-family: "Copperplate Gothic Light";
            }
            @media only screen and (max-width:600px) {
                .Department{
                    display: none;
                }
            }
            </style>
            </div>
        

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                 <li class="dropdown"><a href="login.php"><span>Login</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>

                         <li><a href="admin/index.php">Admin Login</a></li>
                         <li><a href="login-candidates.php">Student Login</a></li>
                         <li><a href="login-company.php">Placement Cell</a></li>


                     </ul>
                 </li>
                 <li class="dropdown"><a href="login.php"><span>Register</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>

                         <!-- <li><a href="admin/index.php">Admin</a></li> -->
                         <li><a href="register-candidates.php">Students</a></li>
                         <li><a href="register-company.php">Placement Cell</a></li>


                     </ul>
                 </li>
                <li><a class="nav-link scrollto" href="offerletter.php">Upload Offer Letter</a></li>

                 <!-- <li><a class="nav-link scrollto" href="login.php">Sign Up</a></li> -->

                 <!-- <li><a class="nav-link scrollto" href="faq.php">FAQ</a></li> -->

                 <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                 <!-- <li><a class="nav-link scrollto" href="aboutus.php">FAQ</a></li> -->


             </ul>
             <i class="bi bi-list mobile-nav-toggle d-none"></i>
         </nav><!-- .navbar -->

         <a class="btn-getstarted scrollto" href="faq.php">FAQ</a>

     </div>
     
 </header>