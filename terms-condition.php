<?php
include "header.php";
?>
<div class="page-wrapper">
    <?php include "includes/navbar.php"; ?>

    <section class="breadcrumb-wrap bg-f br-bg-1">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Terms & Conditions</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Terms & Conditions</li>
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
                        <span>Website Use</span>
                        <h2>General terms for using this university website</h2>
                        <p>These terms are intended for the current static version of the Thal University Bhakkar website and may be updated as more online services are added.</p>
                    </div>
                    <div class="accordion" id="termsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="termsOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#termsCollapseOne" aria-expanded="true" aria-controls="termsCollapseOne">
                                    Informational purpose
                                </button>
                            </h2>
                            <div id="termsCollapseOne" class="accordion-collapse collapse show" aria-labelledby="termsOne" data-bs-parent="#termsAccordion">
                                <div class="accordion-body">
                                    The website is provided primarily to present university information, campus details, academic structure, and guidance links to official services.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="termsTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#termsCollapseTwo" aria-expanded="false" aria-controls="termsCollapseTwo">
                                    Accuracy and updates
                                </button>
                            </h2>
                            <div id="termsCollapseTwo" class="accordion-collapse collapse" aria-labelledby="termsTwo" data-bs-parent="#termsAccordion">
                                <div class="accordion-body">
                                    The university may revise content, notices, or links as institutional information changes. Users should verify admission, career, scholarship, and portal-specific instructions from the linked official services.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="termsThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#termsCollapseThree" aria-expanded="false" aria-controls="termsCollapseThree">
                                    External services
                                </button>
                            </h2>
                            <div id="termsCollapseThree" class="accordion-collapse collapse" aria-labelledby="termsThree" data-bs-parent="#termsAccordion">
                                <div class="accordion-body">
                                    Admissions portals, careers systems, and other external university services may operate under their own rules, requirements, and technical conditions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="termsFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#termsCollapseFour" aria-expanded="false" aria-controls="termsCollapseFour">
                                    Acceptable use
                                </button>
                            </h2>
                            <div id="termsCollapseFour" class="accordion-collapse collapse" aria-labelledby="termsFour" data-bs-parent="#termsAccordion">
                                <div class="accordion-body">
                                    Users should not misuse the website, interfere with its operation, attempt unauthorized access, or use university content in misleading ways.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="termsFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#termsCollapseFive" aria-expanded="false" aria-controls="termsCollapseFive">
                                    Contact
                                </button>
                            </h2>
                            <div id="termsCollapseFive" class="accordion-collapse collapse" aria-labelledby="termsFive" data-bs-parent="#termsAccordion">
                                <div class="accordion-body">
                                    For clarification regarding university information shown on this site, please contact Thal University Bhakkar directly through the official contact details listed on the contact page.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/tu/admin-block.jpg" alt="Administrative block of Thal University Bhakkar">
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/page-end.php"; ?>
