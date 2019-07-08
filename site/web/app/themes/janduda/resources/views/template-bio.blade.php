{{--
  Template Name: Bio
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => App\get_thumb_url() ?? App\asset_path('images/bio.jpg'),
      'size'  => 'is-large'
    ))
    @include('pages.bio.details')    
    @include('pages.bio.achievements')
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
