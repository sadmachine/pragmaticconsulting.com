{{-- /resources/views/includes/com/nav.blade.php --}}

<div class="container">
  <div class="row nav-row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand d-none d-lg-block align-self-end" href="{{ route('home', env('ROUTE_EXT', '')) }}">
          <img class="img-fluid" src="{{ resource('img/blacklogo-nobg.png') }}" alt="Pragmatic Consulting, Inc. Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-self-end" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home', env('ROUTE_EXT', '')) }}"><span
                  class="nav-content">Home</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                <a class="dropdown-item" href="{{ route('overview', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Overview
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('news-and-events', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    News & Events
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('location', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Locations
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="leadershipDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Leadership
              </a>
              <div class="dropdown-menu" aria-labelledby="leadershipDropdown">
                <a class="dropdown-item" href="{{ route('officers', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Officers
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('board-of-advisors', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Board of Advisors
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('meet-our-team', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Meet Our Team
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                <a class="dropdown-item" href="{{ route('overview', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Business Strategy
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('engineering-consulting', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Engineering Consulting
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('human-capital', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Human Capital
                  </span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('interim-executive', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Interim Executive
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('ceo-coo', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    CEO/COO
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('chro', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    CHRO
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('cfo', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    CFO
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('cio-cto', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    CIO/CTO
                  </span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('it-and-systems', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    IT & Systems
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('lean-six-sigma', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Lean/Six Sigma
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('project-management', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Project Management
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('quality-systems', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Quality Systems
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('sales-and-marketing', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Sales & Marketing
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('security', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Security
                  </span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('supply-chain', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Supply Chain
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('import-export', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Import/Export
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('compliance', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Compliance
                  </span>
                </a>
                <a class="dropdown-subitem" href="{{ route('global-supply-chain', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Global Supply Chain
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu" aria-labelledby="portfolioDropdown">
                <a class="dropdown-item" href="{{ route('industries', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Industries
                  </span>
                </a>
                <a class="dropdown-item" href="{{ route('our-clients', env('ROUTE_EXT', '')) }}">
                  <span class="dropdown-content">
                    Our Clients
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link contact" href="{{ route('contact', env('ROUTE_EXT', '')) }}"><span
                  class="nav-content">Contact</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
