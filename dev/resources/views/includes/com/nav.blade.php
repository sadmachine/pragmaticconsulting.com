{{-- /resources/views/includes/com/nav.blade.php --}}

<div class="container">
  <div class="row nav-row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand d-none d-lg-block align-self-end" href="/home">
          <img class="img-fluid" src="{{ asset('img/blacklogo-nobg.png') }}"
               alt="Pragmatic Consulting, Inc. Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-self-end" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}"><span class="nav-content">Home</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                <a class="dropdown-item" href="{{ url('/overview.php') }}">
                  <span class="dropdown-content">
                    Overview
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/news-and-events.php') }}">
                  <span class="dropdown-content">
                    News & Events
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/location.php') }}">
                  <span class="dropdown-content">
                    Locations
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="leadershipDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                Leadership
              </a>
              <div class="dropdown-menu" aria-labelledby="leadershipDropdown">
                <a class="dropdown-item" href="{{ url('/officers.php') }}">
                  <span class="dropdown-content">
                    Officers
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/board-of-advisors.php') }}">
                  <span class="dropdown-content">
                    Board of Advisors
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/meet-our-team.php') }}">
                  <span class="dropdown-content">
                    Meet Our Team
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                <a class="dropdown-item" href="{{ url('/overview.php') }}">
                  <span class="dropdown-content">
                    Business Strategy
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/engineering-consulting.php') }}">
                  <span class="dropdown-content">
                    Engineering Consulting
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/human-capital.php') }}">
                  <span class="dropdown-content">
                    Human Capital
                  </span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/interim-executive.php') }}">
                  <span class="dropdown-content">
                    Interim Executive
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/ceo-coo.php') }}">
                  <span class="dropdown-content">
                    CEO/COO
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/chro.php') }}">
                  <span class="dropdown-content">
                    CHRO
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/cfo.php') }}">
                  <span class="dropdown-content">
                    CFO
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/cio-cto.php') }}">
                  <span class="dropdown-content">
                    CIO/CTO
                  </span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/it-and-systems.php') }}">
                  <span class="dropdown-content">
                    IT & Systems
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/lean-six-sigma.php') }}">
                  <span class="dropdown-content">
                    Lean/Six Sigma
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/project-management.php') }}">
                  <span class="dropdown-content">
                    Project Management
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/quality-systems.php') }}">
                  <span class="dropdown-content">
                    Quality Systems
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/sales-and-marketing.php') }}">
                  <span class="dropdown-content">
                    Sales & Marketing
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/security.php') }}">
                  <span class="dropdown-content">
                    Security
                  </span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/supply-chain.php') }}">
                  <span class="dropdown-content">
                    Supply Chain
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/import-export.php') }}">
                  <span class="dropdown-content">
                    Import/Export
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/compliance.php') }}">
                  <span class="dropdown-content">
                    Compliance
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ url('/global-supply-chain.php') }}">
                  <span class="dropdown-content">
                    Global Supply Chain
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu" aria-labelledby="portfolioDropdown">
                <a class="dropdown-item" href="{{ url('/industries.php') }}">
                  <span class="dropdown-content">
                    Industries
                  </span>
                </a>
                <a class="dropdown-item" href="{{ url('/our-clients.php') }}">
                  <span class="dropdown-content">
                    Our Clients
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link contact" href="{{ url('/contact.php') }}"><span
                      class="nav-content">Contact</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
