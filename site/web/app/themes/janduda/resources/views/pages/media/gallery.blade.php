@if($gallery)
  <section class="section">
    <div class="container">
      <header class="section-header">
        @php
          $number = isset($docs) ? count($docs) + 1 : 0;
          $prefix = sprintf('%02d', $number);
        @endphp
        <h2>
          @component('components.heading')
            @slot('prefix')
              {{ $prefix }}
            @endslot
            Galeria
          @endcomponent
        </h2>
      </header>
      <div class="gallery has-background-black">
        <ul class="swiper-wrapper">
          @foreach ($gallery as $image)
          <li
            class="swiper-slide slide image is-16by9"
            style="background-image: url('{{ $image['url'] }}')"
            data-image="{{ $image['url'] }}"
          >
          </li>
          @endforeach
        </ul>
        <div class="navigation">
          <button class="prev"></button>
          <button class="next"></button>
        </div>
        <div class="swiper-pagination pagination"></div>
        <div class="gallery-actions">
          <button class="action download-image">
            <span class="action__label action__label--underlined">
              Pobierz zdjęcie
            </span>
          </button>
          @if($press_pack)
          <a href="{{ $press_pack }}" target="_blank" class="action is-primary">
            <span class="action__label">Pobierz pełną galerię</span>
            <i class="action__icon icon is-medium icon-zip-file-download"></i>
          </a>
          @endif
        </div>
      </div>
    </div>
  </section>
@endif