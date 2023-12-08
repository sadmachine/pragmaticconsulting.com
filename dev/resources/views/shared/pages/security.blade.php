@extends('layouts.com')

@section('content-id', 'index')
@section('content-title', 'Management & Technical Consulting')

@section('content-header', '')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <h1 class="card-header text-center">
          Security Services
        </h1>
        <section class="p-0">
          <div class="d-flex flex-column flex-lg-row">
            <section class="p-3 w-100 w-lg-70">
              <p class="lead pb-3 border-bottom">
                Security is becoming a higher concern and priority for virtually all types of businesses. Does your
                business or organization have a security strategy in place?
              </p>
              <p>
                At <span class="text-prag">Pragmatic</span>, we believe security is not just an overhead expense, but
                a service which can provide <em>demonstrable ROI</em> and allow companies to better position themselves
                for the trust, credibility, and comfort of their customers and prospective customers. We offer <strong>
                  security strategic planning
                </strong> and a comprehensive set of security services such as <strong>risk assessments</strong> and
                <strong>threat mitigations</strong>.
              </p>
              <p>
                Safety Act indemification, as well as industry standard tests can also be provided in addition to
                these security services. <span class="text-prag">Pragmatic Consulting</span> also provides expanded
                export
                services which includes interrupt reform impact reviews of products & businesses, licensing processes,
                violation investigations and remediations, in addition to denied parties integration.
              </p>
              <p>
                <strong>For more information on our Security Services, <a href="contact.php">contact us</a>.</strong>
              </p>
            </section>
            <h4 class="p-3 border-top border-bottom border-grey bg-light d-block d-lg-none">
              Services List
            </h4>
            <ul id="security-services" class="border-lg-left w-100 w-lg-30 d-inline-block icon-list">
              <li class="icon-list__item">
                <i class="fas fa-user-secret fa-lg fa-fw"></i>
                Planning for Insider Threats
              </li>
              <li class="icon-list__item">
                <i class="fas fa-door-open fa-lg fa-fw"></i>
                Physical Security Measures<ul class="icon-list icon-list--indented">
                  <li class="icon-list__item">
                    <i class="fas fa-user-lock fa-lg fa-fw"></i>
                    Employees
                  </li>
                  <li class="icon-list__item">
                    <i class="fas fa-key fa-lg fa-fw"></i>
                    Facilities
                  </li>
                </ul>
              </li>
              <li class="icon-list__item">
                <i class="fas fa-desktop fa-lg fa-fw"></i>
                IT Security Measures<ul class="icon-list icon-list--indented">
                  <li class="icon-list__item">
                    <i class="fas fa-server fa-lg fa-fw"></i>
                    IT Infrastructure
                  </li>
                  <li class="icon-list__item">
                    <i class="fas fa-satellite-dish fa-lg fa-fw"></i>
                    Network
                  </li>
                  <li class="icon-list__item">
                    <i class="fas fa-print fa-lg fa-fw"></i>
                    Software
                  </li>
                  <li class="icon-list__item">
                    <i class="fas fa-save fa-lg fa-fw"></i>
                    ERP Systems
                  </li>
                  <li class="icon-list__item">
                    <i class="fas fa-download fa-lg fa-fw"></i>
                    Cyber/Internet Security
                  </li>
                  <li class="icon-list__item">
                    <i class="fas fa-database fa-lg fa-fw"></i>
                    Compliance Systems
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
        <aside class="card-footer text-center">
          <div class="related-pages justify-content-center">
            <a class="btn btn-prag" role="button" href="it-and-systems.php">IT & Systems</a>
            <a class="btn btn-prag" role="button" href="quality-systems.php">Quality Systems</a>
            <a class="btn btn-prag" role="button" href="project-management.php">Project Management</a>
            <a class="btn btn-prag" role="button" href="compliance.php">Compliance</a>
            <a class="btn btn-prag" role="button" href="human-capital.php">Human Capital</a>
          </div>
        </aside>
      </article>
    </section>
  </div>
@endsection
