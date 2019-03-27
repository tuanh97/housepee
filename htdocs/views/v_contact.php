<?php
require("v_header.php");
?>
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Liên hệ
  <small>Trụ sở công ty</small>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Home</a>
  </li>
  <li class="breadcrumb-item active">Contact</li>
</ol>

<!-- Content Row -->
<div class="row">
  <!-- Map Column -->
  <div class="col-lg-8 mb-4">
    <!-- Embedded Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4429.144419936105!2d105.8145605093225!3d21.01460633195173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6334be4dd7%3A0x428980328a48dc0d!2sEpiserver+Vietnam!5e0!3m2!1svi!2s!4v1551686345563" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  <!-- Contact Details Column -->
  <div class="col-lg-4 mb-4">
    <h3>Thông tin liên lạc</h3>
    <p>
      3481 Melrose Place
      <br>Beverly Hills, CA 90210
      <br>
    </p>
    <p>
      <abbr title="Phone">P</abbr>: (123) 456-7890
    </p>
    <p>
      <abbr title="Email">E</abbr>:
      <a href="mailto:name@example.com">name@example.com
      </a>
    </p>
    <p>
      <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
  </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
  <div class="col-lg-8 mb-4">
    <h3>Send us a Message</h3>
    <form name="sentMessage" id="contactForm" novalidate>
      <div class="control-group form-group">
        <div class="controls">
          <label>Full Name:</label>
          <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Phone Number:</label>
          <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Email Address:</label>
          <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Message:</label>
          <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
        </div>
      </div>
      <div id="success"></div>
      <!-- For success/fail messages -->
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
    </form>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
<?php
require("v_footer.php");
?>
