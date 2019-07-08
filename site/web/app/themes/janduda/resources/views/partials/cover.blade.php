<div class="cover">
  @empty($video)
    <div class="cover__photo" style="background-image: url('{{ $image }}')"></div>
  @else
    {{ $video }}
  @endisset
</div>