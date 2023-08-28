@extends('layouts.com')

@section('content-id', 'location')
@section('content-title', 'Locations')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <div class="row my-4 justify-content-around">
            <div class="col-12 col-sm-auto">
              <h3>Headquarters</h3>
              <p>
                1 Greenleaf Woods Drive <br />
                Suite 202 <br />
                Portsmouth, NH 03801
              </p>
              <p>
                <strong>Phone</strong>: (603) 431-4461
              </p>
            </div>
            <div class="col-12 col-sm-auto">
              <h3>Mid-West</h3>

              <p>Belvidere, IL</p>
              <p>
                <strong>Phone:</strong> (815) 218-8135
              </p>
            </div>
          </div>
          <div class="row p-5 justify-content-center">
            <div class="col">
              <h4 class="text-center">
                Headquarters Location
              </h4>
              <div class="map-container">
                <iframe class="responsive-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.389328581877!2d-70.7740881842665!3d43.054278598968835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e2c079156e1a29%3A0xe316228eb4a16c14!2s1%20Greenleaf%20Woods%20Dr%2C%20Portsmouth%2C%20NH%2003801!5e0!3m2!1sen!2sus!4v1594228962442!5m2!1sen!2sus"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
