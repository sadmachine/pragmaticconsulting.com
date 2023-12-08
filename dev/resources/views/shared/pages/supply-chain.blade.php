@extends('layouts.com')

@section('content-id', 'supply-chain')
@section('content-title', 'Supply Chain')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <p class="lead border-bottom pb-3">
            Our Supply Chain group utilizes <span class="text-prag">Pragmatic Consulting's</span> applied expertise in
            both <strong>Supply Chain Management</strong> and <strong>ERP information systems</strong>. We work with you
            to improve your business processes, thus controlling the methods, operational and procurement procedures and
            managing change through the supply chain.
          </p>
          <p>
            We have extensive expertise in supply chain management using a <em>Total Systems</em> approach to optimize
            your entire enterprise. Our associates have successfully performed projects that used this approach,
            overseeing the entire process from initial customer interest and (RFQ) through the actual shipment of finished
            product, and everything in between.
          </p>
          <p>
            We will help your team achieve real value, eliminate non-value-added waste and make the culture change
            necessary to <strong>make your organization lean and more effective than your competition</strong>. Together,
            we will create a tactical plan that supports your company's strategic goals through the entire supply chain.
          </p>
        </section>
      </article>
    </section>
  </div>
  <div class="row">
    @component('components.card-titled-list', [
      'breakpoint' => 'lg',
      'title_col_sizes' => 'col-lg-5 col-xl-4',
      'list_items' => [
      'Disclose bottlenecks',
      'Eliminate redundancies',
      'Identify missing controls',
      'Develop tools for
      implementing valid business systems',
      'Eliminate and ensure that superfluous tasks are not automated',
      ],
      ])
      With our clients, we:
    @endcomponent
  </div>
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <p>
            Pragmatic is deeply involved in <a class="strong" href="global-supply-chain.php">global supply chain
              consulting</a> and has years of experience and many examples of successful implementations of Inventory,
            Distribution ehouse Management projects.
          </p>
          <p>Some examples are:</p>
          <ul>
            <li>
              <a class="praglink" href="supply-chain-examples.php#aftermarket-distribution-warehouse">
                Aftermarket Distribution Warehouse
              </a>
            </li>
            <li>
              <a class="praglink" href="supply-chain-examples.php#moving-storage-lean-warehouse">
                Moving & Storage "Lean Warehouse"
              </a>
            </li>
          </ul>
          <p class="strong">
            For more information on our Supply Chain services, <a class="strong" href="contact.php">contact
              us</a>.
          </p>
        </section>
        <aside class="card-footer text-center">
          <div class="related-pages">
            <a class="btn btn-prag" role="button" href="global-supply-chain.php">Global Supply Chain</a>
            <a class="btn btn-prag" role="button" href="compliance.php">Compliance</a>
            <a class="btn btn-prag" role="button" href="import-export.php">Import/Export</a>
            <a class="btn btn-prag" role="button" href="quality-systems.php">Quality Systems</a>
            <a class="btn btn-prag" role="button" href="lean-six-sigma.php">Lean/Six Sigma</a>
          </div>
        </aside>
      </article>
    </section>
  </div>
@endsection
