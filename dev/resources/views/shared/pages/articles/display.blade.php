@extends('layouts.com')

@section('content-id', $article->getLocation())
@section('content-title', $article->title)

@section('content-body')
  <div class="row">
    <div class="col">
      <article class="card">
        <section class="card-body">
          {!! $article->getContent() !!}
        </section>
      </article>
    </div>
  </div>
@endsection
