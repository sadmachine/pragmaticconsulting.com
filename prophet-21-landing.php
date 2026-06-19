<?php
session_start();

function errors($name) {
    if (isset($_SESSION['submission_errors'])) {
        if (isset($_SESSION['submission_errors'][$name])) {
            echo '<strong style="color: #D60606;">' . $_SESSION['submission_errors'][$name] . '</strong><br>';
            unset($_SESSION['submission_errors'][$name]);
        }
    }
}

$content_id = 'epicor';
$content_title = 'Epicor Prophet 21';

require_once __DIR__ . '/template/new/start-landing.php';
require_once __DIR__ . '/template/new/start-hero.php';
?>
  <div class="row">
    <div class="col-12 hero-content">
      <div>
        <h1>Epicor Prophet 21</h1>
        <p class="lead">
          Streamline Your Distribution Operations with Epicor Prophet 21 ERP
          Expert Consulting & Implementation Services Tailored to Wholesale Distributors.
        </p>
        <a href="#schedule" class="btn btn-prag" role="button">Schedule a Complimentary Consultation</a>
        <a href="contact.php" class="btn btn-prag" role="button">Contact Us</a>
      </div>
    </div>
  </div>
<?php
require_once __DIR__ . '/template/new/end-hero.php';
$hide_content_title = true;
require_once __DIR__ . '/template/new/start-content.php';
?>
    <div class="row">
        <div class="col">
            <section class="card" data-aos="fade-up">
                <div class="card-body">
                    <h3>Is your distribution business ready for a digital transformation?</h3>
                    <p>
                      At Pragmatic Consulting, Inc., we help wholesale distributors unlock the full potential of Epicor Prophet 21 (P21) a powerful ERP system designed specifically for your industry.
                      Our team of certified consultants delivers end-to-end implementation, optimization, and support to ensure your ERP investment drives measurable results.
                    </p>


                    <strong>Why Choose Us:</strong>
                    <ul>
                      <li>Certified Epicor P21 Experts</li>
                      <li>Deep Industry Experience</li>
                      <li>Customized ERP Solutions</li>
                      <li>Proven Implementation Methodology</li>
                      <li>Reliable Support & Training</li>
                    </ul>
            
                    <strong>Our Services:</strong>
                    <ul>
                      <li>ERP Implementation & Deployment</li>
                      <li>System Optimization & Customization</li>
                      <li>Manufacturing & Distribution Expertise</li>
                      <li>Data Migration & Integration</li>
                      <li>User Training & Change Management</li>
                      <li>Ongoing Support & Maintenance</li>
                    </ul>

                    <strong>Benefits of Epicor P21 ERP:</strong>
                    <ul>
                      <li>Real-time inventory and warehouse visibility</li>
                      <li>Streamlined order processing and fulfillment</li>
                      <li>Enhanced customer relationship management</li>
                      <li>Powerful business intelligence and reporting</li>
                      <li>Scalable architecture for future growth</li>
                    </ul>

                    <strong>Ready to transform your operations?</strong>
                    <p>
                      Let 's talk about how Epicor P21 can elevate your business.
                    </p>

                    <a href="#schedule" class="btn btn-prag" role="button">Schedule a Complimentary Consultation</a>
                    <a href="contact.php" class="btn btn-prag" role="button">Contact Us</a>
                </div> <!-- .card-body -->
            </section> <!-- .card -->
        </div> <!-- .col-12 -->
        <a name="schedule" id="schedule"></a>
        <div class="col-12 col-lg-5 sticky-top">
            <section class="card form-style-8" data-aos="fade-up">
                <div class="card-body">
                    <h3>Schedule a Complimentary Consultation</h3>
                    <p>
                      Looking to modernize your distribution operations? Let’s explore how P21 can streamline your processes and position your business for long-term success.
                    </p>
                    <form id='contactForm' action="/contact.submit.php" method="post">
                      <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                        <?php errors('name') ?>                        
                      </div>
                      <div class="form-row">
                        <div class="form-group col-6 col-lg-12 col-xl-6">
                          <label for="company">Company *</label>
                          <input type="text" class="form-control" id="company" name="company" placeholder="ABC Corporation"
                            required>
                          <?php errors('company') ?>                        
                        </div>
                        <div class="form-group col-6 col-lg-12 col-xl-6">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Director of Sales">
                          <?php errors('title') ?>                        
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-12 col-md-6 col-lg-12 col-xl-6">
                          <label for="email">Email *</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com"
                            required>
                          <?php errors('email') ?>                        
                        </div>
                        <div class="form-group col-12 col-md-6 col-lg-12 col-xl-6">
                          <label for="telephone">Telephone *</label>
                          <input type="tel" class="form-control" id="phone" name="telephone" required>
                          <?php errors('telephone') ?>                        
                        </div>
                      </div>
                      <legend>Message *</legend>
                      <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="How can we help?"
                          required></textarea>
                        <?php errors('message') ?>                        
                      </div>
                      <div class="form-group mb-0">
                        <button class="g-recaptcha btn btn-prag px-4 py-2"
                          data-sitekey="6LfPG70ZAAAAAEEDYMu7fV0pVSvIGzJZDfF-HhGA" data-callback='onSubmit'
                          data-action='submit'>Submit</button>
                      </div>
                    </form>
                </div> <!-- .card-body -->
            </section> <!-- .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    <div class="row">
        <div class="col-12">
            <section class="card card-compact" data-aos="fade-up">
                <h4 class="card-header text-center">Areas Successfully Implemented</h4>
                <div class="row no-gutters">
                    <div class="col-12 col-md-6">
                        <ul id="left_list" class="left-list list-group list-group-flush list-group-icons">
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-boxes fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        Inventory
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-warehouse fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Including Warehouse Management
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-truck-loading fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Multi-warehouse
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-laptop fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        E-Commerce
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-file-signature fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        Documentation Management
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-plus-square fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                And other add-ons!
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-drafting-compass fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        Engineering
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-list-alt fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                BOM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-copy fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Rev Control and More
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul id="right_list" class="right-list list-group list-group-flush list-group-icons">
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-barcode fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        Bar Coding
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-money-bill fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        Financial
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-file-invoice-dollar fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                All Financial Modules
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-search-dollar fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Single- and Multi-site
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-comments-dollar fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Multiple Company
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-dolly-flatbed fa-lg fa-fw"></i>
                                    </div>
                                    <div class="col">
                                        Shop Floor Control
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-route fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Routings
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Resources
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-truck fa-lg fa-fw"></i>
                                            </div>
                                            <div class="col">
                                                Outside Operations and More
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <strong>
                        And more! To hear about all our successful implementations, 
                        <a href="contact.php">Get in touch</a>.
                    </strong>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <section class="card" data-aos="fade-up">
                <h4 class="card-header text-center">Summary</h4>
                <div class="card-body">
                    <div class="row">
                        <p class="col-12">
                            <strong>Epicor Prophet 21</strong> is a state of the art fully integrated <em>ERP</em> (Enterprise Resource
                            Planning)
                            software for running a wide
                            range of businesses. Its latest version is an excellent, fully integrated ERP solution with
                            enhanced
                            features, particularly around its cloud capability. This is a highly efficient middle market
                            software
                            solution that
                            can be LAN or Cloud based, SaaS, and hosted. It possesses a full host of features required to
                            run a fully
                            integrated solution for your company.
                        </p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <strong>For more information on our Epicor Prophet 21 services, please visit our <a href="contact.php">contact
                            page</a>.</strong>
                </div>
            </section>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="intl-tel-input/js/intlTelInput.min.js"></script>
<?php
require_once __DIR__ . '/template/new/end.php';
