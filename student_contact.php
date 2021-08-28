<?php include "header.php" ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Student Query</li>
        </ol>
        <h2>Student Query</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><b>Head Office:</b> <br> 2nd Floor, Apsara Arcade, Near Gate-7 Karol Bagh Metro Station, 1/8 b, Pusa Road, Karol Bagh, New Delhi – 110005</p>
              <br>
              <p><b>Old Address:</b> <br> First Floor, Sri Narayana Vidyalaya, Hinkal, Mysore, Karnataka- 17</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <a href="mailto:redefquery@gmail.com">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>redefquery@gmail.com</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4">
            <a href="tel:9620206040">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>For new Queries</h3>
                <p>+91-9620206040</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4">
            <a href="tel:8700927833">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Registered students</h3>
              <p>+91-8700927833</p>
            </div>
            </a>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6">
           <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=apsara%20arcade&amp;t=m&amp;z=11&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" style=" width: 100%; height: 100%;"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php include "footer.php" ?>