<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Default Meta Tag -->
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- OG Meta Tag -->
    
    <!-- Title -->
    <title>Contact Me</title>
    <!-- Favicon -->
    <link rel="icon" id="favicon" href="./assets/images/favicon.svg" type="image/gif" sizes="16x16">
    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate CSS Link -->
    <link rel="stylesheet" href="./lib/WOW-master/css/libs/animate.css">
    <!-- Font Awesome 5 CDN/Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Fancybox Image Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- Slider CSS Link -->
    <link rel="stylesheet" href="./lib/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./lib/slick-1.8.1/slick/slick-theme.css">
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="./lib/bootstrap-5/css/bootstrap.min.css">
    <!-- Main CSS Link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Responsive CSS Link -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- Include PHP  -->
     <?php 
     include 'connections/connect.php';
     include 'connections/formhandling.php';
     ?>
    
</head>
<body>
     <!-- Header Start -->
     <header class="d2c_navbar sticky-top">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg px-0 py-0" id="d2c_main_nav">
                <!-- Logo -->
                <a class="navbar-brand" href="./index.html"><img src="./assets/images/logo.png" alt="Logo"></a>
                <!-- Logo -->
                <!-- HamBurger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <!-- HamBurger -->
                <!-- Nav Item -->
                <?php
                $select_sql = "select * from navbar";
                $execSQL = mysqli_query($conn, $select_sql);
                $result = mysqli_fetch_assoc($execSQL); 
          ?>
                <div class="collapse navbar-collapse js-clone-nav justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php"><?php echo $result['navbar_1']; ?> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><?php echo $result['navbar_2'];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="skill.php"><?php echo $result['navbar_3'];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portofolio.php"><?php echo $result['navbar_4'];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php"> <?php echo $result['navbar_5'];?></a>
                        </li>
                    </ul>
                </div>
                
                <!-- Nav Item -->
            </nav>
            <!-- Navbar -->
            <!-- Tab and Mobile View -->
            <div class="collapse navbar-collapse d2c_mobile_view" id="navbarSupportedContent">
                <div class="show_width container">
                    <div class="text-right">
                        <button class="navbar-toggler d2c_cross_btn p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    
                    <div class="navbar px-0 d2c_mobile_view_body"></div>
                </div>
            </div>
            <!-- Tab and Mobile View -->
        </div>
    </header>
    <!-- Header End -->

     <!-- Contact Section Start -->
     <?php
               $select_sql = "select * from contact";
               $execSQL = mysqli_query($conn, $select_sql);
               $result = mysqli_fetch_assoc($execSQL); 
               ?>
     <section class="d2c_contact_wrapper position-relative" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft">
                            <div class="d2c_card">
                                <h6><?php echo $result['small_header']; ?></h6>
                                <h2 class="mb-3"><?php echo $result['main_header']?></h2>
                                <form class="row needs-validation" validate method="POST" action="connections/formhandling.php">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="validationCustomFirstName" placeholder="Fill your name" autocomplete="off"  name="name" required>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group mb-3 has-validation">
                                            <input type="email" class="form-control" id="validationCustomEmail" placeholder="Fill your email" autocomplete="on" name="email" required >
                                            <div class="input-group-append" id="">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="validationCustomMessage" placeholder="Write Message" name="message" required ></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn" type="submit" name="submitButton"><?php echo $result['submit']; ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight">
                            <div class="d2c_card">
                                <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.564191968488!2d106.72622496774649!3d-6.320830701820089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eff48a040461%3A0x830e0fae212bcbb5!2sD&#39;daunan%20Residence!5e0!3m2!1sen!2sid!4v1729497788564!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="./assets/images/square_element.png" alt="Square Element">
                <img src="./assets/images/tringle_element.png" alt="Tringle Element">
            </section>
            <!-- Contact Section End -->
        </div>
        <!-- Footer Section Start -->
        <?php
               $select_sql = "select * from footer";
               $execSQL = mysqli_query($conn, $select_sql);
               $result = mysqli_fetch_assoc($execSQL); 
               ?>
        <footer class="d2c_footer_wrapper">
            <div class="d2c_footer_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 col-xl-5 mb-8 mb-lg-0 wow fadeInLeft">
                            <div class="d2c_footer_left">
                                <a href="./index.html">
                                    <img src="./assets/images/footer_logo.png" alt="Footer Logo">
                                </a>
                                <p class="mb-0"><?php echo $result['dsc'];?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl wow fadeInUp">
                            <h4>Contact Details</h4>
                            <ul class="d2c_info_link mb-5 mb-md-0">
                                <li class="mb-3">
                                    <a href="tel:219-555-0114">
                                        <span>
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <?php echo $result['rsvp'];?>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="mailto:gathan.ghifarirachwiyono@student.upj.ac.id">
                                        <span>
                                            <i class="far fa-envelope"></i>
                                        </span>
                                        <?php echo $result['email']?>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/search/Royal+2464+Ln.+Mesa,+New+Jersey/@36.8616406,-103.4819732,5z/data=!3m1!4b1?entry=ttu" target="_blank">
                                        <span>
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <?php echo $result['addr']?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                           
                            <div class="social-media">
                            <ul class="d2c_social_link list-group list-group-horizontal">
                                
                                <li>
                                    <a href="https://twitter.com/DesignToCodes" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/gathan-ghifari-rachwiyono-695515282/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/g_ghvr/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                            </div>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Copy Right Start -->
        <div class="d2c_copy_wrapper">
            <p class="mb-0">&copy; 2021 - 2023 <a href="https://www.designtocodes.com/" target="_blank">DesignToCodes</a>. All Right Reserved</p>
        </div>
        <!-- Copy Right End -->

                <!-- JS CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- WOW Animation JS -->
    <script src="./lib/WOW-master/dist/wow.min.js"></script>
    <!-- Bootstrap JS Link -->
    <script src="./lib/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <!-- fancybox Image -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Slider JS Link -->
    <script src="./lib/slick-1.8.1/slick/slick.min.js"></script>
    <!-- Main JS Link -->
    <script src="./assets/js/main.js"></script>
</body>
</html>