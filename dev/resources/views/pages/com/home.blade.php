@extends('layouts.com')

@section('content-id', 'index')
@section('content-title', 'Management & Technical Consulting')

@section('head')
  <script src="{{ asset('js/com/bbb.js') }}"></script>
@endsection

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" id="lead-info" data-aos="fade-up">
        <section class="card-body px-0 px-md-4">
          <div id="carouselShowcase" class="carousel slide carousel-fade mb-3 mx-auto px-0" data-ride="carousel"
               data-interval="3500">
            <div class="carousel-inner">
              @component('components.carousel', ['carousel_items' => $carousel_obj->getOrderedItems()])
              @endcomponent
            </div>
            <a class="carousel-control-prev" href="#carouselShowcase" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselShowcase" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <p class="lead px-3 px-md-0 mb-0">
            Pragmatic Consulting, Inc. is a full service management and technical consulting firm, committed to making
            the benefits of becoming "World Class" a reality for your business. We bring your business entity our
            extensive, multifaceted experience to help both large and small organizations achieve their objective of
            optimal organizational excellence. Pragmatic Consulting, Inc. is here to help you succeed!
            <br />
            <a href="overview.php">Learn More...</a>
          </p>
          <hr class="my-3" />
          <div class="d-flex flex-row flex-wrap justify-content-around align-items-center" id="logos">
            <div class="order-1">
              <a id="bbblink" class="ruhzbum"
                 href="https://www.bbb.org/us/nh/portsmouth/profile/business-consultant/pragmatic-consulting-0051-92013239#bbbseal"
                 title="Pragmatic Consulting, Inc., Business Consultant, Portsmouth, NH"
                 style="display: block;position: relative;overflow: hidden; width: 150px; height: 68px; margin: 0px; padding: 0px;">
                <img style="padding: 0px; border: none;" id="bbblinkimg"
                     src="https://seal-concord.bbb.org/logo/ruhzbum/pragmatic-consulting-92013239.png" width="300"
                     height="68" alt="Pragmatic Consulting, Inc., Business Consultant, Portsmouth, NH" />

              </a>
            </div>
            <div class="order-2 order-sm-3 order-lg-2">
              <img src="{{ asset('img/logos/apics_logo.png') }}" class="img-fluid"
                   alt="Association for Supply Chain Management logo" />
            </div>
            <div class="order-3 order-sm-4 order-lg-3">
              <img src="{{ asset('img/logos/ame_logo.png') }}" class="img-fluid"
                   alt="Association for Manufacturing Excellence logo" />
            </div>
            <div class="order-4 order-sm-5 order-lg-4">
              <img src="{{ asset('img/logos/sme.png') }}" class="img-fluid"
                   alt="Society of Manufacturing Engineers logo" />
            </div>
            <div class="order-5 order-sm-2 order-lg-5">
              <img src="{{ asset('img/logos/uschamber.png') }}" class="img-fluid"
                   alt="U.S. Chamber of Commerce logo" />
            </div>
          </div>
        </section>
      </article>
    </section>
  </div>
  <div class="row">
    <section class="col-12 col-md-6">
      <article class="card card-compact" data-aos="fade-in">
        <h4 class="card-header">
          Services
        </h4>
        <link-list :items="{{ $service_links }}"></link-list>
      </article>
    </section>
    <section class="col-12 col-md-6">
      <article class="card card-compact" data-aos="fade-in">
        <h4 class="card-header">
          About
        </h4>
        <link-list :items="{{ $about_links }}"></link-list>
      </article>
      <article class="card card-compact" data-aos="fade-in">
        <h4 class="card-header">
          Leadership
        </h4>
        <link-list :items="{{ $leadership_links }}"></link-list>
      </article>
      <article class="card card-compact" data-aos="fade-in">
        <h4 class="card-header">
          Portfolio
        </h4>
        <link-list :items="{{ $portfolio_links }}"></link-list>
      </article>
    </section>
  </div>
@endsection
