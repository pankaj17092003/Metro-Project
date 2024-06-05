<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro about page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .a1{
           
           color: #fff;
           display: block;
           text-decoration: none;
           font-size: 20px;
           font-weight: bold;
       }
       .fa1{
            color: white;
        }
        .contact{
            color: white;
            line-height: 25px;
            font-size: 14px;
            font-weight:14px;
           
        }
        .fa1{
            color: white;
            line-height: 10px;
            font-size: 15px;
        }
    </style>

</head>
<body>
     <!-- start navbar -->
     <div class="container-fluid">
        <div class="row bg-warning">
            <div class="col-sm-1"></div>
            <div class="col-sm-2 text-center mt-4"><img src="logometro.png" height="50px">
                <p class="text-light">Apna Metro Rail Corporation</p>
            </div>
            <div class="col-sm-6 mt-4">
                <h4 class="text-light">Uttar Pradesh Apna Metro Rail Corporation Limited</h4>
            </div>
            <div class="col-sm-3 mt-5 text-center">
              <button class="btn-outline-dark form-group rounded text-light b1"><a class="text-light nav-link" href="ragistration.php">Registration</a> </button>
              <button class="btn-outline-dark rounded text-light b2"><a class="text-light nav-link" href="login.php">Login</a></button>
                <hr>
            </div>
        </div>
       
        <div class="row  text-center fw-5">
           <div class="col-sm-2 mt-2 text-success"><img src="img/train.png" height="50px"></div>
           <div class="col-sm-2 form-control bg-dark mt-2 "><a href="index.php"class="a1">Home</a></div>
           <div class="col-sm-2 form-control bg-dark mt-2"><a href="" class="a1">Apna Metro</a></div>
           <div class="col-sm-2 form-control bg-dark mt-2 "><a href="about.php"class="a1">About Metro</a></div>
           <div class="col-sm-2 form-control bg-dark mt-2 "><a href=""class="a1">Our Services</a></div>
           <div class="col-sm-2 text-center fs-5 mt-2 text-success a"><img src="img/train.png" height="50px"></div>
        </div>
        </div>
          <!-- end navbar -->


          <!-- slider start -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner mt-2" style="position: relative;">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/metro1.jpg" height="400px" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/p2.jpg" height="400px" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/p3.jpg" height="400px" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- slider end -->

          <!-- hyper link -->
          <div class="row">
          <div class="navbar-collapse nav-main-collapse collapse" style="float:left">

            <div class="container">
  
               
  
              <nav class="nav-main mega-menu">
  
                <ul class="nav nav-pills nav-main" id="mainMenu">
  
                  <li>
  
                    <a  tabindex="12" href="https://www.lmrcl.com/"  >Home</a> 
  
                  </li>
  
                  <li class="dropdown" id="about" >
  
                    <a  tabindex="13"  class="dropdown-toggle" href="https://www.lmrcl.com/about/lucknow-metro-rail-corporation/">About<i class="fa fa-angle-down"></i></a>
  
                    <ul class="dropdown-menu" id="about-menu">
  
                                  <li><a    href="https://www.lmrcl.com/about/lucknow-metro-rail-corporation/">About LMRC</a></li>
  
                                  <li><a    href="https://www.lmrcl.com/about/lucknow-metro-rail-corporation-team/">The UPMRC Team</a></li>
  
                                  <li><a    href="https://www.lmrcl.com/about/vision-mission">Vision & Mission </a></li>
  
                                  <li><a   href="https://www.lmrcl.com/about/md-message">MD's Message</a></li>
  
                                  <li><a   href="https://www.lmrcl.com/about/board-of-directors/">Board of Directors</a></li>
  
                                  <li><a    href="https://www.lmrcl.com/about/certifications/">Certifications</a></li>
  
                    </ul>
  
                  </li>
  
                <li class="dropdown" >
  
                    <a class="dropdown-toggle" href="https://www.lmrcl.com/passengerinfo/latest-updates/" tabindex="14">
  
                      Passenger info
  
                      <i class="fa fa-angle-down"></i>
  
                    </a>
                    </li>

                    </ul>
                    </nav>
                    </div>
                    </div>
                    </div>
          <!-- end hyper links -->



          <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3"></div>
                  <div class="col-ms-6 ">
                      
                       <h2 class="text-center"> About<strong class="text-center text-warning">  LMRC</strong></h2>
             <img src="img/metro1.jpg" width="100%" height="400px" alt="about LMRC"/>
           <p>Lucknow is the capital of Uttar Pradesh, the most populous state of India. It is known for its rich cultural heritage. The present population of Lucknow city is more than 3 million. Being an important service and trading centre, Lucknow continues to grow and attract large number of people to the city. The rapid growth of the city and the associated urban sprawl has accentuated the demand-supply mismatch amidst constrained public transport infrastructure.</p>

           <p>To strengthen and augment the transport infrastructure of the city with a holistic multi-modal transport system, Government of Uttar Pradesh has decided to implement Lucknow Metro Rail Project as an integrated mass public transport system that meets the mobility and accessibility needs of people of Lucknow. The DPR of Lucknow Metro Rail Project, approved by State Govt was submitted to MoUD on 26.08.2013. MoUD gave its "In-principle approval of Part-1A of DPR" on 27.12.2013.</p>

           <p>The completion cost (including Central taxes) of Part-1A (N-S corridor) is Rs 6880 cr. as per the revised DPR submitted to MoUD on 10.10.2013. The project is being implemented on 50:50 model (DMRC model) with equity sharing by GoI and GoUP. Over 50% of the project (Rs 3502 cr) is being funded through foreign debt from The European Investment Bank (EIB). The FIRR for the project is 8.12% while the EIRR is 19.43%.</p>

           <p>To implement the Lucknow Metro Rail Project, a special purpose vehicle (SPV), Lucknow Metro Rail Corporation (LMRC) was incorporated on 25.11.2013 under the Companies Act, 1956. The certificate of commencement of business was issued on 24.12.2013. This Company is jointly  owned by GoI and GoUP. The authorized capital of the Company is Rs 2000 Cr.</p>                      
           </div>

           <div class="col-sm-3"></div>
                                                       
                          
       
                       
                            
          </div> 
          </div>

         <!--middle section -->
          <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-deck">
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                        <div class="card" height="100px">
                          <img class="card-img-top" src="img/manoj.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6"></div>
            </div>
          </div>
          <!-- middle section end-->

         <!-- footer start  -->
<div class="container-fluid footer bg-dark mt-5">
  <div class="row">
      <div class="col-sm-3 text-center"><img src="logometro.png" class=" mt-3" height="80px">
          <p class="text-light"><br>Apna Metro Rail Corporation</p>
      </div>
      <div class="col-sm-3 mt-3 ">
          <h5 class="text-light">About Metro</h5><hr>
      <a href=""class="fa1 nav-link">Home</a>
         <a href=""class="fa1 nav-link">Apna Metro</a>
      <a href=""class="fa1 nav-link">Project</a>
       <a href=""class="fa1 nav-link">Government Fund</a>
      
      </div>
      <div class="col-sm-3 mt-3 ">
          <h5 class="text-light">Our Services</h5><hr>
         
              <a href=""class="fa1 nav-link">Home</a>
              <a href=""class="fa1 nav-link">Apna Metro</a>
            <a href=""class="fa1 nav-link">Project</a>
          <a href=""class="fa1 nav-link">Government Fund</a>
          
      </div>
      <div class="col-sm-3 mt-3 text-light">
          <h5 class="text-light ">Contact Us</h5><hr>
          <a href="https://mail.google.com/mail/u/0/#inbox" class="contact"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i>&ensp;pkraj725883@gmail.com</a><br>
       <a href="" class="contact"> <i class="fa-solid fa-phone " style="color: #ffffff;"></i> &ensp;725836052</a> <br><br>
         
          <a href="https://wa.me/qr/5EGVPAKQ6SRML1" target="_blank"><i class="fa-brands fa-whatsapp" style="color: #f7f9fc;"></i></a>&ensp;
          <a href="https://instagram.com/iam_pankajjjj0217?igshid=YTQwZjQ0NmI0OA==" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>&ensp;
          <a href="https://www.facebook.com/pankaj.yadaw.927" target="_blank"><i class="fa-brands fa-facebook" style="color: #f7f7f8;"></i></a>&ensp;
          <a href="https://www.linkedin.com/in/pankaj-yadav-1b9561285?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fa-brands fa-linkedin" style="color: #f3f4f7;"></i></a>&ensp;
          <a href=""><i class="fa-brands fa-twitter" style="color: #f2f4f8;"></i></a>&ensp;
          <a href=""><i class="fa-brands fa-github" style="color: #f7f9fc;"></i></a>&ensp;
          <a href="https://youtube.com/@pankaj_yadavv?si=nM7AXORWueDz0E4Z" target="_blank"><i class="fa-brands fa-youtube" style="color: #f7f9fc;"></i></a>
      </div>
  </div>
  <hr>
  <div class="row">
        <div class="col-sm-12">
        <p class="text-light text-center a3" style="font-size: 10px;">Copyright © 20<?php echo date('y') ?> Apna Metro.Com</p>
    </div>
  </div>
</div>
<!-- footer end -->

</body>
</php>