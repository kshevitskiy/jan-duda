{{--
  Template Name: Bio
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => 'images/bio.jpg',
      'size'  => 'is-large'
    ))
    @include('pages.bio.general')
    <hr>
    @include('pages.bio.professional')
    @include('pages.bio.achievements')
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
