@extends('layouts.com')

@section('content-id', 'dynamics')
@section('content-title', 'Microsoft Dynamics')

@section('content-body')
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="media flex-column flex-lg-row">
            <div class="media-body align-self-center order-2 order-lg-1">
              <p class="lead">
                <span class="text-prag">Pragmatic</span> is a <strong>Microsoft Dynamics Partner</strong> with expert
                consultants
                who are experienced in applications, project management, and software development. We have successfully
                implemented
                <em>nearly 100 ERP systems</em>, including <strong>Microsoft Dynamics Nav</strong>, <strong>GP</strong>,
                and <strong>AX</strong> (now Business Central). Additionally, we have facilitated a number of other
                projects
                that we have either taken over and/or successfully fixed debacled implemented projects.
              </p>
              <a href="contact.php" class="btn btn-prag" role="button">Get in touch</a>
            </div>
            <img class="img-fluid order-1 order-lg-2 w-50 w-md-30 w-lg-20 mx-auto mb-3 mg-lg-2 ml-lg-3 align-self-center"
                 src="{{ asset('img/prag/square-microsoft-partner.png') }}" alt="Pragmatic Microsoft Partner" />
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <h4 class="card-header">
          Our Approach
        </h4>
        <div class="card-body">
          <p>
            Throughout all projects our <a href="supply-chain.php">extensive supply chain expertise</a> has enabled us to
            facilitate <em>improved business processes</em> from forecasting, to "quote to cash", and beyond. Thus, our
            comprehensive
            approach, vision, and breadth of experts is rarely found in IT solution companies. This is a clear
            differentiator
            when reviewing ERP solutions and selecting
            <span class="text-prag">Pragmatic</span>.
          </p>
          <p>
            We are <em>not</em> an IT house but rather a <strong>full-service consulting firm</strong> that understands
            business
            strategic and tactical execution of an initiative to achieve your strategy. We have worked with our customer
            organizations on several types of systems and sub-system solutions, such as <em>
              development of interfaces
            </em> to integrated and/or automation advances in many of our technology improvements that affect the bottom
            line. Therefore, whether it includes successful manufacturing module implementations, warehouse management
            systems,
            e-commerce or integration with other improvements, <em>we can help you achieve optimization</em>.
          </p>
        </div>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-7">
      <section class="card card-compact" data-aos="fade-right">
        <div class="card-body">
          <div class="text-center">
            <figure class="align-self-center">
              <img src="{{ asset('img/dynamics_ui.jpg') }}" class="img-fluid" alt="Dynamics Nav UI" />
              <figcaption>
                Microsoft Dynamics Nav Dashboard
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
    </div>
    <div class="col-12 col-lg-5">
      <section class="card" data-aos="fade-left">
        <h4 class="card-header">
          Microsoft Dynamics Packages
        </h4>
        <div class="card-body">
          <strong>AX</strong> is a scalable, feature-rich enterprise resource planning solution for midmarket to
          enterprise
          companies and the larger of the two.
          <hr class="my-3" />
          <strong>Navision</strong> is a small to midmarket solution. It has its roots in the former Great Plains software
          and is now a small ERP solution which supports the entire internal supply chain and everything from CRM to
          manufacturing
          and finance.
        </div>
        <aside class="card-footer">
          <strong>Microsoft Dynamics can be an excellent fit to accelerate your business.</strong>
        </aside>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <h4 class="card-header">
          Summary
        </h4>
        <div class="card-body">
          <p>
            Whether you are a large or small organization, <span class="text-prag">Pragmatic</span> provides you with
            <em>customized expert advice</em> and guidance through these processes to <strong>maximize success</strong>.
            This, coupled with our breadth of Information Technology expertise, is something hard to find in the
            overspecialized consulting world.
          </p>
          <p>
            For more information, please <a href="contact.php">contact us</a> or check out some of our other relevant
            shares.pages.
          </p>
        </div>
        <aside class="card-footer">
          <div class="text-center w-100">
            <a href="sales-and-marketing.php" class="btn btn-prag" role="button">Sales & Marketing</a>
            <a href="quality-systems.php" class="btn btn-prag" role="button">Quality Systems</a>
            <a href="project-management.php" class="btn btn-prag" role="button">Project Management</a>
            <a href="supply-chain.php" class="btn btn-prag" role="button">Supply Chain</a>
          </div>
        </aside>
      </section>
    </div>
  </div>
@endsection
