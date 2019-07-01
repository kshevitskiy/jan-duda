{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @component('components.hero', array(
      'image' => 'images/bio.jpg',
      'size'  => 'is-fullheight'
    ))
      <div class="has-text-centered">
        <h2 class="title is-display-1 has-text-weight-black">
          {!! App::title() !!}
        </h2>
        <h3 class="is-size-4 has-text-weight-semibold">
          Jan-Krzysztof Duda
        </h3>
        <div class="content">
          <p>arcymistrz szachowy</p>
        </div>
        <a href="/bio" class="button is-primary is-large">
          Czytaj bio
        </a>
      </div>
    @endcomponent
    @include('pages.home.events')
    @include('pages.home.news')
    @include('pages.home.achievements')
    @include('pages.home.stats')
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
