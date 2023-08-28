@extends('layouts.com')

@section('content-id', 'supply-chain-examples')
@section('content-title', 'Supply Chain, Warehouse Management and Automation')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <a id="aftermarket-distribution-warehouse"></a>
          <p class="monial">
            Pragmatic Consulting, Inc. is a full service consulting firm specializing in operational and organizational
            continuous improvement. Our professionals and technical services provide measurable results to our clients. In
            today's global marketplace staying competitive often requires investment, time and effort. Pragmatic supplies
            the expertise needed to transform operations, processes, and organizations to world class levels. In supply
            chain management we have successfully achieved, for our customers, more responsive "time to market", improved
            quality as well as significant waste reduction. Here's an example:
          </p>
          <p class="monial">
            Recently we managed a continuous improvement project for a Massachusetts company that consolidated two product
            aftermarket and OEM parts and service inventory warehouses into one. Using Pragmatic's "Lean Warehouse"
            techniques we: coordinated the inventory transfer, installed ergonomic equipment, implemented systems
            integration, and improved quality and inventory accuracy. Additionally, Pragmatic designed and laid out a
            "state of the art" warehouse resulting in improved flow of processes and material.
          </p>
          <img src="{{ asset('img/scwm.png') }}" alt="" width="100%" />
          <p class="monial">But we did not just design! We project managed, and implemented the solution!</p>

          <p><b>Including:</b></p>
          <ul style="line-height: 1.25em;">
            <li>Established Warehouse Management Best Practices</li>
            <li>Changed facility layout and organization</li>
            <li>Measured Warehouse Utilization in Cubic ft. and now # of shelves</li>
            <li>Changed from fixed locations</li>
            <li>Implemented Inventory Management techniques including ABC integration</li>
            <li>Automated Processes (including automated stacking system)</li>
            <li>Designed and installed Wireless access point and antennas</li>
            <li>Bar Coded the entire facility</li>
            <li>Improved material flow</li>
            <li>Planned for Growth</li>
            <li>Project Managed</li>
          </ul>

          <a id="moving-storage-lean-warehouse"></a>
          <img src="{{ asset('img/scwm1.png') }}" alt="" style="width: 100%; height: 750px;" />

          <p><b>Resulting In: </b></p>
          <ul style="line-height: 1.25em;">
            <li>Increased Productivity by 40%</li>
            <li>Reduced costs</li>
            <li>Increased throughput </li>
            <li>Increased inventory accuracy</li>
            <li>Improved profitability </li>
            <li>Improved core competencies </li>
          </ul>

          <h4>Testimonials</h4>
          <div class="row justify-content-around">
            <blockquote class="blockquote testimonial col-12 col-lg-5">
              <p class="mb-0">Thanks to the help of the Pragmatic Consulting team, our process is running more
                efficiently
                than
                ever before</p>
              <footer class="blockquote-footer">Paul Hurtig <cite title="Vice President of Operations">Vice President of
                  Operations</cite></footer>
            </blockquote>
            <blockquote class="blockquote testimonial col-12 col-lg-5">
              <p class="mb-0">We never could have done this project without Pragmatic </p>
              <footer class="blockquote-footer">Russ Grenier <cite title="Facilities Manager">Facilities Manager</cite>
              </footer>
            </blockquote>
          </div>

          <p class="monial"></p>

          <div class="row justify-content-between align-items-center">
            <div class="col-12 col-sm-8">
              <p>
                <b>Note: ValuTrack</b> is one of our Strategic Associates who have experience in technology equipment
                such as: RFID, Barcoding, Scanners, Wireless technology, and more. <br />
                For more information click on their logo.
              </p>
            </div>
            <div class="col-12 col-sm-4">
              <a href="http://www.valutrack.com/"> <img src="{{ asset('img/logos/Valutrack-logo.png') }}"
                     alt="ValuTrack" class="img-fluid" style="text-align: right;" /></a>
            </div>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
