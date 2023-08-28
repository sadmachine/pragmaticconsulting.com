@extends('layouts.com-profile')

@section('content-id', 'board-of-advisors')
@section('content-title', 'Board of Advisors')

@section('content-body')
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
