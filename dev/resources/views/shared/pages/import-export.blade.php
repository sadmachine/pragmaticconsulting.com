@extends('layouts.com')

@section('content-id', 'import-export')
@section('content-title', 'International Services')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <div class="row justify-items-around align-items-center align-items-xl-start">
            <div class="col-12 col-lg-9 col-xl-10 order-2 order-lg-1">
              <p class="lead">
                <span class="text-prag">Pragmatic</span> has a successful track record of helping our clients: develop
                and
                manage exports, set up and improve operations, and establish supply chains in Asia, Europe, and Mexico and
                other
                internationally based areas. Our team of expert consultants are equipped to handle your import and export
                needs,
                with years of success and experience in the field. Let <span class="text-prag">Pragmatic</span> assist
                your
                organization in becoming <em>World Class</em>.
              </p>
            </div>
            <div class="col-12 col-lg-3 col-xl-2 order-1 order-lg-2">
              @component('components.icon-group')
                @slot('id')
                  import-export-icon-group
                @endslot
                @slot('icon_top_left')
                  <i class="fas fa-shipping-fast fa-fw"></i>
                @endslot
                @slot('icon_top_right')
                  <i class="fas fa-clipboard-check fa-fw"></i>
                @endslot
                @slot('icon_bottom_left')
                  <i class="fas fa-boxes fa-fw"></i>
                @endslot
                @slot('icon_bottom_right')
                  <i class="fas fa-dolly fa-fw"></i>
                @endslot
              @endcomponent
            </div>
          </div>
        </section>
        <aside class="card-footer text-center">
          <strong>
            To get specific information about our international services, <a href="contact.php">get in touch</a>.
          </strong>
        </aside>
      </article>
    </section>
  </div>
  <div class="row">
    <section class="col-12 col-md-7">
      <article class="card" data-aos="fade-right">
        <h4 class="card-header">Global Experience</h4>
        <section class="card-body">
          <p>
            Pragmatic consultants have many years of experience working in international markets such as: Europe, Asia and
            other
            areas of the Globe, including relocation and startup of manufacturing operations and have helped companies
            with
            exporting “know how”, such as export documentation and controls. As a result, we have direct access to
            resources
            throughout the world. For example, Larry Bull, one of Pragmatic Consulting’s Principal Partners, has had
            direct
            responsibility for the establishment of a Wholly Owned Foreign Enterprise (WOFE) in Asia in 1998, as well as
            others.
            This WOFE business broke even in its first year. Today, it is approaching a tenfold increase in revenue and
            generating a significant profit. Products from this business are supplied to the domestic commercial vehicle
            industry and exported to the US and Europe.
          </p>
          <p>
            Pragmatic Consulting's vast experiences with many different customers enable us to quickly and efficiently
            achieve
            our clients’ objectives. Our consultants have successfully accomplished projects in improving material flow
            logistics, identifying capable and cost effective suppliers, improving supplier quality, and implementing
            effective
            quality systems and program/project management that has included plant startup and ramp up through the first
            year of
            production. Our networking ability in Europe and Asia and elsewhere provides the in-country support needed to
            successfully complete any assignment.
          </p>
          <p>
            For more information on our Import/Export services, <a href="contact.php">contact us</a>.
          </p>
        </section>
      </article>
    </section>
    <section class="col-12 col-md-5">
      <article class="card" data-aos="fade-left">
        <h4 class="card-header">Our services</h4>
        <ul class="simple-list">
          <li class="simple-list__item">U.S. Department of Defense(DOD) - DFARS regulation
            <ul class="simple-list simple-list--indented">
              <li class="simple-list__item">National Institute of Standards and Technology (NIST 800-171)</li>
            </ul>
          </li>
          <li class="simple-list__item">Exporting &amp; Importing</li>
          <li class="simple-list__item">Export &amp; Import Documentation </li>
          <li class="simple-list__item">Export &amp; Import Logistics</li>
          <li class="simple-list__item">EAR Regulations</li>
          <li class="simple-list__item">Denied Party Screening</li>
          <li class="simple-list__item">Visitor Management</li>
          <li class="simple-list__item">Export Compliance Security</li>
          <li class="simple-list__item">Export Compliance IT Security</li>
          <li class="simple-list__item">Export &amp; Import Compliance</li>
          <li class="simple-list__item">ITAR Regulations</li>
        </ul>
      </article>
    </section>
  </div>
  <div class="row">
    <section class="col-12">
      <article class="card card-compact" data-aos="fade-in">
        <h5 class="card-header text-center">Related Pages</h5>
        <section class="card-body">
          <div class="related-pages">
            <a class="btn btn-prag" role="button" href="project-management.php">Project Management</a>
            <a class="btn btn-prag" role="button" href="supply-chain.php">Supply Chain</a>
            <a class="btn btn-prag" role="button" href="compliance.php">Compliance</a>
            <a class="btn btn-prag" role="button" href="global-supply-chain.php">Global Supply Chain</a>
            <a class="btn btn-prag" role="button" href="lean-six-sigma.php">Lean/Six Sigma</a>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
