@extends('layouts.com')

@section('content-id', 'contact')
@section('content-title', 'Contact Us')

@section('head')
  <link rel="stylesheet" href="{{ asset('intl-tel-input/css/intlTelInput.css') }}">
@endsection

@section('js')
  <script defer src="intl-tel-input/js/intlTelInput.min.js">
  </script>

  <script defer>
    $(function() {
      var input = document.querySelector("#phone");
      var iti = window.intlTelInput(input, {
        utilsScript: "intl-tel-input/js/utils.js"
      });

      function onSubmit(token) {
        $("#phone").val(iti.getNumber());
        document.getElementById("contactForm").submit();
      }
    });

    $("#contactForm").on("submit", function(e) {
      e.preventDefault();
      var self = $(this);
      $("#phone").val(iti.getNumber());
      $("#contactForm").off("submit");
      self.submit();
    });
  </script>
@endsection

@section('content-body')
  <div class="row  justify-content-around">
    <section class="col-12  col-lg-3  order-lg-2  pr-lg-0">
      <article class="card p-0" data-aos="fade-in">
        <section class="card-body">
          <div class="row  justify-content-start  text-center" data-aos="fade-in">
            <div class="col-6  col-lg-12">
              <a class="d-block  mb-1  btn  btn-lg  btn-prag" href="tel:+1-603-431-4461"><i class="fas  fa-phone"></i>
                Call us
              </a>
              <a class="small" href="tel:+1-603-431-4461">
                (603) 431-4461
              </a>
            </div>
            <div class="col-6  col-lg-12  pt-lg-3">
              <a class="d-block  mb-1  btn  btn-lg  btn-prag" href="mailto:inquiries@pragmaticconsulting.com">
                <i class="fas  fa-envelope"></i> Email us
              </a>
              <a class="small" href="mailto:inquiries@pragmaticconsulting.com">
                {!! $contact_email !!}
              </a>
            </div>
          </div>
        </section>
      </article>
    </section>
    <section class="col-12  col-lg  order-lg-1">
      <article class="card" data-aos="fade-in">
        <section class="card-body">
          <h3 class="sans-serif mb-2">We'd love to hear more about your business needs.</h3>
          <p class="sans-serif">Get in touch to learn what Pragmatic Consulting can do for you.</p>
          <div id="contactErrors">
            @foreach ($errors as $error)
              {{ $error }}
            @endforeach
          </div>
          <form id="contactForm" class="form-style-8" action="" method="post">
            <div class="form-group">
              <label for="name">Name *</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
            </div>
            <div class="form-row">
              <div class="form-group  col-md-6">
                <label for="company">Company *</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="ABC Corporation"
                       required>
              </div>
              <div class="form-group  col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Director of Sales">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group  col-12  col-md-6  col-lg-12  col-xl-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com" required>
              </div>
              <div class="form-group  col-12  col-md-6  col-lg-12  col-xl-6">
                <label for="telephone">Telephone *</label>
                <input type="tel" class="form-control" id="phone" name="telephone" required>
              </div>
            </div>
            <legend><strong>Message *</strong></legend>
            <div class="form-group">
              <textarea class="form-control" id="message" name="message" placeholder="How can we help?"></textarea>
            </div>
            <div class="form-group  mb-0">
              <button class="g-recaptcha  btn  btn-prag  px-4  py-2"
                      data-sitekey="6LfPG70ZAAAAAEEDYMu7fV0pVSvIGzJZDfF-HhGA" data-callback='onSubmit'
                      data-action='submit'>Submit</button>
            </div>
          </form>
        </section>
      </article>
    </section>
  </div>
@endsection

@section('js')
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
    function onSubmit(token) {
      document.getElementById("contactForm").submit();
    }
  </script>
@endsection
