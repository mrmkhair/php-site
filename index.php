<!doctype html>
<html lang="en">
  <head>
  <?php
  
include ('connect.php');
    error_reporting(0);
  
        if(is_null($_GET['lang'])){
        $lang='eng';
    }else{
        $lang=$_GET['lang'];
    }
    $sql="SELECT * FROM info WHERE lang='$lang' ";
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()){
      
   ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $row['content'] ?>">
    <meta name="author" content="<?php echo $row['brand'] ?>">

    <title><?php echo $row['title'] ?></title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    

  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class='uil uil-user'></i> <?php echo $row['brand'] ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About"><?php echo $row['about'] ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects"><?php echo $row['projects'] ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume"><?php echo $row['resum'] ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact"><?php echo $row['contact'] ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?lang=eng" class="nav-link"><span>English</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?lang=ar" class="nav-link"><span>Arabic</span></a>
                    </li>
                   
                </ul>
    
                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        <?php echo $row['mode'] ?>
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text"><?php echo $row['smalltext'] ?></span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2"><?php echo $row['span1'] ?></span>
                                <div class="animated-info">
                                    <span class="animated-item"><?php echo $row['span2'] ?></span>
                                    <span class="animated-item"><?php echo $row['span3'] ?></span>
                                    <span class="animated-item"><?php echo $row['span4'] ?></span>
                                </div>
                        </h1>

                        <p><?php echo $row['paragraph'] ?></span></p>
                        
                        <div class="custom-btn-group mt-4">
                          <a  href="images/<?php echo $row['attachment'] ?>" download class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> <?php echo $row['link'] ?></span></a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link"><?php echo $row['quote'] ?></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/<?php echo $row['svg'] ?>" class="img-fluid" alt="svg image">
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2><?php echo $row['h2projects'] ?></span></h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="images/<?php echo $row['img1'] ?>" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/<?php echo $row['img2'] ?>" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/<?php echo $row['img3'] ?>" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/<?php echo $row['img4'] ?>" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/<?php echo $row['img5'] ?>" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/<?php echo $row['img6'] ?>" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>
   
    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">
          
            
                <div class="col-lg-6 col-12">
                  <h2 class="mb-4"><?php echo $row['group1'] ?></h2>
              
                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span><?php echo $row['s1'] ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span><?php echo $row['h1'] ?></span><small><?php echo $row['m1'] ?></small></h3>
                                  <p><?php echo $row['p1'] ?></p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                  <span><?php echo $row['s2'] ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span><?php echo $row['h2'] ?></span><small><?php echo $row['m2'] ?></small></h3>
                                  <p><?php echo $row['p2'] ?></p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                        <div class="timeline-yr">
                                  <span><?php echo $row['s3'] ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span><?php echo $row['h3'] ?></span></h3>
                                  <p><?php echo $row['p3'] ?></p>
                             </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                        <div class="timeline-yr">
                                  <span><?php echo $row['s4'] ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span><?php echo $row['h4'] ?></span><small><?php echo $row['m4'] ?></small></h3>
                                  <p><?php echo $row['p4'] ?></p>
                             </div>
                        </div>

                    </div>
                </div>
              
                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2"><?php echo $row['group2'] ?></h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                        <div class="timeline-yr">
                                  <span><?php echo $row['s5'] ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span><?php echo $row['h5'] ?></span><small><?php echo $row['m5'] ?></small></h3>
                                  <p><?php echo $row['p5'] ?></p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                            <span><?php echo $row['s6'] ?></span>
                            </div>
                            <div class="timeline-info">
                            <h3><span><?php echo $row['h6'] ?></span><small><?php echo $row['m6'] ?></small></h3>
                                <p><a rel="nofollow" href="https://www.mrmkhair.000webhostapp.com">mrmkhair</a> <?php echo $row['p6'] ?></p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                          <div class="timeline-yr">
                                  <span><?php echo $row['s7'] ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span><?php echo $row['h7'] ?></span><small><?php echo $row['m7'] ?></small></h3>
                                  <p><?php echo $row['p7'] ?></p>
                             </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.558402180099!2d-73.99373482142036!3d40.75895421922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTheater+District%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2smm!4v1549875377188" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white"><?php echo $row['welcome'] ?> </h3>
                  <p class="footer-text mb-0"><?php echo $row['phone'] ?></p>
                  <p><a href="mailto:hello@company.co"><?php echo $row['email'] ?></a></p>
                </div>

                <ul class="social-links">
                     <li><a href="<?php echo $row['flink'] ?>" class="uil uil-facebook" data-toggle="tooltip" data-placement="left" title="facebook"></a></li>
                     <li><a href="<?php echo $row['phone'] ?>" class="uil uil-phone" data-toggle="tooltip" data-placement="left" title="phone"></a></li>
                     <li><a href=<?php echo $row['ilink'] ?>"" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4"><?php echo $row['welcontact'] ?></h2>

              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="<?php echo $row['yname'] ?>" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="<?php echo $row['yemail'] ?>" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="<?php echo $row['ymsg'] ?>"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="<?php echo $row['sending'] ?> ">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; <a rel="nofollow" href="https://www.mrmkhair.000webhostapp.com"><?php echo $row['brand'] ?></a> <?PHP echo date("Y") ?> . All rights reserved</p>
                        <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.mrmkhair.000webhostapp.com"><?php echo $row['brand'] ?></a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
  <?php } ?>
</html>