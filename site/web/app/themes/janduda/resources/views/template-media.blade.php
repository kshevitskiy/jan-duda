{{--
  Template Name: Media
--}}

@php
  $docs = get_field('docs');
  $gallery = get_field('media_gallery');
  $press_pack_file_url = get_field('press_pack_file_url');
  // $contact_person = [
  //   'photo' => get_field('person_photo'),
  //   'name' => get_field('person_name'),
  //   'job' => get_field('person_job_position'),
  //   'email' => get_field('person_email'),
  //   'tel' => get_field('person_tel')
  // ];
  // $contact_form_shortcode = get_field('contact_form_shortcode');
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => App\get_thumb_url() ?? App\asset_path('images/media.jpg'),
    ))
    @include('pages.media.downloads', [
      'docs' => $docs
    ])
    @include('pages.media.gallery', [
      'gallery' => $gallery,
      'press_pack' => $press_pack_file_url
    ])
    {{-- @include('pages.media.contact', [
      'person' => $contact_person,
      'form'   => $contact_form_shortcode
    ]) --}}
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
