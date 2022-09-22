<!DOCTYPE html>
<html lang="en">

<head>
    <!--META INFO -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#ffcd05">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="DIGITALQ" />
<meta name="twitter:site" content="@DIGITALQ" />
<meta name="twitter:creator" content="@DIGITALQ" />
<title>DigitalQ Information Services | Implements Business Expectations</title>
<link rel="canonical" href="https://digitalq.co.in/" />
<link rel="apple-touch-icon" href="/assets/images/favicon.png" />
<link rel="shortcut icon" href="/assets/images/favicon.png" />
<!-- check noindex,nofollow tag -->
<meta name="coverage" content="worldwide">
<meta name="Content-Language" content="english">
	<meta name="robots" content="index,follow">
<meta name="title" content="DigitalQ | Implements Business Expectations">
<meta name="description" content="DigitalQ - One Stop Solution for all your IT needs, we are providing Cheap and Best Cloud Services for Startups and SMEs, we offer web design, web and mobile application development, customizing opensource applications, Vulnerability Assessment Services, Digital Marketing and Branding">
<!-- Common OG -->
<meta property="og:type" content="website" />
<meta property="og:site_name" content="DIGITALQ" />
<meta property="og:url" content="https://digitalq.co.in">
<meta property="og:title" content="DigitalQ Information Services | Implements Business Expectations" />
<meta property="og:description" content="We provides end to end solution from application development to branding for startups and SMEs" />
<meta property="og:image" content="https://digitalq.co.in/assets/images/dq-tfb-img.png" />
<meta name="keywords" content="DigitalQ, Outsourcing Hosting Support, Cloud Assessment, Network Vulnerability Assessment, eCommerce, Retail, Opensource Customization, Chatbots, Restaurant Chatbot, Cheap and Best Cloud Solutions" />

<!-- Twitter OG -->
<meta name="twitter:site" content="@DIGITALQ" />
<meta name="twitter:creator" content="@DigitalQ" />
<meta name="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://digitalq.co.in">
<meta name="twitter:title" content="DigitalQ Information Services | Implements Business Expectations" />
<meta name="twitter:description" content="We provides end to end solution from application development to branding for startups and SMEs." />
<meta name="twitter:image" content="https://digitalq.co.in/assets/images/dq-tfb-img.png" />

<?php
include 'include/header.php';
?>

    <!-- banner starts -->
    <div class="banner d-flex align-items-center light-grey-bg">

        <!-- Breadcrumb starts -->
        <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol>
            </div>
        </nav>


        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1>Careers</h1>
                    <p class="larger-txt">Learn how we helped our several clients grow in online <br>business.It will
                        give you an idea of our capabilities.</p>

                </div>
                <!-- End of .col-lg-5 -->

                <div class="col-lg-6">
                    <div class="img-container text-center text-lg-right">
                        <img src="assets/images/banner/careers.svg" alt="Careers banner image" class="img-fluid">
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
            <h2 class="section-title text-center">Why Work Here?</h2>
            <p class="larger-txt text-center">We think we’ve got the best team in the world, but you might be the next greatest thing to happen to us.</p>
            <div class="quote-form-wrapper contact-form-wrapper text-center grid-wrapper">
              
                   
                    <div class="col-lg-12">
                        
                        
                     <a href="careers.php#" class="custom-btn secondary-btn" data-toggle="modal"
                            data-target="#quote-modal">Apply</a>
                       
                    </div>
               
                <!-- End of .quote-form -->
            </div>
            <!-- End of .quote-form-wrapper -->
        </div>
    </section>
	<?php

     foreach ($_POST as $key => $value)
    $message .= "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";

    //mail('support@digitalqits.com', 'Career - Apply', $message);

     ?>

  
    <!-- Quote modal starts
    ================================= -->
    <div class="modal fade full-width-modal quote-modal" id="quote-modal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content white-bg">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <!-- End of .close -->
                </div>
                <!-- End of .modal-header -->

                <div class="modal-body d-flex align-items-center justify-content-center text-center">
                    <div class="quote-form-wrapper text-center">
                        <h3>We’d love to talk about working together.</h3>
                        <form method="POST" class="quote-form text-center row" action="careers.php">
                            <div class="col-lg-6">
                                <input type="text" name="fname" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" placeholder="Email">
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="linked_url" placeholder="LinkedIn URL">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message" name="message"></textarea>
				<button type="submit" class="custom-btn secondary-btn w-100">Submit</button>
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
                                            <a href="http://youtube.com/dq.india" target="_blank" rel="noopener">
                                                <i class="fab fa-instagram"></i>
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
                <!-- End of .modal-body -->
            </div>
            <!-- End of .modal-content -->
        </div>
        <!-- End of .modal-dialog -->
    </div>
    <!-- End of .quote-modal -->

   <?php 
   include 'include/footer.php'
   ?>
   <script language="javascript">
    document.title = "Careers :: Digital-Q | Implements Business Expectation";
</script>
