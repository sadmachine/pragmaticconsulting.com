@extends('layouts.com')

@section('content-id', 'industries')
@section('content-title', 'Our Industries')

@section('content-body')
  <div class="row justify-content-center">
    <section class="col-12 col-md-6 col-xl-5">
      <article class="card card-compact" data-aos="fade-right">
        <ul id="our-industries" class="icon-list">
          <li class="icon-list__item">
            <i class="fas fa-plane fa-lg fa-fw"></i>
            Aerospace
          </li>
          <li class="icon-list__item">
            <i class="fas fa-car-side fa-lg fa-fw"></i>
            Automotive
          </li>
          <li class="icon-list__item">
            <i class="fas fa-barcode fa-lg fa-fw"></i>
            Automation
          </li>
          <li class="icon-list__item">
            <i class="fas fa-book fa-lg fa-fw"></i>
            Bookbinding Equipment
          </li>
          <li class="icon-list__item">
            <i class="fas fa-border-all fa-lg fa-fw"></i>
            Cellular Manufacturing
          </li>
          <li class="icon-list__item">
            <i class="fas fa-shopping-cart fa-lg fa-fw"></i>
            Consumer Products
          </li>
          <li class="icon-list__item">
            <i class="fas fa-fighter-jet fa-lg fa-fw"></i>
            Commercial and Military Aircraft
          </li>
          <li class="icon-list__item">
            <i class="fas fa-shield-alt fa-lg fa-fw"></i>
            Defense Industry
          </li>
          <li class="icon-list__item">
            <i class="fas fa-shipping-fast fa-lg fa-fw"></i>
            Distribution
          </li>
          <li class="icon-list__item">
            <i class="fas fa-mobile fa-lg fa-fw"></i>
            Electronics
          </li>
          <li class="icon-list__item">
            <i class="fas fa-memory fa-lg fa-fw"></i>
            Electro-Mechanical
          </li>
          <li class="icon-list__item">
            <i class="fas fa-tools fa-lg fa-fw"></i>
            Fabrication
          </li>
          <li class="icon-list__item">
            <i class="fas fa-apple-alt fa-lg fa-fw"></i>
            Food Service Equipment
          </li>
          <li class="icon-list__item">
            <i class="fas fa-water fa-lg fa-fw"></i>
            Hydraulics and Fluid Power
          </li>
          <li class="icon-list__item">
            <i class="fas fa-file-medical fa-lg fa-fw"></i>
            Insurance
          </li>
          <li class="icon-list__item">
            <i class="fas fa-dolly fa-lg fa-fw"></i>
            Material Handling Equipment
          </li>
          <li class="icon-list__item">
            <i class="fas fa-cogs fa-lg fa-fw"></i>
            Industrial Conveyors
          </li>
          <li class="icon-list__item">
            <i class="fas fa-cube fa-lg fa-fw"></i>
            Metal Working
          </li>
          <li class="icon-list__item">
            <i class="fas fa-laptop-medical fa-lg fa-fw"></i>
            Medical Systems
          </li>
          <li class="icon-list__item">
            <i class="fas fa-prescription fa-lg fa-fw"></i>
            Pharmaceutical
          </li>
          <li class="icon-list__item">
            <i class="fas fa-recycle fa-lg fa-fw"></i>
            Plastics
          </li>
          <li class="icon-list__item">
            <i class="fas fa-bolt fa-lg fa-fw"></i>
            Power Generation
          </li>
          <li class="icon-list__item">
            <i class="fas fa-print fa-lg fa-fw"></i>
            Printing
          </li>
          <li class="icon-list__item">
            <i class="fas fa-robot fa-lg fa-fw"></i>
            Robotics
          </li>
          <li class="icon-list__item">
            <i class="fas fa-object-group fa-lg fa-fw"></i>
            Tool & Design Support
          </li>
          <li class="icon-list__item">
            <i class="fas fa-warehouse fa-lg fa-fw"></i>
            Warehousing
          </li>
        </ul>
      </article>
    </section>
    <section class="col-12 col-md-6 col-xl-5">
      <article class="card" data-aos="fade-left">
        <section class="card-body">
          <p>
            <img class="img-fluid" alt="Blue Plane" src="{{ asset('img/blueplane.jpg') }}" />
          </p>
          <p>
            <img class="img-fluid" alt="Random Parts" src="{{ asset('img/randomparts.jpg') }}" />
          </p>
        </section>
      </article>
    </section>
  </div>
@endsection

@section('js')
  <script>
    utils.listExpand(["#our-industries"], 13);
  </script>
@endsection
