<div class="hero is-black is-relative {{ $size or 'is-large' }}">
  <div class="hero-body">
    @if(!empty($image) || !empty($video))
      @include('partials.cover', array(
        'image' => $image ?? '',
        'video' => $video ?? array()
      ))
    @endif
    <div class="container">      
      @empty($slot)
        <h1 class="title has-text-centered is-display-1 has-text-weight-black">
          {!! App::title() !!}
        </h1>
      @else
        {{ $slot }}
      @endempty
    </div>
  </div>
</div>