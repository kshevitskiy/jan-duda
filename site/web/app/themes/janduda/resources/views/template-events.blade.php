{{--
  Template Name: Events
--}}
@php
  $events = array();
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => App\get_thumb_url() ?? App\asset_path('images/events.jpg')
    ))
    @include('pages.events.upcoming')
    @include('pages.events.past')
    <hr>
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection