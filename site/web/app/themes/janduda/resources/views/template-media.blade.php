{{--
  Template Name: Media
--}}
@php
  $docs = array(
    array(
      'link' => '#',
      'label' => 'Biografia'
    ),
    array(
      'link' => '#',
      'label' => 'Wywiady'
    ),
    array(
      'link' => '#',
      'label' => 'Osiągnięcia'
    ),
    array(
      'link' => '#',
      'label' => 'Artykuły'
    )
  );

  $gallery = array(
    'images/home.jpg',
    'images/bio.jpg',
    'images/media.jpg'
  )
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => 'images/media.jpg'
    ))
    @include('pages.media.downloads', array(
      'docs' => $docs
    ))
    @include('pages.media.gallery')
    @include('pages.media.contact')
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
