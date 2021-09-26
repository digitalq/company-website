<!-- Quote modal starts
    ================================= -->
<div class="modal fade full-width-modal quote-modal" id="quote-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h3>Contact us</h3>
                    <form method="POST" class="quote-form text-center row" action="index.php">
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
                            <input type="text" name="website" placeholder="Website">
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
                                <a href="https://ca.linkedin.com/company/digitalq-information-services-pvt-ltd" target="_blank" rel="noopener">
                                    <i class="fab fa-linkedin"></i>
                                </a>
								</li>
								<li>
                                <a href="https://www.instagram.com/dq.india" target="_blank" rel="noopener">
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