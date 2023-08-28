@extends('layouts.com')

@section('content-id', 'our-clients')
@section('content-title', 'Our Clients')

@section('content-body')
  <div class="row justify-content-center">
    @foreach ($clients as $client)
      <section class="col-card-client">
        @component('components.card-client', ['img' => url($client->getLogoSrc())])
          {{ $client->name }}
        @endcomponent
      </section>
    @endforeach
  </div>
  <div class="row">
    <section class="col-12">
      <article class="card">
        <section class="card-body">
          <div class="d-flex flex-row justify-content-around">
            <div class="lead align-self-center">Let Pragmatic work with your team to win!</div>
            <a class="btn btn-prag align-self-center" role="button" href="contact.php">Contact us</a>
          </div>
        </section>
      </article>
    </section>
  </div>
@endsection
