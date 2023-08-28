@extends('layouts.com')

@section('content-id', 'project-management')
@section('content-title', 'Project Management')

@section('content-body')
  <div class="row">
    <section class="col-12">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <div class="row">
            <div class="col-12 col-lg-9 col-xl-10 order-2 order-lg-1">
              <p class="lead">
                <span class="text-prag">Pragmatic</span> has an impressive track record of providing
                <strong>effective</strong> and <strong>cost efficient</strong> project management approaches and
                consulting solutions to our clients. We ensure that many of the traditional barriers and pitfalls to
                project success are overcome, and have the capabilities and resources to drive your projects to
                completion. Our team has the expertise to mentor and train your staff in the formal methodologies needed
                for success.
              </p>
              <a href="contact.php" class="btn btn-prag" role="button">Get in touch</a>
            </div>
            <div class="col-12 col-lg-3 col-xl-2 order-1 order-lg-2">
              @component('components/icon-group')
                @slot('id')
                  project-management-icon-group
                @endslot
                @slot('icon_top_left')
                  <i class="fas fa-chalkboard-teacher fa-fw"></i>
                @endslot
                @slot('icon_top_right')
                  <i class="fas fa-tasks fa-fw"></i>
                @endslot
                @slot('icon_bottom_left')
                  <i class="fas fa-project-diagram fa-fw"></i>
                @endslot
                @slot('icon_bottom_right')
                  <i class="fas fa-users fa-fw"></i>
                @endslot
              @endcomponent
            </div>
          </div>
        </section>
      </article>
    </section>
    <section class="col-12 col-lg-8">
      <article class="card" data-aos="fade-up">
        <section class="card-body">
          <p>
            At <span class="text-prag">Pragmatic</span>, we find that many organizations experience significant
            disconnects between expectations set for strategic initiatives and actual outcomes. These disconnects often
            come from misalignment of tactical plans and execution strategy. Successful organizations utilize formal
            project management practices and techniques to focus and link work activities throughout the organization.
          </p>
          <p>
            In today’s competitive business environment companies must be able to deliver the benefits of critical
            projects in a timely and cost-effective manner. It is vital for most organizations to ensure that people are
            working on the right things and that management is confident there are mechanisms in place to track progress
            and results.
          </p>
          <p>
            In our experience many Six Sigma implementation projects run into difficulties because the critical players
            received no formal training in managing projects utilizing some form of project management tools and
            techniques.
          </p>
          <p>
            We utilize consultants who are certified project management professionals and have “hands on” experience
            bringing project management into organizations, and we understand how to adapt our approach to the specific
            needs of the project and the organization.
          </p>
          <p>
            If you need a team of experts to develop and provide assistance executing a plan or simply interim resources
            or support to keep your projects “on-track”, you can trust Pragmatic’s professionals to achieve your goals.
          </p>
        </section>
        <aside class="card-footer">
          <strong>
            For more information on our Project Management services, please visit our <a href="contact.php">contact
              page</a>.
          </strong>
        </aside>
      </article>
    </section>
    <section class="col-12 col-lg-4">
      <article class="card card-compact" data-aos="fade-up">
        <h4 class="card-header">Related Pages</h4>
        <section class="card-body">
          <div class="related-pages">
            <a class="btn btn-prag" role="button" href="human-capital.php">Human Capital</a>
            <a class="btn btn-prag" role="button" href="interim-executive.php">Interim Executive</a>
            <a class="btn btn-prag" role="button" href="it-and-systems.php">IT & Systems</a>
            <a class="btn btn-prag" role="button" href="supply-chain.php">Supply Chain</a>
            <a class="btn btn-prag" role="button" href="lean-six-sigma.php">Lean/Six Sigma</a>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
