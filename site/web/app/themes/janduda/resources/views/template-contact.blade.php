{{--
  Template Name: Contact
--}}

@php
  $contact_person = [
    'photo' => get_field('person_photo'),
    'name' => get_field('person_name'),
    'job' => get_field('person_job_position'),
    'email' => get_field('person_email'),
    'tel' => get_field('person_tel')
  ];
  $contact_form_shortcode = get_field('contact_form_shortcode');
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => App\get_thumb_url() ?? App\asset_path('images/home.jpg'),
      'size'  => 'is-medium'
    ))
    @include('pages.contact.credentials', [
      'person' => $contact_person,
      'form'   => $contact_form_shortcode
    ])
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
