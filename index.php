<?php 
include 'admin/database/db.php';

$sqlData = mysqli_query($conn, "SELECT * FROM capabilitas");

?>
<!DOCTYPE html>
<html>
   <head>
     <?php include 'landing_page/layout/css.php' ?>
   </head>
   <body>
      <!-- header top section start -->
      <div class="header_top_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="header_top_main">
                     <div class="call_text"><a href="#"><span class="padding_right0"><i class="fa fa-phone" aria-hidden="true"></i></span>  Call : +01 1234567890</a></div>
                     <div class="call_text_2"><a href="#"><span class="padding_right0"><i class="fa fa-envelope" aria-hidden="true"></i></span> demo@gmail.com</a></div>
                     <div class="call_text_1"><a href="#"><span class="padding_right0"><i class="fa fa-map-marker" aria-hidden="true"></i></span> Location</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header top section end -->
      <!-- header section start -->
        <?php include 'landing_page/layout/navbar.php' ?>
      <!-- header section end -->
      <!-- appointment section start -->
      <!-- <div class="appointment_section">
         <div class="container">
            <div class="appointment_box">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="appointment_taital">Book <span style="color: #0cb7d6;">Appointment</span></h1>
                  </div>
               </div>
               <div class="appointment_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <p class="doctorname_text">Patient Name</p>
                        <input type="text" class="email_text" placeholder="" name="">
                     </div>
                     <div class="col-md-4">
                        <form>
                           <div class="form-group">
                              <p class="doctorname_text">Doctor's Name</p>
                              <select class="form-control" id="">
                                 <option>Normal distribution </option>
                                 <option>200</option>
                                 <option>300</option>
                                 <option>400</option>
                                 <option>500</option>
                              </select>
                           </div>
                        </form>
                     </div>
                     <div class="col-md-4">
                        <form>
                           <div class="form-group">
                              <p class="doctorname_text">Department's Name</p>
                              <select class="form-control" id="">
                                 <option>Normal distribution </option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                              </select>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p class="doctorname_text">Phone Number</p>
                        <input type="text" class="email_text" placeholder="" name="">
                     </div>
                     <div class="col-md-4">
                        <form>
                           <div class="form-group">
                              <p class="doctorname_text">Department</p>
                              <select class="form-control" id="">
                                 <option>Normal distribution</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                              </select>
                           </div>
                        </form>
                     </div>
                     <div class="col-md-4">
                        <p class="doctorname_text">Choose Date</p>
                        <input id="datepicker" placeholder="Select Date" width="270" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- appointment section end -->
      <!-- about section start -->
      <div class="about_section layout_padding pt-3 mt-4">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital">About Hospital</h1>
                  <p class="about_text"> has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors  has a more-or-less normal distribution of letters, as o</p>
                  <div class="about_bt"><a href="#">Read More</a></div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="landing_page/images/about-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- treatment section start -->
      <div class="treatment_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="treatment_taital">Hospital Treatment</h1>
               </div>
            </div>
            <div class="treatment_section_2">
            <div class="row">
               <?php 
               $no = 01;
                while($rowData = mysqli_fetch_assoc($sqlData)) { ?> 
                 <div class="col-lg-3 col-sm-6">
                 <h1 class="number_text"><?php echo $no++ ?></h1>
                  <h2 class="care_text"><?php echo $rowData['judul'] ?></h2>
                  <p class="treatment_text">alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything</p>
                  <div class="readmore_bt active"><a href="#">Read More</a></div>
                  
               </div>
                <?php } ?>
              
               
            </div>
         </div>
         </div>
      </div>
      <!-- treatment section end -->
      <!-- doctores section start -->
      <div class="doctores_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="doctores_taital">Our doctores</h1>
               </div>
            </div>
            <div class="doctores_section_2">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-1.png"></div>
                                 <h4 class="humour_text">Humour <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-2.png"></div>
                                 <h4 class="humour_text">Jenni <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-3.png"></div>
                                 <h4 class="humour_text">Morco <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-1.png"></div>
                                 <h4 class="humour_text">Humour <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-2.png"></div>
                                 <h4 class="humour_text">Jenni <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-3.png"></div>
                                 <h4 class="humour_text">Morco <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-1.png"></div>
                                 <h4 class="humour_text">Humour <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-2.png"></div>
                                 <h4 class="humour_text">Jenni <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="doctores_box">
                                 <div class="image_1"><img src="landing_page/images/img-3.png"></div>
                                 <h4 class="humour_text">Morco <br><span class="mbbs_text">MBBS</span></h4>
                                 <div class="social_icon">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- doctores section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="testimonial_taital">Our Testimonial</h1>
               </div>
            </div>
            <div class="customer_section_2">
               <div class="row">
                  <div class="col-md-12">
                      <div class="box_main">
                        <div id="main_slider" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="customer_main">
                                    <div class="customer_right">
                                       <h3 class="customer_name">Morijorch <span class="quick_icon"><img src="landing_page/images/quick-icon.png"></span></h3>
                                       <p class="default_text">Default model text,</p>
                                       <p class="enim_text">editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="customer_main">
                                    <div class="customer_right">
                                       <h3 class="customer_name">Morijorch <span class="quick_icon"><img src="landing_page/images/quick-icon.png"></span></h3>
                                       <p class="default_text">Default model text,</p>
                                       <p class="enim_text">editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="customer_main">
                                    <div class="customer_right">
                                       <h3 class="customer_name">Morijorch <span class="quick_icon"><img src="landing_page/images/quick-icon.png"></span></h3>
                                       <p class="default_text">Default model text,</p>
                                       <p class="enim_text">editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                           </a>
                           <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="contact_taital">Get In Touch</h1>
                     <form action="">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_left_15">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Enter Your Email" name="Enter your email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h3 class="footer_taital">Address</h3>
                     <div class="location_main">
                        <ul>
                           <li>
                              <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span class="padding_15">Making this the first true</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">Call : +01 1234567890</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">Email : demo@gmail.com</span></a>
                           </li>
                        </ul>
                     </div>
                     <div class="footer_social_icon">
                        <ul>
                           <li>
                              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h3 class="footer_taital">Useful Link</h3>
                     <div class="footer_menu">
                        <ul>
                           <li class="active">
                              <a href="index.html">Home</a>
                           </li>
                           <li>
                              <a href="about.html">About</a>
                           </li>
                           <li>
                              <a href="doctors.html">Doctors</a>
                           </li>
                           <li>
                              <a href="news.html">News</a>
                           </li>
                           <li>
                              <a href="treatment.html">Treatment</a>
                           </li>
                           <li>
                              <a href="contact.html">Contact Us</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h3 class="footer_taital">Help & Support</h3>
                     <p class="ipsum_text">Opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page</p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h3 class="footer_taital">News</h3>
                     <div class="dryfood_text"><img src="landing_page/images/img-4.png"><span class="padding_15">Normal distribution</span></div>
                     <div class="dryfood_text"><img src="landing_page/images/img-5.png"><span class="padding_15">Normal distribution</span></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution By <a href="https://themewagon.com">ThemWagons</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <?php include 'landing_page/layout/js.php' ?>
      <script>
         $('#datepicker').datepicker({
             uiLibrary: 'bootstrap'
         });
      </script> 
      <script>
         $('#timepicker').timepicker({
             uiLibrary: 'bootstrap'
         });
      </script>
   </body>
</html>