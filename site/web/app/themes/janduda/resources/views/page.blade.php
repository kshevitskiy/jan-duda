@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    @include('components.hero', array(
      'image' => get_the_post_thumbnail_url() ?? '',
      'size'  => 'is-medium'
    ))
    @include('partials.content-page')
  @endwhile
@endsection
