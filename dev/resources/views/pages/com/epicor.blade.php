@extends('layout.com')

@section('content-id', 'epicor')
@section('content-title', 'Epicor ERP Software')

@section('content-body')
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <div class="card-body">
          <figure class="d-block d-lg-none w-100 mx-auto mb-3">
            <img class="img-fluid" src="{{ asset('img/erp/epicor-interface.png') }}" alt="Epicor 10 Interface" />
            <figcaption>Epicor Main Environment</figcaption>
          </figure> <!-- .d-(block|lg-none) .w-100 .m(x-auto|b-3) -->
          <div class="media">
            <div class="media-body">
              <p class="lead">
                Our <a href="supply-chain.php">Supply Chain</a> & <a href="it-and-systems.php">IT Systems</a> experts have
                extensive experience successfully implementing <strong>Epicor</strong> and many related ERP projects. This
                includes many years of evolving with the software product from the days of the Vantage software to the
                latest versions of the systems, as well as several sub-system related systems solutions.
                <span class="text-prag">Pragmatic’s</span> team works with the customer to utilize our experience
                having
                <em>completed nearly 100 ERP implementations</em>.<br />
              </p> <!-- .lead -->
              <a href="contact.php" class="btn btn-prag" role="button">Get in touch</a>
            </div> <!-- .media-body -->
            <figure class="d-none d-lg-inline-block w-40 ml-3 align-self-center">
              <img class="img-fluid" src="{{ asset('img/erp/epicor-interface.png') }}" alt="Epicor 10 Interface" />
              <figcaption>Epicor Main Environment</figcaption>
            </figure> <!-- .d-(none|lg-inline-block) .w-40 .ml-3 .align-self-center -->
          </div> <!-- .media -->
        </div> <!-- .card-body -->
      </section> <!-- .card -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
  <div class="row">
    <div class="col-12">
      <section class="card card-compact" data-aos="fade-up">
        <h4 class="card-header text-center">Areas Successfully Implemented</h4>
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <ul id="left_list" class="left-list list-group list-group-flush list-group-icons">
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-calendar-alt fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Planning and Scheduling
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-calendar-plus fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Advanced Planning and Scheduling
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-barcode fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Bar Coding
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-users fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    CRM
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-file-signature fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    DocStar
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-plus-square fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        And other add-ons!
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-drafting-compass fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Engineering
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-list-alt fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        BOM
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-copy fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Rev Control and More
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-money-bill fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Financial
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-file-invoice-dollar fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        All Financial Modules
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-search-dollar fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Single- and Multi-site
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-comments-dollar fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Multiple Company
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <ul id="right_list" class="right-list list-group list-group-flush list-group-icons">
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-boxes fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Inventory
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-warehouse fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Including Warehouse Management
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-truck-loading fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Multi-warehouse
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-dolly-flatbed fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Shop Floor Control
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-route fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Routings
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-users fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Resources
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-sitemap fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Capacity Planning
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-truck fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Outside Operations and More
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-glasses fa-lg fa-fw"></i>
                  </div>
                  <div class="col">
                    Quality
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-search fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Standard
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-search-plus fa-lg fa-fw"></i>
                      </div>
                      <div class="col">
                        Advanced Quality Module
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-footer text-center">
          <strong>And more! To hear about all our successful implementations, <a href="contact.php">Get in
              touch</a>.</strong>
        </div>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <h4 class="card-header text-center">Our Approach</h4>
        <div class="card-body">
          <figure class="d-block d-md-none w-100 w-sm-65 mx-auto mb-3">
            <img class="img-fluid" src="{{ asset('img/erp/mes-interface.png') }}" alt="Epicor MES Interface" />
            <figcaption>Epicor MES (Manufacturing Execution System) Environment</figcaption>
          </figure>
          <div class="media">
            <figure class="d-none d-md-inline-block w-40 mr-3 mb-2 align-self-center">
              <img class="img-fluid" src="{{ asset('img/erp/mes-interface.png') }}" alt="Epicor MES Interface" />
              <figcaption>Epicor MES (Manufacturing Execution System) Environment</figcaption>
            </figure>
            <div class="media-body">
              <p>
                <span class="text-prag">Pragmatic's</span> broad implementation expertise allows us to get the most
                out of
                your investment with a <strong>Total Systems</strong> approach throughout the extended supply chain from
                forecasting, <em>quote to cash</em>, and beyond. Thus, whether it be planning and scheduling, the MES
                module,
                warehouse management systems or integration from <em>point of sale</em>, <span
                  class="text-prag">Pragmatic</span> has the expertise to help
                you improve your information technology as well as your operations and business environment as a whole.
              </p>
              <p>
                If you are considering a <strong>full-service</strong> solution, Epicor should be on your list and is a
                viable solution in
                many cases. Indeed, we have put together cross functional teams that incorporate <em>Lean</em> techniques
                as well
                as throughout the entire enterprise for maximum optimization. Whether you are a large or small
                organization, we provide customized expert advice and guidance through these processes to <strong>maximize
                  success</strong>.
                This, coupled with our breadth of manufacturing and distribution expertise is something hard to find
                in the over-specialized consulting world.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <section class="card" data-aos="fade-up">
        <h4 class="card-header text-center">Summary</h4>
        <div class="card-body">
          <div class="row">
            <p class="col-12">
              <strong>Epicor</strong> is a state of the art fully integrated <em>ERP</em> (Enterprise Resource Planning)
              software for running a wide
              range of businesses. Its latest version is an excellent, fully integrated ERP solution with enhanced
              features, particularly around its cloud capability. This is a very good middle market software solution that
              can be LAN or Cloud based, SaaS, and hosted. It possesses a full host of features required to run a fully
              integrated solution for your company.
            </p>
          </div>
        </div>
        <div class="card-footer text-center">
          <strong>For more information on our Epicor services, please visit our <a href="contact.php">contact
              page</a>.</strong>
        </div>
      </section>
    </div>
  </div>
@endsection
