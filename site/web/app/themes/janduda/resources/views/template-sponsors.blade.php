{{--
  Template Name: Sponsors
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => App\get_thumb_url() ?? App\asset_path('images/sponsors.jpg')
    ))
    @include('pages.sponsors.list')
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
