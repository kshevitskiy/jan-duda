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
      'image' => 'images/events.jpg'
    ))
    @include('pages.events.upcoming')
    @include('pages.events.past')
    <hr>
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection