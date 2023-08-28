@extends('layouts.com')

@section('content-id', 'news-and-events')
@section('content-title', 'News & Events')

@section('content-body')
  <div class="row">
    <section class="col-12 col-md-7">
      <article class="card" data-aos="fade-right">
        <header class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news"
                 aria-selected="true">
                News
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events"
                 aria-selected="false">
                Events
              </a>
            </li>
          </ul>
        </header>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
            <link-list :items="{{ $news_links }}"></link-list>
          </div>
          <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
            <link-list :items="{{ $event_links }}"></link-list>
          </div>
        </div>
      </article>
    </section>
    <section class="col-12 col-md-5">
      <article class="card card-compact" data-aos="fade-left">
        <div id="twitter_feed">
          <a class="twitter-timeline" data-height="650" href="https://twitter.com/Pragmatic_Inc?ref_src=twsrc%5Etfw">
            Tweets by Pragmatic_Inc
          </a>
          {{-- A script tag is added here programmatically on Vue.mounted(), see resources/assets/js/app.js --}}
        </div>
      </article>
    </section>
  </div>
@endsection
