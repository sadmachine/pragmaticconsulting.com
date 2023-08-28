@extends('layouts.com')

@section('content-id', 'cio-cto')
@section('content-title', 'Interim CIO/CTO')

{{-- Some sections which will be reused later --}}

@section('success-1')
  <header class="card-header serif">
    <strong>I.</strong> Established and grew Philadelphia International Airports technology infrastructure:
  </header>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Established a fiber-optic infrastructure</li>
    <li class="list-group-item">Established internal and public internet connectivity</li>
    <li class="list-group-item">Established a secure email and data back-up enterprise</li>
    <li class="list-group-item">Developed a world-class website that provides "live" flight information</li>
    <li class="list-group-item">Reduced unnecessary capital expenditures</li>
  </ul>
@endsection

@section('success-2')
  <header class="card-header serif">
    <strong>II.</strong> Led product development for a mortgage servicing and software development company:
  </header>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Led two teams in development of two mortgage servicing applications</li>
    <li class="list-group-item">Directed sales activities</li>
    <li class="list-group-item">Negotiated licensing and service agreements</li>
  </ul>
@endsection

@section('success-3')
  <header class="card-header serif">
    <strong>III.</strong> Worked on a pre-emptive planning project with a healthcare services company to:
  </header>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Develop disaster recovery plans</li>
    <li class="list-group-item">Develop business continuity plans</li>
    <li class="list-group-item">Ensure near seamless resumption of management and administrative operations</li>
  </ul>
@endsection

@section('related-links')
  <div class="related-pages">
    <a href="contact.php" class="btn btn-prag" role="button">Contact Us</a>
    <a href="chro.php" class="btn btn-prag" role="button">Interim CHRO</a>
    <a href="cfo.php" class="btn btn-prag" role="button">Interim CFO</a>
    <a href="ceo-coo.php" class="btn btn-prag" role="button">Interim CIO/CTO</a>
  </div>
@endsection

{{-- Main content --}}

@section('content-body')
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <section class="card-body">
          <h4>Pragmatic Presents Interim CIO/CTO</h4>
          <p>
            Through <span class="text-prag">Pragmatic's</span> nationwide network of professional consultants, we
            offer
            solutions in a wide range of industries and
            functional areas including <strong>Information Technology</strong>. Our interim and part time executives
            provide short-term <em>C-level
              talent at a fraction of the cost</em>, and can be in place and contributing to your business in no time!
          </p>
          <p>
            Our executive consultants possess more than <strong>35 years of experience in hardware and software
              technology</strong>, encompassing
            cabinet mainframes, mini-systems, client/server networks, cloud services, mobile platforms, peripheral
            devices,
            operating systems, programming languages, and a wide array of application software. Functional experience
            includes
            project and program management, tactical problem and change management, budget review and analysis, strategic
            vision
            planning, and mentor services.
          </p>
          <p>
            Our interim CIO/CTO staff is the solution when your initiative is under time, human capital and financial
            constraints. Since our consultants have been in the client position, they provide necessary knowledge,
            expertise and
            management experience to <em>successfully align and implement tactical plans and projects</em>. High-level
            talent and
            expertise without the long-term cost will be a <strong>competitive advantage for your organization</strong>.
          </p>
        </section>
      </section>
    </div>
  </div>
  <div class="text-center my-3" data-aos="fade-up">
    <h2 class="d-inline-block border-bottom-prag">A few of Pragmatic's many Success Stories</h2>
  </div>
  {# Success stories up to "lg" displays #}
  <div class="row d-block d-lg-none">
    <div class="col-12">
      <div class="card" data-aos="fade-in">
        @yield('success-1')
      </div>
    </div>
    <div class="col-12">
      <div class="card" data-aos="fade-in">
        @yield('success-2')
      </div>
    </div>
    <div class="col-12">
      <div class="card" data-aos="fade-in">
        @yield('success-3')
        <aside class="card-footer text-center">
          @yield('related-links')
        </aside>
      </div>
    </div>
  </div>
  {# Success stories on size "lg" display and up #}
  <div class="row d-none d-lg-block">
    <div class="col-12">
      <div class="card card-compact" data-aos="fade-up">
        <div class="card-body">
          <div class="row">
            <div class="col-4 mx-0 pl-3 pr-2">
              <div class="card card-compact" data-aos="fade-in">
                @yield('success-1')
              </div>
            </div>
            <div class="col-4 mx-0 pl-1 pr-2">
              <div class="card card-compact" data-aos="fade-in">
                @yield('success-2')
              </div>
            </div>
            <div class="col-4 mx-0 pl-1 pr-3">
              <div class="card card-compact" data-aos="fade-in">
                @yield('success-3')
              </div>
            </div>
          </div>
        </div>
        <aside class="card-footer text-center">
          @yield('related-links')
        </aside>
      </div>
    </div>
  </div>
@endsection
