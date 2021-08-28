<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 4 Sidebar Menu Responsive with Sub menu  Create Responsive Side Navigation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
 
 body {
  min-height: 100vh;
  overflow-x: hidden;
}
 
.filterDiv {

    float: left;
    color: #ffffff;
    text-align: center;
    margin: 10px;
    display: none;
    padding: 15px 15px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);
    border-radius: 20px;
    background: white;
    transition: all ease-in-out 0.3s;
    /* height: 100%; */
    /* width: -webkit-fill-available; */
    color: black;

}

#rounded_btn{
  border-radius: 20px;
}

#myBtnContainer{

  padding: 10px;
  overflow-x: scroll;
  white-space: nowrap;

}

.show {
  display: block;
}

.container {
/*  margin-top: 20px;*/
  overflow: hidden;
}

#heading_properties{

  font-size: 20px !important;
  color: black !important;
  font-weight: 700 !important;

}

#paragraph_properties{

  font-size: 14px;
  color: black;
  
}

#button_properties{

    border-radius: 25px;
    background-color: white;
    color: black;
    border: 2px;
    box-shadow: 0px 2px 15px rgb(0 0 0 / 15%);

}

.background_properties{

    background-image: url("http://synopsisias.in/wp-content/uploads/2021/04/boy-3653385_1920.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-clip: content-box;
    padding: inherit;

}


.background_properties_1{

    background-image: url("http://synopsisias.in/wp-content/uploads/2021/05/phone.jpg");
    background-position: 0px -296px;
    background-repeat: no-repeat;
    background-size: 100% auto;
    background-clip: content-box;

}

.background_overlay{

/*    background-color: #000000;
    opacity: 0.5;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    padding: 15%;*/
}
 .vertical-nav {
    min-width: 17rem;
    width: 17rem;
    height: 100vh;
    position: fixed;
    top: 100px;
    left: 0;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s;
    overflow-y: scroll;
}

.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
} 

#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}

.text-gray {
  color: #aaa;
}

.nav-link{
    text-transform: capitalize;
}

.nav-link:hover{
    background:#f3f2f2;
}

.text-primary{
    color:#7579e7 !important;
}

@media (max-width: 1300px) {
  #sidebar {
    margin-left: -17rem;
    z-index: 100;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
/*    margin-left: 17rem;
    width: calc(100% - 17rem);*/
    width: 100%;
    margin: 0;
  }
}
</style>

</head>
<body>
 
<?php include "header.php"; ?>

<!-- Page content holder -->
<div class="page-content" id="content">
  <div id="sticky_menu">
    <center>
    <a href="#General_Studies" id="sticky_links">General Studies</a>
    <a href="#Geography_Optional" id="sticky_links">Geography Optional</a>
    <a href="#Free_Content" id="sticky_links">Free Content</a>  
    <a href="#Monthly_Magazines" id="sticky_links">Monthly Magazines</a>
    <a href="#Free_Video_Lectures" id="sticky_links">Free Video Lectures</a>
    </center>
  </div>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
<!--   <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      
      <div class="media-body">
        <h4 class="m-0">Olivia</h4>
        <p class="font-weight-normal text-muted mb-0">Web developer</p>
      </div>
    </div>
  </div> -->

  <!-- <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p> -->

  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">
    <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold" href="#" data-toggle="collapse" data-target="#a" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-area-chart ml-3 mr-3 text-primary fa-fw"></i>
            <span>Miscellaneous</span>
        </a>
        <div id="a" class="" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <ul class="bg-white rounded" style="list-style-type:none;">
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">1. Issues related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">2. Central - Related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">3. Legislature</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">4. Judiciary</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">5. Reservation Issues</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">6. Governance</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">7. Miscellaneous</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed text-dark font-weight-bold" href="#" data-toggle="collapse" data-target="#b"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-bar-chart ml-3 mr-3 text-primary fa-fw"></i>
            <span>Miscellaneous</span>
        </a>
        <div id="b" class="" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <ul class="bg-white py-2 collapse-inner rounded" style="list-style-type:none;">
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">1. Issues related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">2. Central - Related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">3. Legislature</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">4. Judiciary</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">5. Reservation Issues</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">6. Governance</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">7. Miscellaneous</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed text-dark font-weight-bold" href="#" data-toggle="collapse" data-target="#c"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-pie-chart ml-3 mr-3 text-primary fa-fw"></i>
            <span>Miscellaneous</span>
        </a>
        <div id="c" class="" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <ul class="bg-white py-2 collapse-inner rounded" style="list-style-type:none;">
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">1. Issues related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">2. Central - Related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">3. Legislature</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">4. Judiciary</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">5. Reservation Issues</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">6. Governance</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">7. Miscellaneous</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed text-dark font-weight-bold" href="#" data-toggle="collapse" data-target="#d"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-picture-o ml-3  mr-3 text-primary fa-fw"></i>
            <span>Miscellaneous</span>
        </a>
        <div id="d" class="" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <ul class="bg-white py-2 collapse-inner rounded" style="list-style-type:none;">
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">1. Issues related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">2. Central - Related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">3. Legislature</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">4. Judiciary</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">5. Reservation Issues</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">6. Governance</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">7. Miscellaneous</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed text-dark font-weight-bold" href="#" data-toggle="collapse" data-target="#e"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-line-chart ml-3 mr-3 text-primary fa-fw"></i>
            <span>Miscellaneous</span>
        </a>
        <div id="e" class="" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <ul class="bg-white py-2 collapse-inner rounded" style="list-style-type:none;">
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">1. Issues related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">2. Central - Related to Constitution</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">3. Legislature</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">4. Judiciary</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">5. Reservation Issues</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">6. Governance</a></li>
                <li class="collapse-item" style="white-space: normal;" onclick="loading_pages()"><a href="#">7. Miscellaneous</a></li>
            </ul>
        </div>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->

 <div id="General_Studies"></div>
  <main id="main General_Studies">
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container" >
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Free Resources</li>
        </ol>
        <h2>Free Resources</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
<div id="Geography_Optional"></div>
     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>General Studies</h2>
          <p>Free UPSC Material, book Summaries, e-books etc. to replace bulky books and to consolidate syllabus.</p>
          <br>
        </div>

        <div class="row">
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Indian Polity</h3>
                <p>by M. Laxmikant 6th Edition</p>
                <br>
                <a href="https://synopsisias.in/wp-content/uploads/2021/08/Polity-ch-3-76_.pdf" id="rounded_btn" target="_blank" class="btn btn-primary">Download</a>
              </div>
            </center>
          </div>

          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Science and Technology</h3>
                <p>First Edition by Krishna Sir</p>
                <br>
                <a href="#" class="btn btn-primary disabled" id="rounded_btn">Download</a>
              </div>
            </center>
          </div>
 
          <!-- <div class="col-lg-3">
            <center>
              <div class="testimonial-item">
                <h3>Indian Polity</h3>
                <p>
                  by M. Laxmikant 6th Edition
                </p>
                <br>
                <a href="#" class="btn btn-primary disabled">Download</a>
              </div>
            </center>
          </div>

          <div class="col-lg-3">
            <center>
              <div class="testimonial-item">
                <h3>Indian Polity</h3>
                <p>
                  by M. Laxmikant 6th Edition
                </p>
                <br>
                <a href="#" class="btn btn-primary disabled">Download</a>
              </div>
            </center>
          </div> -->
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Geography Optional</h2>
          <p>Free UPSC Material, redefined Previous Year Questions, book Summaries, e-books etc. to replace bulky books and to consolidate syllabus.</p>
          <br>

        </div>

        <div class="row">
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Previous Year Question <br> (1979-2020)</h3>
                <p>by Krishna Sir <br> Redefined Syllabus and PYQs</p>
                <br>
                <a href="https://synopsisias.in/wp-content/uploads/2021/08/Geography-Optional-UPSC-PYQs-1979-2020-V-2.1-Upload.pdf" id="rounded_btn" target="_blank" class="btn btn-primary">Download</a>
              </div>
            </center>
                        <div id="Free_Content"></div>
          </div>
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Geomorphology</h3>
                <p>by Savindra Singh <br> Book Summary will be available for Mains 2021 Batch for Free</p>
                <br>
                <a href="#" class="btn btn-primary disabled" id="rounded_btn">Download</a>
              </div>
            </center>
          </div>
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Geomorphology Model Answers</h3>
                <p>
                  Handwritten notes by Krishna Sir <br>
                  Use these notes to learn how to write in exam hall in real time
                </p>
                <br>
                <a href="https://synopsisias.in/wp-content/uploads/2021/08/Geomorphology-geography-optional-handwritten-model-answers-by-Krishna_-learn-how-to-write-in-exam-mode.pdf" id="rounded_btn" target="_blank"  class="btn btn-primary">Download</a>
              </div>
            </center>
          </div>
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Biogeography</h3>
                <p>
                  by Savindra Singh & Rupa <br> Made Simple Book Summary will be available for Mains 2021 Batch for Free
                </p>
                <br>
                <a href="#" class="btn btn-primary disabled" id="rounded_btn">Download</a>
              </div>
            </center>
          </div>
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Environmental Geography</h3>
                <p>
                  by Savindra Singh & Rupa <br> Made Simple Book Summary will be available for Mains 2021 Batch for Free
                </p>
                <br>
                <a href="#" class="btn btn-primary disabled" id="rounded_btn">Download</a>
              </div>
            </center>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Free Content by Synopsis IAS</h2>
          <p>Free UPSC Material, redefined Previous Year Questions, book Summaries, e-books etc. to replace bulky books and to consolidate syllabus.</p>
          <br>

        </div>
     <div id="Monthly_Magazines"></div>
        <div class="row">
          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>GS1 History Previous Year Question <br> (1979-2020)</h3>
                <p>by Krishna Sir <br> Redefined Syllabus and PYQs</p>
                <br>
                <a href="https://synopsisias.in/wp-content/uploads/2021/08/GS-1-History-PYQs-V-2.11-Upload.pdf" id="rounded_btn" target="_blank" class="btn btn-primary">Download</a>
              </div>
            </center>
          </div>

          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>Other GS Previous Year Question <br> (1979-2020)</h3>
                <p>by Krishna Sir <br> Redefined Syllabus and PYQs</p>
                <br>
                <a href="#" class="btn btn-primary disabled" id="rounded_btn">Download</a>
              </div>
            </center>
          </div>

          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>20-20 and 50-50 Series</h3>
                <p>
                 Free Content PDF
                </p>
                <br>
                <a href="https://drive.google.com/drive/folders/14676xTe_FLFlyEW1ijYQZoH7YU6VkL0l" id="rounded_btn" target="_blank"  class="btn btn-primary">Download</a>
              </div>
            </center>
          </div>

          <div class="col-lg-3 p-2">
            <center>
              <div class="testimonial-item">
                <h3>My Essays</h3>
                <p>
                  (My Score: 138, 149, 150 in Three Attempts)
                </p>
                <br>
                <a href="https://drive.google.com/drive/folders/1FmLK69GhLoc7NhtnflRhcRqUxFGs843Z" id="rounded_btn" target="_blank" class="btn btn-primary">Download</a>
              </div>
            </center>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->


    <!-- ======= About Section ======= -->
<!--     <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
<!--     <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Clients</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
              <h3>Emily Harison</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> --><!-- End Testimonials Section -->

<div class="section-title">
  <h2>Monthly Magazines</h2>
  <p class="pt-3 pb-3">Monthly compilation of The Hindu and Indian Express in 5 Minutes Course. This is the most precise content for newspaper notes for UPSC for Prelims, Mains, and Interviews.</p>
</div>
<div class="container" id="myBtnContainer">
  <button class="btn btn-primary active" id="button_properties" onclick="filterSelection('2021_Current_Affairs_for_UPSC')">2021 Current Affairs for UPSC</button>
  <button class="btn btn-primary active" id="button_properties" onclick="filterSelection('2020_Current_Affairs_for_UPSC')">2020 Current Affairs for UPSC</button>
</div>
<div class="container ">
  <div class="row">
  <div class="container">
     <div id="Free_Video_Lectures"></div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="https://synopsisias.in/wp-content/uploads/2021/04/January-Monthly-Current-Affairs-2021.pdf" id="rounded_btn" target="_blank">January 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="https://synopsisias.in/wp-content/uploads/2021/04/February-Monthly-Current-Affairs-2021.pdf" id="rounded_btn" target="_blank">February 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="https://synopsisias.in/wp-content/uploads/2021/04/March-Monthly-Current-Affairs-2021.pdf" id="rounded_btn" target="_blank">March 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="https://synopsisias.in/wp-content/uploads/2021/08/April-Monthly-Current-Affairs-2021.pdf" id="rounded_btn" target="_blank">April 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="#" id="rounded_btn"  target="_blank">May 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="https://synopsisias.in/wp-content/uploads/2021/08/June-Monthly-Current-Affairs-2021.pdf" id="rounded_btn" target="_blank">June 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="#" id="rounded_btn" target="_blank">July 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2021_Current_Affairs_for_UPSC" >
    <center>
        <a href="#" id="rounded_btn" target="_blank">August 2021</a>
    </center> 
  </div>
  <div class="filterDiv 2020_Current_Affairs_for_UPSC" >
    <center>
        <a href="https://synopsisias.in/wp-content/uploads/2021/04/December-Monthly-Current-Affairs-2020.pdf" id="rounded_btn" target="_blank">December 2020</a>
    </center> 
  </div>
</div>
</div>
</div>

<script>

filterSelection("2021_Current_Affairs_for_UPSC")

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all"){ 
  c = "";
  }
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<br>

<section id="about" class="about background_properties pt-5" >
  <div class="container-fluid pb-5 pt-5 background_overlay">
    <div class="section-title text-center text-white">
      <h2>Join us for Free</h2>
    </div>
    <div class="row">
      <center>
      <div class="col-lg-12 content pt-4 text-white">
        <p style="font-size: initial;">
         Follow us at YouTube, which provides you the Best YouTube Channel for IAS Preparation. <br><br>
         Noone can even match the quality of Synopsis IAS when it comes a free and Best IAS coaching in India.
         <br><br>
        </p>
        <a class="btn btn-primary text-white" id="rounded_btn"  target="_blank" href="https://www.youtube.com/synopsisias">Subscribe to our Youtube Channel</a>
      </div>
    </center>
    </div>
  </div>
</section>
</main><!-- End #main -->

  <?php include "footer.php"; ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

