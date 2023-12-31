@extends('layouts.main')
@section('content')
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Components</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <h3><i class="fa fa-angle-right"></i> Contact Form</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h4 class="title">Contact Form</h4>
        <div id="message"></div>
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

          <div class="form-group">
            <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
            <div class="validate"></div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>

          <div class="loading"></div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>

          <div class="form-send">
            <button type="submit" class="btn btn-large btn-primary">Send Message</button>
          </div>

        </form>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6">
        <h4 class="title">Contact Details</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <ul class="contact_details">
          <li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
          <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
          <li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
        </ul>
        <!-- contact_details -->
      </div>
    </div>
    <!-- /row -->
  </section>

@endsection
