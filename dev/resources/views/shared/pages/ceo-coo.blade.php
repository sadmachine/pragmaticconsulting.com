@extends('layouts.com')

@section('content-id', 'ceo-coo')
@section('content-title', 'Interim CEO/COO')

{{-- Some sections which will be reused later --}}

@section('success-1')
  <header class="card-header serif">
    <strong>I.</strong> Pragmatic’s Interim Executive helped manage and advise a cooking equipment company and helped
    them:
  </header>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Manage the factory construction and layout, minimizing material and movement to save cost
    </li>
    <li class="list-group-item">Evaluate and procure equipment to maximize process flow</li>
    <li class="list-group-item">Restructure and staff up key positions</li>
    <li class="list-group-item">Train staff and factory personnel</li>
    <li class="list-group-item">Improve processes and increase the company’s production output by more the 38%</li>
  </ul>
@endsection

@section('success-2')
  <header class="card-header serif">
    <strong>II.</strong> Pragmatic Consulting helped manage and advise an equipment manufacturing plant enabling them to:
  </header>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Organize and staff a plant expansion</li>
    <li class="list-group-item">Increase productivity by more than 18%</li>
    <li class="list-group-item">Increase outsourcing program to improve cost</li>
    <li class="list-group-item">Select and implement a new “job shop systems" package to improve management information
      systems</li>
  </ul>
@endsection

@section('success-3')
  <header class="card-header serif">
    <strong>III.</strong> Pragmatic’s Executive Management helped manage and advise two divisions for a major corporation.
    We helped the company:
  </header>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Manage a multi-plant expansion</li>
    <li class="list-group-item">Execute consolidations, including product and technology transfers</li>
    <li class="list-group-item">Increase revenues and shipment by more than 25%</li>
    <li class="list-group-item">Increase profits more than 200%</li>
  </ul>
@endsection

@section('related-links')
  <div class="related-pages">
    <a href="contact.php" class="btn btn-prag" role="button">Contact Us</a>
    <a href="chro.php" class="btn btn-prag" role="button">Interim CHRO</a>
    <a href="cfo.php" class="btn btn-prag" role="button">Interim CFO</a>
    <a href="cio-cto.php" class="btn btn-prag" role="button">Interim CIO/CTO</a>
  </div>
@endsection

{{-- Main content --}}

@section('content-body')
  <div class="row">
    <div class="col-12">
      <div class="card" data-aos="fade-in">
        <div class="card-body">
          <h4>Pragmatic Presents Interim CEO/COO</h4>
          <p>
            Through <span class="text-prag">Pragmatic's</span> professional staff and nationwide network of
            consultants,
            we offer solutions in a wide range of
            industries and functional areas. Our <strong>Interim Executives</strong> can be in place and contributing to
            your business in no
            time! Interim Executives are the solution when your initiative is <em>under time and financial
              constraints</em>.
          </p>
          <p>
            Since all of our consultants have been in the client position, they provide necessary knowledge, technology,
            expertise and
            management experience to <em>successfully align and implement tactical plans and projects</em>. High-level
            talent and
            expertise without the long-term cost will be a <strong>competitive advantage for your organization</strong>.
          </p>
          <a class="btn btn-prag" href="contact.php" role="button">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center my-3" data-aos="fade-up">
    <h2 class="d-inline-block border-bottom-prag">A few of Pragmatic's many Success Stories</h2>
  </div>
  {{-- Success stories up to "lg" displays --}}
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
  {{-- Success stories on size "lg" display and up --}}
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
