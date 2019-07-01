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
          style="background-image: url('@asset($image)')"
          data-image="@asset($image)"
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
        <button class="action is-primary">
          <span class="action__label">Pobierz pełną galerię</span>
          <i class="action__icon icon is-medium icon-zip-file-download"></i>
        </button>
      </div>
    </div>
  </div>
</section>