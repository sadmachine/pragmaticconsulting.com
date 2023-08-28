@extends('layouts.com')

@section('content-id', 'interim-executive')
@section('content-title', 'Interim Executive Expertise')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <h4>Pragmatic Presents Interim Executive</h4>
          <p>
            In the recent past economic recession there has been a surplus of expert displaced talent that made it easy
            for
            companies to acquire. However, as the economy is accelerating and the job market has rebounded,
            <em>it is getting more difficult to find experienced C-level talent</em>. In fact, moving forward talent
            acquisition
            becomes <strong>more difficult</strong> and the process becomes <strong>even longer</strong>.
          </p>
          <p>
            Likewise, many small to medium sized firms do not have the resources for a full time executive level expert
            and the
            associated costs. A 2014 survey shows that over 60% of companies state that talent gaps are their primary
            business
            challenge. Today the number is even higher. Thanks to <strong>Interim Executives</strong>, access to C-level
            talent
            for your organization can be achieved in a cost effective and timely manner.
          </p>
          <p>
            <em><span class="text-prag">Pragmatic's</span> Interim C-Level Executive services could be an affordable
              solution!</em>
          </p>
        </section>
        <aside class='card-footer text-center'>
          <strong><a href="contact.php">Talk with a consultant about our Interim Executive services</a></strong>.
        </aside>
      </article>
    </section>
  </div>
  <div class="row">
    <section class="col-12 text-center my-3">
      <div class="text-center">
        <h2 class="d-inline-block border-bottom-prag" data-aos="fade-in">Pragmatic's Interim Executive Services</h2>
      </div>
    </section>
  </div>
  <div class="row card-links">
    <section class="col-12 col-lg-6">
      @component('components.card-link')
        @slot('href')
          {{ url('/ceo-coo') }}
        @endslot
        @slot('icon')
          <i class="fas fa-user-tie"></i>
        @endslot
        @slot('title')
          CEO/COO
        @endslot
        @slot('description')
          Chief Executive Officer/Chief Operations Officer
        @endslot
      @endcomponent
    </section>
    <section class="col-12 col-lg-6">
      @component('components.card-link')
        @slot('href')
          {{ url('/chro') }}
        @endslot
        @slot('icon')
          <i class="fas fa-users"></i>
        @endslot
        @slot('title')
          CHRO
        @endslot
        @slot('description')
          Chief Human Resources Officer
        @endslot
      @endcomponent
    </section>
    <section class="col-12 col-lg-6">
      @component('components.card-link')
        @slot('href')
          {{ url('/cfo') }}
        @endslot
        @slot('icon')
          <i class="fas fa-hand-holding-usd"></i>
        @endslot
        @slot('title')
          CFO
        @endslot
        @slot('description')
          Chief Financial Officer
        @endslot
      @endcomponent
    </section>
    <section class="col-12 col-lg-6">
      @component('components.card-link')
        @slot('href')
          {{ url('/cio-cto') }}
        @endslot
        @slot('icon')
          <i class="fas fa-laptop-code"></i>
        @endslot
        @slot('title')
          CIO/CTO
        @endslot
        @slot('description')
          Chief Information Officer/Chief Technology Officer
        @endslot
      @endcomponent
    </section>
  </div>
@endsection
