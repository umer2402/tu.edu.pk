<?php
include "header.php";
?>
    <!-- page wrapper Start -->
    <div class="page-wrapper">
        <?php
           include "includes/navbar.php";
       ?>
        <!-- Breadcrumb start -->
        <section class="breadcrumb-wrap bg-f br-bg-2">
            <div class="overlay op-6 bg-black"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                        <div class="breadcrumb-title">
                            <h2>Course Details</h2>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">Home </a></li>
                                <li><a href="course.html">Course </a></li>
                                <li>Course Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb  end -->
        <!-- Course Details Section start -->
        <section class="course-details-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-8">
                        <div class="course-details">
                            <div class="course-details-img">
                                <img src="assets/img/course/single-course-1.jpg" alt="Image">
                            </div>
                            <ul class="course-details-meta">
                                <li><i class="las la-clock"></i>4 Hours</li>
                                <li><i class="las la-graduation-cap"></i>45 Students</li>
                                <li><i class="lar la-calendar"></i>26th Jun,<script src="assets/js/fslightbox.js"></script></li>
                            </ul>
                            <ul class="nav nav-tabs course-tablist" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">Description</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">Lectures</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_3" type="button" role="tab">Instructor</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_4" type="button" role="tab">Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content course-tab-content">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                                    <h5 class="mt-0">Students Do Not Learn Much Just Sitting in Classes Listening to Teachers Memorizing Prepackaged Assignments.</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    <h5>What You Will Learn?</h5>
                                    <ul class="course-details-list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elitdunt.</li>
                                        <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt.</li>
                                        <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li>Duis ac tellus et risus vulputate vehicula Donec lobortis risus a elit.</li>
                                        <li>Nulla gravida orci a odio nullam varius turpis et commodo pharetra.</li>
                                    </ul>
                                    <h5 class="course-details-title">Requirements</h5>
                                    <ul class="course-details-list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elitdunt.</li>
                                        <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt.</li>
                                        <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li>Duis ac tellus et risus vulputate vehicula Donec lobortis risus a elit.</li>
                                        <li>Nulla gravida orci a odio nullam varius turpis et commodo pharetra.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_2" role="tabpanel">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Internation Business
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body  lecture-accordion">
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 01</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>20 min</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 02</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>30 min</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 03</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>35 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Financial Accounting
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body  lecture-accordion">
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 01</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>20 min</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 02</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>30 min</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 03</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>35 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Business Communication
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body  lecture-accordion">
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 01</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>20 min</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 02</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>30 min</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-item">
                                                        <div class="lecture-name">
                                                            <p><i class="las la-file-alt"></i>Lecture 03</p>
                                                        </div>
                                                        <div class="lecture-time">
                                                            <span>35 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_3" role="tabpanel">
                                    <div class="row justify-content-cetner">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="team-member">
                                                <div class="team-member-img">
                                                    <img src="assets/img/team/team-member-1.jpg" alt="Image">
                                                    <ul class="social-profile style1">
                                                        <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                                        <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                                        <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-member-info">
                                                    <h4>Tony Stark</h4>
                                                    <p>Founder & CEO</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="team-member">
                                                <div class="team-member-img">
                                                    <img src="assets/img/team/team-member-2.jpg" alt="Image">
                                                    <ul class="social-profile style1">
                                                        <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                                        <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                                        <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-member-info">
                                                    <h4>Mark Toen</h4>
                                                    <p>Co-Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_4" role="tabpanel">
                                    <div class="post-comment-wrap mb-0 review-box">
                                        <div class="comment-item">
                                            <div class="comment-author_img">
                                                <img src="assets/img/blog/avatar-1.jpg" alt="Image">
                                            </div>
                                            <div class="comment-author_text">
                                                <div class="comment-author_info">
                                                    <h6>Anthony J. Ruiz</h6>
                                                    <div class="course-rating">
                                                        <ul>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-line"></i> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            </div>
                                        </div>
                                        <div class="comment-item">
                                            <div class="comment-author_img">
                                                <img src="assets/img/blog/avatar-2.jpg" alt="Image">
                                            </div>
                                            <div class="comment-author_text">
                                                <div class="comment-author_info">
                                                    <h6>Andrea F. Kelley</h6>
                                                    <div class="course-rating">
                                                        <ul>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-fill"></i></li>
                                                            <li> <i class="ri-star-line"></i> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details-widget sidebar-box">
                            <ul>
                                <li>
                                    <p><i class="las la-user-graduate"></i>Students</p>
                                    <p>45</p>
                                </li>
                                <li>
                                    <p><i class="las la-file-alt"></i>Lectures</p>
                                    <p>45</p>
                                </li>
                                <li>
                                    <p><i class="las la-clock"></i>Duration</p>
                                    <p>45</p>
                                </li>
                                <li>
                                    <p><i class="las la-question-circle"></i>Quiz</p>
                                    <p>45</p>
                                </li>
                                <li>
                                    <p><i class="las la-check-square"></i>Assesment</p>
                                    <p>45</p>
                                </li>
                            </ul>
                        </div>
                        <div class="course-enroll-widget sidebar-box">
                            <div class="single-course-price">
                                $45.00
                            </div>
                            <a href="login.html" class="btn v3">Enroll</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Details Section end -->
        <!-- Related Course Start -->
        <section class="related-course pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title style1 text-center mb-40">
                            <span>Our Popular Course</span>
                            <h2>Related Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-9.jpg" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$35.50</span>
                                <h3><a href="course-details.html">Diploma in Teaching skills:
                                        Educators</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>4 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>13 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">4 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-10.jpg" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$55.50</span>
                                <h3><a href="course-details.html">Diploma in Teaching skills:
                                        Educators</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>9 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>23 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">10 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-11.jpg" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$95.50</span>
                                <h3><a href="course-details.html">Information About UI/UX
                                        Design</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>10 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>22 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">12 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Related Course end -->
        <!-- Footer  start -->
        <footer class="footer-wrap style1 bg-heath">
            <div class="footer-top pt-100 pb-70">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png" alt="Image"></a>
                                <p>Nullam varius turpis commodo pharetra est eros bibendum elit nec.</p>
                                <h4 class="footer-widget-title">Newsletter</h4>
                                <form action="#" class="newsletter-wrap">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email Address ..">
                                        <button type="submit" class="submit-btn"> <i class="lab la-telegram-plane"></i></button>
                                    </div>
                                </form>
                                <p>We Never Spam!</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget ml-30">
                                <h4 class="footer-widget-title">Support</h4>
                                <ul class="footer-menu">
                                    <li><a href="faq.html">Help(FAQ)</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="about.html">About Ecour</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-condition.html">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Link</h4>
                                <ul class="footer-menu">
                                    <li><a href="course.html">Photography</a></li>
                                    <li><a href="course.html">Ecour Professional</a></li>
                                    <li><a href="course.html">Web Design</a></li>
                                    <li><a href="course.html">Graphics Design</a></li>
                                    <li><a href="course.html">Computer Science</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Contact Us</h4>
                                <ul class="footer-contact-address">
                                    <li><a href="tel:999762236473"> <i class="ri-phone-line"></i> +999 762 23 6473</a></li>
                                    <li> <i class="ri-mail-send-fill"></i> <a href="mailto:info@ecour.com">info@ecour.com</a></li>
                                    <li> <i class="ri-earth-fill"></i> <a href="https://www.ecour.com">www.ecour.com</a></li>
                                </ul>
                                <div class="share-on">
                                    <span>Follow Us :</span>
                                    <ul class="social-profile">
                                        <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                        <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                                        <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                        <li><a target="_blank" href="https://instagram.com"> <i class="ri-instagram-line"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-8">
                            <div class="copyright-text">
                                <p><span class="la la-copyright"></span>Ecour. All Rights Reserved By <a href="https://themeforest.net/user/hibootstrap/portfolio">Hibootstrap</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer  end -->
    </div>
    <!-- Page wrapper end -->

    <!-- Back-to-top button start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="las la-arrow-up"></i></a>
    <!-- Back-to-top button end -->

    <!--====== jquery js ======-->
    <script src="assets/js/jquery.min.js"></script>
    <!--====== jquery UI js ======-->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <!--====== Swiper js ======-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--====== Fslightbox js ======-->
    <script src="assets/js/fslightbox.js"></script>
    <!--====== Countdown js ======-->
    <script src="assets/js/countdown.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
</body>
</html>