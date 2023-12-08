@extends('layouts.com')

@section('content-id', 'article-unknown')
@section('content-title', 'Oops!')

@section('content-body')
  <div class="row">
    <div class="col">
      <article class="card">
        <section class="card-body">
          We are unable to find the article you have requested. Please try a different article.
        </section>
      </article>
    </div>
  </div>
@endsection
