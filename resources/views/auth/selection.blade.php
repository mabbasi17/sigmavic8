<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>اكاديمية سيجما التعليمية</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ URL::asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/img/favicon.png')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">موعد الانطلاق</a></li>
          <li><a class="nav-link scrollto" href="#values">الصفوف الدراسية</a></li>
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#team">اوائل المجموعات</a></li>
          <li><a class="nav-link scrollto" href="#recent-blog-posts">أخبار سيجما</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ URL::asset('assets/img/mr_mohamed_mostafa.svg') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center sigma-left">
          <img src="{{ URL::asset('assets/img/logo_sigma.svg') }}" alt="" data-aos="fade-up" class="logo-icon">
          <img src="{{ URL::asset('assets/img/sigma_academy.svg') }}" alt="" data-aos="fade-up" data-aos-delay="400" class="sigma-academy">

          <!-- <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2> -->
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{route('login.show','student')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>تسجيل الدخول للمنصة</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-12 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="continerr">

            <div>
              <label class="project-title">موعد انطلاق منصة سيجما</label>
              <label class="project-name">انتظروا افتتاح اكبر منصة لتعليم مادة الكيمياء في مصر</label></div>
            <div class="counter">
              <div class="days">
                <div class="value">00</div>
                <span>يوم</span>
              </div>

              <div class="hours">
                <div class="value">00</div>
                <span>ساعة</span>
              </div>

              <div class="minutes">
                <div class="value">00</div>
                <span>دقيقة</span>
              </div>

              <div class="seconds">
                <div class="value">00</div>
                <span>ثانية</span>
              </div>

            </div>
          </div>
        </div>

          <!-- <div class="col-lg-12 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/sigma-groub.png" class="img-fluid" alt="">
          </div> -->

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>المراحل الثانوية</h2>
          <p>كورسات وامتحانات في الكيمياء للمرحلة الثانوية</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/الصف الاول.jpg" class="img-fluid" alt="">
              <h3>الصف الاول الثانوي</h3>
              <p>يحتوي هذا القسم علي الشرح  والمراجعه للصف الاول الثانوي للترم الاول والثاني في مادة الكيمياء</p>
               <!-- <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/الصف الثاني.jpg" class="img-fluid" alt="">
              <h3>الصف الثاني الثانوي</h3>
              <p>يحتوي هذا القسم علي الشرح  والمراجعه للصف الثاني الثانوي للترم الاول والثاني في مادة الكيمياء</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/الصف الثالث.jpg" class="img-fluid" alt="">
              <h3>الصف الثالث الثانوي</h3>
              <p>يحتوي هذا القسم علي الشرح  والمراجعه للصف الثالث الثانوي في مادة الكيمياء</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>أوائل المجموعات</h2>
          <p>الطلاب الحاصلين علي الدرجة النهائية في الكيمياء</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>يعقوب قمر الدين دبيازة</h4>
                <span>تانية ثانوي</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>خضر كراويتة</h4>
                <span>اولي ثانوي</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4> خالد كشميري</h4>
                <span>تالته ثانوي</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>محمد سمبل</h4>
                <span>تانية ثانوي</span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->



    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>أخبار سيجما</h2>
          <p>أخر الاخبار</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Wed, October 19</span>
              <h3 class="post-title">لية تستخدم منصة سيجما ؟!</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>اقرأ المزيد</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Wed, October 19</span>
              <h3 class="post-title">سيجما تستعد لانطلاق منصتها في الاول من ديسمبر المقبل</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>اقرأ المزيد</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Wed, October 19</span>
              <h3 class="post-title">سيجما في الكيمياء تحتوي علي احدث اساليب الشرح لمادة الكيمياء للمراحل الثانوية</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>اقرأ المزيد</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container -flex align-items-center">
        <div class="row gy-4">
          <div class="col-lg-12 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
            </a>
            <p>أكاديمية سيجما لتعليم الكيمياء للثانوية العامة تحتوي علي كورسات شرح ومراجعه وامتحانات علي مادة الكيمياء لجميع المراحل الثانوية باحدث طرق الشرح والتدريس لفهم واستيعاب المادة العلمية</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/sigmainchemistry" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCjAL-2tF5bs3AzvUcsqEQnA?app=desktop&fbclid=IwAR2zI7cEGmZmnpAk57j1CYkQCjKWgHzLIbZIPrF2oLwJ6qC6VqfdrbOKi5Y" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sigma</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="#">Pikkod Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>




















