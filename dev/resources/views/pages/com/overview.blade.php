@extends('layouts.com')

@section('content-id', 'overview')
@section('content-title', 'Business Strategy')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-up">
        <section class="card-body">
          <div class="media flex-column flex-md-row align-items-center">
            <img class="img-fluid mr-3 mb-3 mb-md-0 w-50 w-md-25" src="{{ asset('img/collage.jpg') }}"
                 alt="Pragmatic Consulting Collage" />
            <div class="media-body">
              <p class="lead">
                <span class="text-prag">Pragmatic Consulting, Inc.</span>, is a full service management and technical
                consulting firm specializing in <strong>organizational excellence</strong> and
                <strong> continuous improvement</strong>.
              </p>
              <p>
                Whether an organization requires a turnaround or improved "Performance and Health",
                <span class="text-prag">Pragmatic</span> can help. We facilitate a strategic partner mentality with
                our
                clients. We are not just consultants!
                <strong>We are a hands-on, adjunct resource for your company</strong>.
                We've worked with start ups, M & A, and "Brownfield".
              </p>
            </div>
          </div>
        </section>
        <aside class="card-footer text-center">
          <strong>
            To learn more about what <span class="text-prag">Pragmatic</span> can do for your organization,
            <a href="contact.php">Get in Touch.</a>
          </strong>
        </aside>
      </article>
    </section>
  </div>
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-up">
        <h4 class="card-header text-center">
          Pragmatic's Strategic Approach
        </h4>
        <section class="card-body d-none d-lg-block">
          <div class="row align-items-center">
            <div class="col-4">
              <figure class="text-center" data-aos="fade-right">
                <img class="img-fluid img-scale w-80" src="{{ asset('img/7s-model.png') }}" alt="7s Model Diagram" />
                <figcaption>
                  The 7S Model
                </figcaption>
              </figure>
            </div>
            <div class="col-4 px-4 border-right border-left">
            @section('strategic-approach-p1')
              <p>
                Our <em>strategic approach</em> is framed in <strong>primary 7S</strong>,
                <strong> balanced scorecard</strong>, and best practices. Thus, any initiative, such as better cost
                management, greater profitability, and <em>improvement in core competencies</em> are aligned with your
                strategic direction.
              </p>
            @show
            @section('strategic-approach-p2')
              <p>
                Whether your organization is a small business or a multinational corporation, our diverse team of
                mobile consultants has the expertise you need to realize your full business potential and achieve
                world class excellence.
              </p>
            @show
          </div>
          <div class="col-4">
            <figure data-aos="fade-left">
              <img class="img-fluid img-scale" src="{{ asset('img/balanced-scorecard.png') }}"
                   alt="Balanced Scorecard diagram" />
              <figcaption>
                The Balanced Scorecard Model
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <section class="card-body d-block d-lg-none">
        <div class="row">
          <div class="col-12">
            @yield('strategic-approach-p1')
          </div>
        </div>
        <div class="row my-2">
          <div class="col-6 align-self-center px-5">
            <figure class="align-self-center" data-aos="fade-right">
              <img class="img-fluid" src="{{ asset('img/7s-model.png') }}" alt="7s Model Diagram" />
              <figcaption>
                The 7S Model
              </figcaption>
            </figure>
          </div>
          <div class="col-6 align-self-center">
            <figure class="align-self-center" data-aos="fade-left">
              <img class="img-fluid" src="{{ asset('img/balanced-scorecard.png') }}"
                   alt="Balanced Scorecard diagram" />
              <figcaption>
                The Balanced Scorecard Model
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            @yield('stategic-approach-p2')
          </div>
        </div>
      </section>
      <aside class="card-footer">
        <div class="related-pages">
          <a href="news-and-events.php" class="btn btn-prag" role="button">News & Events</a>
          <a href="meet-our-team.php" class="btn btn-prag" role="button">Meet Our Team</a>
          <a href="industries.php" class="btn btn-prag" role="button">Industries</a>
          <a href="our-clients.php" class="btn btn-prag" role="button">Our Clients</a>
        </div>
      </aside>
    </article>
  </section>
</div>
@endsection
