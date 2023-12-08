@extends('layouts.com')

@section('content-id', 'global-supply-chain')
@section('content-title', 'Global Supply Chain')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <div class="row">
            <div class="d-none d-lg-block col-auto">
              <img src="{{ asset('img/supp_turbines.gif') }}" alt="Turbine" id="gsc-img-right">
            </div>
            <div class="col-12 col-lg">
              <p>
                We have a successful track record of helping our clients set up and improve operations or establish supply
                chains throughout the world. This includes Asia, Mexico, and Europe, as well as, other internationally
                based areas. Indeed our services include:
              </p>
              <ul class="list-col-2">
                <li>Export / Import Marketing</li>
                <li>Export capabilities implementation</li>
                <li>ITAR</li>
                <li>Logistics </li>
                <li>EAR</li>
                <li>Regulatory Audits and Review</li>
                <li>Export Documentation and Control</li>
              </ul>
            </div>
            <div class="col-6 col-lg-auto text-center">
              <img src="{{ asset('img/globsupp_pipe.jpg') }}" alt="Global Supply" id="gsc-img-left">
            </div>
            <div class="d-block d-lg-none col-6 col-lg-auto text-center">
              <img src="{{ asset('img/supp_turbines.gif') }}" alt="Turbine" id="gsc-img-right">
            </div>
          </div>
        </section>
        <aside class="card-footer text-center">
          <strong>For more information on Pragmatic's Global Supply Chain services, <a href="contact.php">contact
              us</a>.</strong>
        </aside>
      </article>
    </section>
    <section class="col-12">
      <article class="card" data-aos="fade-up">
        <h3 class="card-header text-center">International Experience</h3>
        <section class="card-body">
          <p>
            <span class="text-prag">Pragmatic</span> consultants have worked in international markets that include:
            relocation and startup of manufacturing operations, mergers and acquisitions and complete turnkey projects
            helping companies with exporting “know how” such as: export market analysis and networking, documentation and
            controls, and many related systems and organizational projects. As a result, we have direct access to
            resources throughout the world. For example, <strong>Larry Bull</strong>, one of our Principal Partners, has
            had direct responsibility for the establishment of a <strong>Wholly Owned Foreign Enterprise (WOFE)</strong>
            in China in 1998, as well as others. <em>This business broke even in its first year</em>. Today, it is
            approaching $30 million in revenue and generating a significant profit. Products from this business are
            supplied to the domestic commercial vehicle industry in China and exported to the US and Europe. Several of
            <span class="text-prag">Pragmatic's</span> consultants have many years of international business
            experience.
          </p>
          <p>
            <span class="text-prag">Pragmatic's</span> vast experiences with many different customers enable us to
            quickly
            and efficiently achieve our clients’ objectives. Our consultants have successfully accomplished tactical
            projects to support strategic directions and initiatives in improving material flow, identifying capable and
            cost effective suppliers, implementing effective quality systems and organizational development. For a
            complete understanding of our various services or if we can answer your questions, please contact us.
          </p>
          <p>
            Of course, <span class="prag-text">Pragmatic</span> has extensive experience with all aspects of
            <a class="strong" href="supply-chain.php">supply chain management</a>.
          </p>
          <p>
            For more information on our Global Supply Chain services, <a class="strong" href="contact.php">contact
              us</a>.
          </p>
        </section>
        <aside class="card-footer text-center">
          <div class="related-pages">
            <a class="btn btn-prag" role="button" href="compliance.php">Compliance</a>
            <a class="btn btn-prag" role="button" href="supply-chain.php">Supply Chain</a>
            <a class="btn btn-prag" role="button" href="quality-systems.php">Quality Systems</a>
            <a class="btn btn-prag" role="button" href="import-export.php">Import/Export</a>
            <a class="btn btn-prag" role="button" href="security.php">Security</a>
          </div>
        </aside>
      </article>
    </section>
  </div>
@endsection
