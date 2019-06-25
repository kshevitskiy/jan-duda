{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('pages.home.intro')
    @include('pages.home.events')
    @include('pages.home.news')
    @include('pages.home.achievements')
    @include('pages.home.stats')
    @include('partials.content-page')
  @endwhile
@endsection
