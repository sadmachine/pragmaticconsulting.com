@extends('layouts.com')

@section('content-id', 'lean-six-sigma')
@section('content-title', 'Lean/Six Sigma')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <div id="leanCarousel" class="carousel slide carousel-fade mb-3 mx-auto px-0" data-ride="carousel"
           data-interval="3500">
        <div class="carousel-inner">
          @component('components.carousel', ['carousel_items' => $carousel_obj->getOrderedItems()])
          @endcomponent
        </div>
        <a class="carousel-control-prev" href="#leanCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#leanCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="col-12">
      <article class="card" data-aos="fade-up">
        <h4 class="card-header">
          Our Lean/Six Sigma services focus on <strong>three</strong> major elements:
        </h4>
        <ol class="list-group list-group-flush list-group-numbered">
          <li class="list-group-item">
            <div>
              <strong>We provide consulting at all levels of an organization</strong> with special emphasis on
              implementation
              of the Lean enterprise. We examine the entire value chain from start to finish with the goal of identifying
              key areas for incremental improvement. We seek out opportunities to improve product and service performance,
              eliminate waste and increase customer satisfaction.
            </div>
          </li>
          <li class="list-group-item">
            <div>
              <strong>We spearhead and lead the initiative</strong>, providing key resources to launch and complete
              the initial programs then pass the baton. The leadership and mentoring we offer ensures that the
              essential techniques and tools are in place to maintain and sustain the transformation of the
              organization.
            </div>
          </li>
          <li class="list-group-item border-bottom">
            <div>
              <strong>We provide mentoring of decision-makers toward self-sustainability</strong> in Lean and Six Sigma
              implementation. This mentoring takes on two forms, one-on-one coaching and/or group training, customized
              to your organizational needs. We also provide Six Sigma “Champion” training for Black Belt and Green Belt
              certification.
            </div>
          </li>
        </ol>
        <section class="card-body">
          <h3 class="d-none d-md-block mt-2 mt-md-0">
            Our Approach
          </h3>
          <div class="row justify-content-center">
            <div class="col-12 col-md-5 order-1 order-md-2">
              <img class="img-fluid" src="{{ asset('img/Lean Manufacturing Diagram.jpg') }}" alt="Lean Wastes" />
            </div>
            <div class="col-12 col-md-7 order-2- order-md-1">
              <h3 class="d-md-none mt-2 mt-md-0">
                Our Approach
              </h3>
              <p>
                Pragmatic"s approach is to apply scientific methods to the design and operation of systems and
                business processes that enable employees to deliver the greatest “value” to customers and
                stakeholders.
              </p>

              <p>
                If you are ready to start transforming your organization, realize gains in quality, productivity,
                efficiencies and eliminate waste, take the next steps and contact us for more detailed information.
              </p>

              <p>
                Our comprehensive training programs can be delivered to <strong>all levels of your organization.</strong>
              </p>

              <p>
                For more information on our Lean/Six Sigma services, please visit our <a href="contact.php">
                  contact page
                </a>.
              </p>
            </div>
          </div>
        </section>
        <aside class="card-footer text-center">
          <div class="related-pages">
            <a href="it-and-systems.php" class="btn btn-prag" role="button">IT & Systems</a>
            <a href="human-capital.php" class="btn btn-prag" role="button">Human Capital</a>
            <a href="interim-executive.php" class="btn btn-prag" role="button">Interim Executive</a>
            <a href="engineering-consulting.php" class="btn btn-prag" role="button">Engineering Consulting</a>
          </div>
        </aside>
      </article>
    </section>
  </div>
@endsection
