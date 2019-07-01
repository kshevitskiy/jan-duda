{{--
  Template Name: Sponsors
--}}
@php
  $sponsors = array(
    array(
      'name'    => '4F',
      'logo'    => 'https://cdn.worldvectorlogo.com/logos/bmw-logo.svg',
      'content' => 'Donec rutrum posuere tempus. Vivamus dapibus massa sit amet elit viverra ultrices. Mauris pharetra sem quam, at dictum mi egestas ac. Maecenas id posuere mauris, ac tristique mi. Nullam orci tellus, fermentum id orci sit amet, efficitur semper eros. Nullam nisl nibh, auctor vel sem eu, laoreet sodales ipsum. Nam in mi arcu. Vestibulum mi mi, consectetur eget metus et, sodales tincidunt magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ),
    array(
      'name'    => 'Chess Clothes',
      'logo'    => 'https://cdn.worldvectorlogo.com/logos/bmw-logo.svg',
      'content' => 'Donec rutrum posuere tempus. Vivamus dapibus massa sit amet elit viverra ultrices. Mauris pharetra sem quam, at dictum mi egestas ac. Maecenas id posuere mauris, ac tristique mi. Nullam orci tellus, fermentum id orci sit amet, efficitur semper eros. Nullam nisl nibh, auctor vel sem eu, laoreet sodales ipsum. Nam in mi arcu. Vestibulum mi mi, consectetur eget metus et, sodales tincidunt magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ),
    array(
      'name'    => '4F',
      'logo'    => 'https://cdn.worldvectorlogo.com/logos/bmw-logo.svg',
      'content' => 'Donec rutrum posuere tempus. Vivamus dapibus massa sit amet elit viverra ultrices. Mauris pharetra sem quam, at dictum mi egestas ac. Maecenas id posuere mauris, ac tristique mi. Nullam orci tellus, fermentum id orci sit amet, efficitur semper eros. Nullam nisl nibh, auctor vel sem eu, laoreet sodales ipsum. Nam in mi arcu. Vestibulum mi mi, consectetur eget metus et, sodales tincidunt magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ),
    array(
      'name'    => 'Chess Clothes',
      'logo'    => 'https://cdn.worldvectorlogo.com/logos/bmw-logo.svg',
      'content' => 'Donec rutrum posuere tempus. Vivamus dapibus massa sit amet elit viverra ultrices. Mauris pharetra sem quam, at dictum mi egestas ac. Maecenas id posuere mauris, ac tristique mi. Nullam orci tellus, fermentum id orci sit amet, efficitur semper eros. Nullam nisl nibh, auctor vel sem eu, laoreet sodales ipsum. Nam in mi arcu. Vestibulum mi mi, consectetur eget metus et, sodales tincidunt magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    )
  )
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('components.hero', array(
      'image' => 'images/sponsors.jpg'
    ))
    @include('pages.sponsors.list', array(
      'sponsors' => $sponsors
    ))
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
