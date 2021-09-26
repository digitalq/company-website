<?php
include 'include/header.php';
?>

<style>
form .error {
  color: #ff0000;
}
</style>
    <!-- banner starts -->
    <div class="banner d-flex align-items-center light-grey-bg">

        <!-- Breadcrumb starts -->
        <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </div>
        </nav>


        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1>Contact</h1>
                    <p class="larger-txt">Learn how we helped our several clients grow in online <br>business.It will
                        give you an idea of our capabilities.</p>

                </div>
                <!-- End of .col-lg-5 -->

                <div class="col-lg-6">
                    <div class="img-container text-center text-lg-right">
                        <img src="assets/images/banner/contact3.svg" alt="Contact banner image" class="img-fluid">
                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-7 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .banner -->

    <section class="contact-us section-gap">
        <div class="container">
            <h2 class="section-title text-center">Contact Us</h2>
            <p class="larger-txt text-center">Thank you for visiting our web site.
Your feedback is important to us in order to provide the very best service possible.</p>
            <div class="quote-form-wrapper contact-form-wrapper text-center grid-wrapper">
                <form method="POST" id="contactForm" name="contactForm" class="quote-form text-center row" action="">
                    <div class="col-lg-6">
                        <input type="text" name="fname" id="fname" placeholder="Name">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="col-lg-6">
                        <input type="text" name="phone" id="phone" placeholder="Phone">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="website" id="website" placeholder="Website">
                    </div>
                    <div class="col-lg-12">
                        <textarea placeholder="Message" name="message" id="message"></textarea>
                        <button type="submit" class="custom-btn secondary-btn">Submit</button>
                        <div class="social-icons-wrapper d-flex justify-content-center">
                            <p>Follow us:</p>
                            <ul class="social-icons">
                                <li>
                                    <a href="http://www.facebook.com/dqindia" target="_blank" rel="noopener">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://twitter.com/dqindia" target="_blank" rel="noopener">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://youtube.com/digitalq" target="_blank" rel="noopener">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End of .social-icons -->
                        </div>
                        <!-- End of .social-icons-wrapper -->
                    </div>
                </form>
                <!-- End of .quote-form -->
            </div>
            <!-- End of .quote-form-wrapper -->
        </div>
    </section>

  <?php
  include 'include/location.php';
  include 'include/quotation.php';	
   include 'include/footer.php'
   ?>
   <!-- Change the "src" attribute according to your installation path -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Change the "src" attribute according to your installation path -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
// Wait for the DOM to be ready
jQuery(function() {
  // Initialize form validation on the contact form.
  // It has the name attribute "contact form"
  jQuery("form[name='contactForm']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fname: "required",
	  email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      phone: "required",
      website: "required",
      message: "required"
    },
    // Specify validation error messages
    messages: {
      fname: "Please enter your Name",
      phone: "Please enter your Phone No",
      website: "Please enter your Website URL",
      message: "Please enter your Message",
      email: "Please enter a valid Email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      console.log("Submitted!");	    
      form.submit();
    }
  });
});
	
</script>
<style>
form label {
  border: 0;
  margin-bottom: 3px;
  display: block;
  width: 100%;
  text-align : left;
  font-size : 15px;
}

form .error {
  color: #ff0000;
}
</style>

   <script language="javascript">
    document.title = "Contact Us :: Digital-Q | Implements Business Expectation";
</script>
