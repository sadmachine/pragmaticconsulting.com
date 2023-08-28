@extends('layouts.com')

@section('content-id', 'problem-solving')
@section('content-title', 'Problem Solving')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <p>
            Pragmatic believes that every organization can benefit from integrating systematic improvement processes
            throughout their operations. In accordance with the underlying principles of Continuous Improvement, most
            organizations want to engage employees to help manage processes, measure the effectiveness of the processes
            and ensure that the outputs from the processes meet internal or external customer requirements.
          </p>

          <p>
            Individuals, teams and organizations often need to adapt to new customer requirements or changes in the
            business environment. Capable companies need to excel at improving performance in today's turbulent operating
            environment and ensure that their employees have the necessary skills and competencies to assist in driving
            product and process improvements.
          </p>

          <p>
            The most recognizable and commonly adopted approach to systematic problem solving is contained within the
            traditional Plan-Do-Check-Act cycle. The PDCA approach is a powerful method to help teams systematically
            identify and resolve problems. This approach ensures that corrective measures are implemented when problems
            occur and that once resolved, the process remains in control and the improvement gains are maintained.
          </p>

          <p>
            Successful problem resolution can only be achieved by taking a systematic approach to studying the processes
            and understanding what is going on in the process and identifying the most important problems to work on. What
            is the best approach to improving quality while reducing cost and waste?
          </p>

          <p>
            In more mature organizations the tools and methodologies of "Lean and Six Sigma" are being implemented to
            great effect, but in some smaller organizations the 7-Step Model provides the most effective framework to
            implement an effective approach to "Problem Solving" as part of the PDCA cycle.
          </p>

          <div class='row'>
            <div class='col-md-6'>
              <div class='text-center'><img class='img-fluid' style='max-width: 100%; padding-right: 10%'
                     src="{{ asset('img/Problem Solving.jpg') }}" alt="Problem Solving"></div>
              <h4 class="mt-2">The 8 Steps to Problem Solving</h4>
              <ol>
                <li>Problem Clarification</li>
                <li>Problem Breakdown</li>
                <li>Target Setting</li>
                <li>Root Cause Analysis</li>
                <li>Developing Countermeasures</li>
                <li>Seeing Countermeasures Through</li>
                <li>Monitoring Process and Results</li>
                <li>Standardizing and Sharing Successful Practices</li>
              </ol>
            </div>
            <div class='col-md-6'>
              <div class='text-center'><img class='img-fluid' style='max-width: 62%;'
                     src="{{ asset('img/six-sigma.jpg') }}" alt="Six Sigma"></div>
              <h4 class="mt-2">The formal 7 step approach and the PDCA cycle</h4>
              <ol>
                <li>Define the Problem</li>
                <li>Confirm and Validate the Process</li>
                <li>Identify probable (root) causes</li>
                <li>Develop action Plan and Solutions</li>
                <li>Implement the Plan</li>
                <li>Monitor (Measure) the Results</li>
                <li>Verify Effective (Lessons Learned)</li>
              </ol>
            </div>
          </div>
          <hr class='my-1'>
          <p>
            Whether you are executing a Lean Implementation or a Lean Sigma, this approach is supplemented by training
            teams in the most commonly used tools used for each step of the process. When delivering this training to
            organizations, Pragmatic often encourages students to bring "real" problems to the classroom so that the
            tools can be applied in a practical manner that can yield immediate results.
          </p>
        </section>
        <aside class='card-footer text-center'>
          <strong>For more information on our Problem Solving services, please visit our <a href='contact.php'>contact
              page</a>.</strong>
        </aside>
      </article>
    </section>
  </div>
@endsection
