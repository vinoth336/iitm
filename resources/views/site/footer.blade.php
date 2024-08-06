<!-- Footer -->
<footer class="site-footer style-1" id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="widget widget_about">
                        <div class="footer-logo logo-white">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/iitm.svg') }}" alt=""></a>
                        </div>
                        <p>Joy of Giving to IITM is a fundraising platform intended to aid IIT Madras' journey towards global distinction in the fields of engineering education and research.</p>
                        <div class="dz-social-icon style-1">
                            <ul>
                                <li><a target="_blank" class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
                                <li><a target="_blank" class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
                                <li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a></li>
                                <li><a target="_blank" class="fab fa-youtube" href="https://youtube.com/"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Visit</h5>
                        <ul>
                            <li><a href="Akcel/HowItWorks.html">IIT MADRAS</a></li>
                            <li><a href="Akcel/AskAQuestion.html">CANADIAN FRIENDS OF IITM</a></li>
                            <li><a href="Akcel/ProjectStory.html">IITM FOUNDATION</a></li>
                            <li><a href="Akcel/Mission.html">SOCIITY</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Useful links</h5>
                        <ul>
                            <li><a href="Akcel/AboutUs.html">THE TEAM</a></li>
                            <li><a href="Akcel/Volunteer.html">CHAIR-PROFESSORSHIP-BROCHURE</a></li>
                            <li><a href="Akcel/HappyClients.html">ANNUAL GIVING REPORTS</a></li>
                            <li><a href="Akcel/Project.html">IT DOCUMENTS</a></li>
                            <li><a href="Akcel/ContactUs.html">WIRE TRANSFER DETAILS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Get in Touch with Us</h5>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>832  Thompson Drive, San Fransisco CA 94107, United States</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>394-091-3312</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>support@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <img src="assets/images/pattern/shape7.png" class="shape-1 move-2" alt="shape">
        <img src="assets/images/pattern/shape8.png" class="shape-2 move-2" alt="shape">
        <img src="assets/images/pattern/shape9.png" class="shape-3 move-2" alt="shape">

    </div>
    <!-- Footer Bottom Part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="text-center">
                <span class="copyright-text">Copyright © 2023 <a href="https://dexignzone.com/" target="_blank">DexignZone</a>. All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
<!-- Authentication Modal -->
<div class="modal fade modal-wrapper auth-modal" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!-- Login Your Account -->
        <div class="modal-content">
            <h2 class="title">Login Your Account</h2>
            <form action="https://akcel.w3itexpert.com/">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="reset-password">
                        <a class="btn-link collapsed" data-bs-toggle="collapse" href="#reset-password" role="button" aria-expanded="false" aria-controls="reset-password">Reset password?</a>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block">Login</button>
                </div>
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn facebook btn-block"><i class="fa-brands fa-facebook-f m-r10"></i>Log in with Facebook</a>
                </div>
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn google-plus btn-block"><i class="fa-brands fa-google m-r10"></i>Log in with Google</a>
                </div>
                <div class="sign-text">
                    <span>Don't have a Crowdfunding account? <a class="btn-link collapsed" data-bs-toggle="collapse" href="#sign-up" role="button" aria-expanded="false" aria-controls="sign-up">Sign up</a></span>
                </div>
            </form>
        </div>

        <!-- Reset Password -->
        <div class="modal-content collapse reset-password" id="reset-password">
            <h2 class="title">Reset password?</h2>
            <form>
                <div class="form-group password-icon-bx">
                    <i class="fa fa-lock"></i>
                    <p>Enter your email address associated with your account, and we'll email you a link to reset your password...</p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block">Send reset link</button>
                </div>
                <a data-bs-toggle="collapse" href="#reset-password" class="sign-text" role="button" aria-expanded="false" aria-controls="reset-password">Back</a>
            </form>
        </div>

        <!-- Sign Up Your Account -->
        <div class="modal-content collapse sign-up" id="sign-up">
            <h2 class="title">Sign Up Your Account</h2>
            <form action="https://akcel.w3itexpert.com/">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block">Sign Up</button>
                </div>
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn facebook btn-block"><i class="fa-brands fa-facebook-f m-r10"></i>Log in with Facebook</a>
                </div>
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn google-plus btn-block"><i class="fa-brands fa-google m-r10"></i>Log in with Google</a>
                </div>
                <div class="sign-text">
                    <span>Don't have a Crowdfunding account? <a class="btn-link collapsed" data-bs-toggle="collapse" href="#sign-up" role="button" aria-expanded="false" aria-controls="sign-up">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Choose a donation amount -->
<div class="modal fade modal-wrapper" id="modalDonate" tabindex="-1" role="dialog" aria-labelledby="modalDonate" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Choose a donation amount</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="flaticon-close"></i></button>
            </div>
            <div class="modal-body">
                <form action="https://akcel.w3itexpert.com/">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tag-donate style-1">
                                <div class="donate-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            $500
                                        </label>
                                    </div>
                                </div>
                                <div class="donate-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            $1000
                                        </label>
                                    </div>
                                </div>
                                <div class="donate-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            $2000
                                        </label>
                                    </div>
                                </div>
                                <div class="donate-categories">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            $5000
                                        </label>
                                    </div>
                                </div>
                                <p>Most Donors donate approx <span>$1000</span> to this Fundraiser</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Other Amount</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Other Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <div class="input-group">
                                    <input name="dzName" required="" type="text" class="form-control" placeholder="Jakob Bothman">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Email address</label>
                                <div class="input-group">
                                    <input name="dzEmail" required type="text" class="form-control" placeholder="info@mail.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <div class="input-group">
                                    <input required type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Pancard</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Pancard">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0 text-center">
                                <button name="submit" type="submit" value="Submit" class="btn btn-primary btn-block">Proceed To Pay</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset("assets/js/jquery.min.js") }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset("assets/vendor/wow/wow.js") }}"></script><!-- WOW JS -->
<script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset("assets/vendor/magnific-popup/magnific-popup.js") }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset("assets/vendor/counter/waypoints-min.js") }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset("assets/vendor/counter/counterup.min.js") }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script><!-- OWL-CAROUSEL -->
<script src="{{ asset("assets/js/dz.carousel.js") }}"></script><!-- OWL-CAROUSEL -->
<script src="{{ asset("assets/js/dz.ajax.js") }}"></script><!-- AJAX -->
<script src="{{ asset("assets/js/custom.js") }}"></script><!-- CUSTOM JS -->

<!-- PAGE JS -->
@stack('js')
</body>

<!-- Mirrored from akcel.w3itexpert.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Aug 2024 08:39:49 GMT -->
</html>
