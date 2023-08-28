@extends('layouts.com')

@section('content-id', 'it-and-systems')
@section('content-title', 'IT & Systems Consulting')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <p>
            At <span class="text-prag">Pragmatic Consulting</span>, we recognize that manufacturing IT systems are
            becoming more complex and difficult to implement and maintain. We provide <strong>
              evaluation and assessment services
            </strong> to help you make the best choice for your IT infrastructure and systems that will be aligned with
            your business' specific needs. We do not peddle, thus <em>we have no bias</em> to any particular IT or ERP
            system.
            <span class="text-prag">Pragmatic</span> is proficient in the entire supply chain, including the following:
          </p>
          <div class="row">
            <div class="col-12 col-sm-4 pb-0">
              <ul>
                <li>Customer Relations Management Software (CRM)</li>
                <li>Order-Entry</li>
                <li>Supply Management System</li>
              </ul>
            </div>
            <div class="col-12 col-sm-4 pb-0">
              <ul>
                <li>Process Management & Control Systems</li>
                <li>Order Processing & Order Management Software</li>
                <li>Quality Control Systems and Software</li>
              </ul>
            </div>
            <div class="col-12 col-sm-4 pb-0">
              <ul>
                <li>Customer Fulfillment Center Optimization</li>
                <li>Entire ERP Systems</li>
                <li>Systems Integration</li>
              </ul>
            </div>
          </div>
        </section>
        <aside class="card-footer">
          <div class="related-pages">
            <a class="btn btn-prag" role="button" href="contact.php">Contact Us</a>
            <a class="btn btn-prag" role="button" href="supply-chain.php">Supply Chain</a>
            <a class="btn btn-prag" role="button" href="quality-systems.php">Quality Systems</a>
          </div>
        </aside>
      </article>
    </section>
  </div>
  <div class="row">
    <section class="col-12 col-lg-5 order-1 order-lg-2">
      <article class="card py-0" data-aos="fade-left">
        <section class="card-body py-3" id="erp-showcase">
          <div class="row my-0 px-2">
            <div class="col-12 my-0">
              <div class="row mb-1">
                <h4 class="col text-center">
                  Tier 1 ERP Systems
                </h4>
              </div>
              <div class="row align-items-center justify-content-center">
                <div class="col">
                  <a class="system-icon" href="jdedwards.php" data-toggle="tooltip" data-placement="bottom"
                    title="JD Edwards System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/jdedwards.png') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="sap.php" data-toggle="tooltip" data-placement="bottom"
                    title="SAP System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/sap.png') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="syspro.php" data-toggle="tooltip" data-placement="bottom"
                    title="SysPro System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/syspro.png') }}" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3 px-2">
            <div class="col-12">
              <div class="row mb-1">
                <h4 class="col text-center">
                  Middle Market ERP Systems
                </h4>
              </div>
              <div class="row mb-2 align-items-center">
                <div class="col">
                  <a class="system-icon" href="epicor.php" data-toggle="tooltip" data-placement="bottom"
                    title="Epicor System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/epicor.jpg') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="dynamics.php" data-toggle="tooltip" data-placement="bottom"
                    title="Dynamics System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/dynamics.png') }}" />
                  </a>
                </div>
                <div class="col text-center">
                  <a class="system-icon" href="infor.php" data-toggle="tooltip" data-placement="bottom"
                    title="Infor System Info">
                    <img class="img-fluid" style="max-height: 100px;" src="{{ resource('img/logos/syteline.png') }}" />
                  </a>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <a class="system-icon" href="globalshop.php" data-toggle="tooltip" data-placement="bottom"
                    title="GlobalShop System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/globalshop.png') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="iqms.php" data-toggle="tooltip" data-placement="bottom"
                    title="IQMS System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/iqms.png') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="traverse.php" data-toggle="tooltip" data-placement="bottom"
                    title="Traverse System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/traverse.png') }}" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3 px-2">
            <div class="col-12">
              <div class="row mb-1">
                <h4 class="col text-center">
                  Entry Level ERP Systems
                </h4>
              </div>
              <div class="row align-items-center">
                <div class="col text-center">
                  <a class="system-icon" href="e2.php" data-toggle="tooltip" data-placement="bottom"
                    title="E2 Mfg Info">
                    <img class="img-fluid" style="max-height: 75px;" src="{{ resource('img/logos/e2.png') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="https://www.pragmaticdba.com/" data-toggle="tooltip"
                    data-placement="bottom" title="DBA Manufacturing Info">
                    <img class="img-fluid" src="{{ resource('img/logos/dba-mfg-new-removebg.png') }}" />
                  </a>
                </div>
                <div class="col">
                  <a class="system-icon" href="fishbowl.php" data-toggle="tooltip" data-placement="bottom"
                    title="Fishbowl System Info">
                    <img class="img-fluid" src="{{ resource('img/logos/fishbowl.png') }}" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3 px-2">
            <div class="col-12 text-center">
              <div class="row align-items-center align-items-lg-start align-items-xl-center">
                <div class="col">
                  <img class="img-fluid" style="max-height: 80px"
                    src="{{ resource('img/logos/intuit-quickbooks-proadvisor-removebg.png') }}"
                    alt="Intuit Quickbooks ProAdvisor" />
                </div>
                <h4 class="col pt-1 pt-lg-2 pt-xl-1 text-center">
                  ERP Integration
                </h4>
              </div>
            </div>
          </div>
        </section>
      </article>
    </section>
    <section class="col-12 col-lg-7 order-2 order-lg-1">
      <article class="card" data-aos="fade-right">
        <section class="card-body">
          <h4>
            ERP & IT Systems Software Knowledge
          </h4>
          <p>
            We have expertise in diverse ERP applications and a thorough competitive knowledge of all of the major
            current product offerings such as DBA Manufacturing, Epicor, Fishbowl, Global Shop, Infor's Syteline, JD
            Edwards, Made2Manage, Microsoft Dynamics, Oracle, SAP, SysPro, Traverse, Visual Manufacturing, and others.
            With the hundreds of packages on the market, we would be wary of any consulting company that professes to
            know them all thoroughly. Many packages have some similar characteristics and some very important
            distinctions that should be understood. A thorough understanding of your organization, coupled with an
            understanding of the desired characteristics, will increase the probability of success.
          </p>
          <h4>
            Systems Selection
          </h4>
          <ul>
            <li>
              Through Pragmatic’s proven methodology we assess the characteristics of your organization, business
              processes, and unique operational needs.
            </li>
            <li>
              We have performed application assessments in the supply chain and business-to-business areas. These
              assessments included a complete review of the business, functional and technical areas of the software
              providers.
            </li>
            <li>
              Prior to the ERP applications, we have extensive experience implementing various MRP and other business
              applications for organizations, with multiple domestic and global business units and suppliers.
            </li>
          </ul>
        </section>
        <aside class="card-footer">
          <strong>
            For more information on our Evaluation and ERP Selection services, <a href="contact.php">get in touch</a>.
          </strong>
        </aside>
      </article>
    </section>
  </div>
  <div class="row justify-content-center">
    <section class="col-auto">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <div class="row justify-content-around align-items-center mx-lg-5">
            <div class="col-12 pb-3 text-center">
              <h3>
                Strategic Alliances
              </h3>
            </div>
            <div class="col-12 col-lg-auto text-center pb-3">
              <img class="img-fluid" id="datto-logo" src="{{ resource('img/logos/datto.png') }}" />
            </div>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
