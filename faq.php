<?php
include "header.php";
?>
<div class="page-wrapper">
    <?php include "includes/navbar.php"; ?>

    <section class="breadcrumb-wrap bg-f" style="background-image: url('assets/images/tu/library-stacks.jpg');">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Frequently Asked Questions</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-wrap pt-100 pb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="section-title style1 mb-40">
                        <span>Need Help?</span>
                        <h2>Quick answers for visitors and applicants</h2>
                        <p>These answers are designed for the current static version of the website. For cycle-specific notices such as merit dates, test schedules, or portal issues, please check the relevant official portal.</p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I apply for admission?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Undergraduate admissions are handled through the official TU admissions portal. Visit the admissions page on this site or go directly to admissions.tu.edu.pk for the latest notices, deadlines, and portal instructions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Which faculties and departments does Thal University have?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Thal University has five faculties: Computing, Sciences, Management & Administrative Sciences, Arts & Humanities, and Social Sciences. Together they include 18 departments.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are scholarships available?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. The university provides access to scholarships and financial assistance routes, including merit-based and need-based opportunities. Scholarship-specific details may be announced separately.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Does the university offer hostel and campus facilities?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The university provides core facilities that include classrooms, IT labs, science labs, library support, sports activity spaces, a Jamia Masjid, and hostel-related campus support as described on the university information pages.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Where can I find careers or job information?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Job announcements and related instructions are published through the official careers portal. Use the Careers link in the navigation for the latest openings and application guidance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How can I contact the university directly?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can contact Thal University Bhakkar by phone at +92 453 9200070 or by email at info@tu.edu.pk. The contact page also includes the campus map and admissions link.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/tu/jamia-masjid.jpg" alt="Jamia Masjid at Thal University Bhakkar">
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/page-end.php"; ?>
