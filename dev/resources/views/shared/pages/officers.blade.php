@extends('layouts.com-profile')

@section('content-id', 'officers')
@section('content-title', 'Officers')

@section('content-body')
  <p>
    At Pragmatic Consulting, Inc. we know that success is a reflection of leadership. Our executive team offers
    expertise in a wide range of industries and services. Together our diverse backgrounds and experiences create a
    leadership team unlike any other. Our President and Principal Partners are committed to success through helping our
    client, not only reach, but far surpass their goals.
  </p>
  <div class="row profile-list justify-content-center">
    @foreach ($profiles as $profile)
      @component('components.profile.link')
        @slot('slug')
          {{ $profile->slug }}
        @endslot
        @slot('image')
          {{ asset($profile->getImgSrc()) }}
        @endslot
        @slot('name')
          {{ $profile->name }}
        @endslot
        @slot('title')
          {{ $profile->title }}
        @endslot
      @endcomponent
    @endforeach
  </div>
@endsection

@section('modals')
  @foreach ($profiles as $profile)
    @component('components.profile.target')
      @slot('slug')
        {{ $profile->slug }}
      @endslot
      @slot('image')
        {{ asset($profile->getImgSrc()) }}
      @endslot
      @slot('name')
        {{ $profile->name }}
      @endslot
      {!! $profile->content !!}
    @endcomponent
  @endforeach
@endsection
