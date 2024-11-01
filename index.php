<?php
session_abort();
include 'admin/database/db.php';

//Konten Projek
$queryAhli = mysqli_query($conn, "SELECT * FROM capabilitas ");

//konten home
$queryHome = mysqli_query($conn, "SELECT * FROM  home");
$rowHome = mysqli_fetch_assoc($queryHome);
// Konten Profile
$queryProfile = mysqli_query($conn, "SELECT * FROM  user ");
$rowProfile = mysqli_fetch_assoc($queryProfile);
//Konten Kontak/About
$sqlA = mysqli_query($conn, "SELECT * FROM about");
$rowA = mysqli_fetch_assoc($sqlA);
// Konten
$queryKonten = mysqli_query($conn, "SELECT * FROM  konten LIMIT 4");

//testing 
$queryTesting = mysqli_query($conn, "SELECT * FROM testimoni ");

//ability / Skill
$querySkill = mysqli_query($conn, "SELECT * FROM  ability");
$rowSkill = mysqli_fetch_assoc($querySkill);
// Konten Footer 

$queryFooter = mysqli_query($conn, "SELECT * FROM footer");
$rowFooter = mysqli_fetch_assoc($queryFooter);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Lonely Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="landing_page/assets/img/favicon.png" rel="icon">
  <link href="landing_page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="landing_page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="landing_page/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lonely
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .contact .php-email-form-new button[type=submit] {
      color: var(--contrast-color);
      background: var(--accent-color);
      border: 0;
      padding: 10px 30px;
      transition: 0.4s;
      border-radius: 50px;
    }

    .contact .php-email-form-new button[type=submit]:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 25%);
    }

    .card-style {
      display: flex;
      justify-content: center;

      align-items: center;

      gap: 20px;

    }

    .card {
      flex: 0 0 18rem;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="landing_page/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Lonely</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#Weapon">Weapon</a></li>
          <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="admin/login.php"><span>Setting</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style=" background: url(admin/upload/<?php echo $rowProfile['foto'] ?>) no-repeat">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <h2 style="color:red"><?php echo $rowProfile['nama'] ?></h2>
        <p style="color:red"><?php echo $rowProfile['alamat'] ?><br></p>
        <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $rowA['profesi'] ?></h2>
        <p><?PHP echo $rowA['deskripsi'] ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="admin/upload/<?php echo $rowA['foto'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2><?php echo $rowA['about_header'] ?> &amp; From Narukami island</h2>
            <p class="fst-italic py-3">
              <?php echo $rowA['header_paragraf'] ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>email@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              <?php echo $rowA['detail_paragraf'] ?>
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>ATK</span> <i class="val"><?php echo $rowSkill['atk'] ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $rowSkill['atk'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Base HP</span> <i class="val"><?php echo $rowSkill['base_hp'] ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $rowSkill['base_hp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Weapon</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <?php while ($rowKonten = mysqli_fetch_assoc($queryKonten)) { ?>
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><img src="admin/upload/<?php echo $rowKonten['foto'] ?>" alt=""></div>
                <h4><a href="" class="stretched-link"><?php echo $rowKonten['judul_konten'] ?></a></h4>
                <p><?php echo $rowKonten['keterangan'] ?></p>
              </div>
            </div>
          <?php } ?>
          <!-- End Service Item -->



        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Telent</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <?php
            $queryTesting = mysqli_query($conn, "SELECT * FROM testimoni");

            while ($rowTesting = mysqli_fetch_assoc($queryTesting)) {
            ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span><?php echo ($rowTesting['deskripsi']); ?></span> <!-- Ganti dengan kolom yang sesuai -->
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img src="admin/upload/<?php echo ($rowTesting['foto']); ?>" class="testimonial-img" alt="">
                  <h3><?php echo ($rowTesting['nama']); ?></h3>
                  <h4><?php echo ($rowTesting['profesi']); ?></h4>
                </div>
              </div>
            <?php
            }
            ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <h3 class="sitename">Lonely</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Lonely</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="landing_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landing_page/assets/vendor/php-email-form/validate.js"></script>
  <script src="landing_page/assets/vendor/aos/aos.js"></script>
  <script src="landing_page/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="landing_page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="landing_page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="landing_page/assets/js/main.js"></script>

</body>

</html>