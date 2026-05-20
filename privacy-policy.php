<?php
include "header.php";
?>
<div class="page-wrapper">
    <?php include "includes/navbar.php"; ?>

    <section class="breadcrumb-wrap bg-f tu-br-privacy">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Privacy Policy</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Privacy Policy</li>
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
                        <span>Website Policy</span>
                        <h2>How this static website handles information</h2>
                        <p>This website currently serves as a static informational platform for Thal University Bhakkar. The privacy points below explain the general approach used for this version of the site.</p>
                    </div>
                    <div class="accordion" id="privacyAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="privacyOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseOne" aria-expanded="true" aria-controls="privacyCollapseOne">
                                    Information you share
                                </button>
                            </h2>
                            <div id="privacyCollapseOne" class="accordion-collapse collapse show" aria-labelledby="privacyOne" data-bs-parent="#privacyAccordion">
                                <div class="accordion-body">
                                    If you choose to contact the university through email, forms, or future portal features, the details you provide may be used only for responding to your request or delivering the relevant university service.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="privacyTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseTwo" aria-expanded="false" aria-controls="privacyCollapseTwo">
                                    Technical and usage data
                                </button>
                            </h2>
                            <div id="privacyCollapseTwo" class="accordion-collapse collapse" aria-labelledby="privacyTwo" data-bs-parent="#privacyAccordion">
                                <div class="accordion-body">
                                    Like most websites, technical data such as browser type, device information, and access timing may be collected by hosting, analytics, or security services to help maintain performance and reliability.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="privacyThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseThree" aria-expanded="false" aria-controls="privacyCollapseThree">
                                    External portals and links
                                </button>
                            </h2>
                            <div id="privacyCollapseThree" class="accordion-collapse collapse" aria-labelledby="privacyThree" data-bs-parent="#privacyAccordion">
                                <div class="accordion-body">
                                    This website links to external university services such as admissions and careers. Those portals may have their own privacy terms and data handling practices, so users should review them separately when providing personal information.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="privacyFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacyCollapseFour" aria-expanded="false" aria-controls="privacyCollapseFour">
                                    Security and updates
                                </button>
                            </h2>
                            <div id="privacyCollapseFour" class="accordion-collapse collapse" aria-labelledby="privacyFour" data-bs-parent="#privacyAccordion">
                                <div class="accordion-body">
                                    Reasonable steps should be taken to protect website operations and university communications. As the website evolves into a dynamic platform, this policy may be refined to reflect new services or data flows.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/tu/library-stacks.jpg" alt="Library shelves at Thal University Bhakkar">
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/page-end.php"; ?>
