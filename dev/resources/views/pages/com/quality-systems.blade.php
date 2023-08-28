@extends('layouts.com')

@section('content-id', 'quality-systems')
@section('content-title', 'Quality Systems')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <div class="row align-items-center d-flex d-flex-wrap">
            <div class="col-md-6">
              <p>
                An increasing number of companies are investing time and effort in transforming their operations,
                processes and organizations to world-class levels. Many have achieved <em>
                  responsive manufacturing
                </em> process capabilities,
                <em>reduced lead times</em>, <em>improved quality</em> and <em>reduced waste</em>. These techniques,
                in combination with <strong>Total Quality Management (TQM)</strong>, enable the operations to be
                highly responsive and to produce quality at the source.
              </p>
              <p>
                This is an underlying theme to our approach in all that we do with our clients. Lean, integrated
                systems and quality at the source become part of an organization’s cultural change. Even when
                implementing quality systems, we do not develop processes for process’s sake. Our experience assures
                our client organizations attain the highest quality standards and compliance, and delivers
                <em>added value in addition to dramatic improvements</em>.
              </p>
            </div>
            <div class="col-md-6">
              <div id="qualityCarousel" class="carousel slide carousel-fade mb-3 px-0" data-ride="carousel"
                   data-interval="3500">
                <div class="carousel-inner">
                  @component('components.carousel', ['carousel_items' => $carousel_obj->getOrderedItems()])
                  @endcomponent
                </div>
                <a class="carousel-control-prev" href="#qualityCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#qualityCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <p class="pt-3">
            Many process steps and procedures satisfy requirements, and are just that - requirements. All others are
            viewed with a jaundiced eye and are not included if there is non-value added waste. We integrate your
            quality system with a culture of <strong>continuous improvement</strong>, involving employees at every
            step to ensure active participation and transfer of skills.
          </p>
        </section>
        <aside class="card-footer text-center">
          <strong>
            For more information on our Quality Systems services, <a class="strong" href="contact.php">contact
              us</a>.
          </strong>
        </aside>
      </article>
    </section>
    <section class="col-12 col-lg-6">
      <article class="card" data-aos="fade-right">
        <h4 class="card-header">
          Quality System Standards
        </h4>
        <ul class="simple-list">
          <li class="simple-list__item"><a href="ISO9000.php">ISO 9000: 2015</a></li>
          <li class="simple-list__item">ISO 14001: 2004</li>
          <li class="simple-list__item">ISO/AS 9100D</li>
          <li class="simple-list__item">ISO 13485: 2003</li>
          <li class="simple-list__item">OHSAS 18001</li>
          <li class="simple-list__item">ISO 20000</li>
        </ul>
      </article>
    </section>
    <section class="col-12 col-lg-6">
      <article class="card" data-aos="fade-left">
        <h4 class="card-header">
          Manufacturing Quality Initiatives
        </h4>
        <ul class="simple-list">
          <li class="simple-list__item">Design for Manufacturing</li>
          <li class="simple-list__item">IT Systems and Automation</li>
          <li class="simple-list__item">Process Capability</li>
          <li class="simple-list__item">Customer Satisfaction</li>
          <li class="simple-list__item">Quality Improvement Tools</li>
          <li class="simple-list__item">Process Definition and Mapping</li>
        </ul>
      </article>
    </section>
    <section class="col-12 col-lg-6">
      <article class="card" data-aos="fade-right">
        <h4 class="card-header">
          Supplier Management
        </h4>
        <ul class="simple-list">
          <li class="simple-list__item">Developing a Supplier Certification</li>
          <li class="simple-list__item">Contract Compliance (Audits)</li>
          <li class="simple-list__item">Supplier Rating Systems</li>
          <li class="simple-list__item">Benchmarking Initiatives</li>
          <li class="simple-list__item">Material Acquisition Management</li>
          <li class="simple-list__item">Global Supply Chain</li>
        </ul>
      </article>
    </section>
    <section class="col-12 col-lg-6">
      <article class="card" data-aos="fade-left">
        <h4 class="card-header">
          Strategic Improvement Initiatives
        </h4>
        <ul class="simple-list">
          <li class="simple-list__item">Operations (Business) Planning</li>
          <li class="simple-list__item">Balanced Score Card (BSC)</li>
          <li class="simple-list__item">Lean and Six Sigma</li>
          <li class="simple-list__item">DMAIC Process</li>
          <li class="simple-list__item"><a href="problem-solving.php">Problem Solving</a></li>
          <li class="simple-list__item">Goal Deployment (Hoshin Kanri)</li>
        </ul>
      </article>
    </section>
    <section class="col-12">
      <article class="card card-compact" data-aos="fade-in">
        <h5 class="card-header text-center">
          Related pages
        </h5>
        <section class="card-body">
          <div class="related-pages">
            <a class="btn btn-prag" role="button" href="human-capital.php">Human Capital</a>
            <a class="btn btn-prag" role="button" href="lean-six-sigma.php">Lean/Six Sigma</a>
            <a class="btn btn-prag" role="button" href="project-management.php">Project Management</a>
            <a class="btn btn-prag" role="button" href="compliance.php">Compliance</a>
            <a class="btn btn-prag" role="button" href="it-and-systems.php">IT & Systems</a>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
