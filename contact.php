<?php
include "header.php";
?>
<div class="page-wrapper">
    <?php include "includes/navbar.php"; ?>

    <section class="breadcrumb-wrap bg-f" style="background-image: url('assets/images/tu/academic-block.jpg');">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-wrap pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-map-pin-fill"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p class="mb-0">Thal University Bhakkar, University Road, Bhakkar 30000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Phone</h5>
                            <p class="mb-0"><a href="tel:+924539200070">+92 453 9200070</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-mail-send-line"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p class="mb-0"><a href="mailto:info@tu.edu.pk">info@tu.edu.pk</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-external-link-line"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Admissions</h5>
                            <p class="mb-0"><a href="https://admissions.tu.edu.pk" target="_blank" rel="noopener">admissions.tu.edu.pk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="company-location">
        <div class="comp-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.615842262091!2d71.08962483995793!3d31.616984602111973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925d673afec5a7b%3A0x7fd011dcef7ef5c!2sThal%20University%20Bhakkar!5e0!3m2!1sen!2s!4v1770275269580!5m2!1sen!2s"></iframe>
        </div>
    </div>

    <div class="contact-form_wrap pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-40 style1">
                        <span>Reach Out</span>
                        <h2>Send a message</h2>
                        <p>This static version keeps the contact form layout in place. Until the dynamic version is connected, please use the official phone number or email for immediate assistance.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form class="form-wrap" id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Full Name*" id="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required placeholder="Email Address*" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Message.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn v1 d-block w-100">Form Integration Coming Soon</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/page-end.php"; ?>
