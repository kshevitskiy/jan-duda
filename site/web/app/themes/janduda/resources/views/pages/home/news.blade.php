@php
  $args = [
    'posts_per_page' => 3
  ];
  $posts = App\map_posts($args);
  $featured = App\get_first($posts);
@endphp

@if($posts)
<section class="section is-medium">
  <header class="section-header">
    <div class="container">
      <h2 class="title is-2">Aktualności</h2>
    </div>
  </header>

  <div class="container">
    <div class="columns is-multiline">
      <div class="column is-12 is-6-desktop">
        <div class="card news-card news-card--featured">
          <div class="card-content">
            <p class="news-card__date">
              {{-- 25.03.2019 --}}
              {{ get_the_date('d.m.Y', $featured->ID) }}
            </p>
            <h3 class="news-card__title">
              {{-- Polak wicemistrzem świata w szachach błyskawicznych. --}}
              {{ get_the_title($featured->ID) }}
            </h3>
            <div class="news-card__content">
              <p>
                {!! get_the_excerpt($featured->ID) !!}
                {{-- Jan-Krzysztof Duda (MKS MOS Wieliczka) zdobył w Sankt Petersburgu tytuł wicemistrza świata w szachach błyskawicznych. Zwyciężył aktualny czempion w wersji klasycznej... --}}
              </p>
            </div>
            <a href="{{ get_the_permalink($featured->ID) }}" class="news-card__link">
              Czytaj więcej
            </a>
          </div>
        </div>
      </div>

      <div class="column is-12 is-6-desktop">
        @foreach($posts as $key => $post)
        @if($key > 0)
          <div class="card news-card">
            <div class="card-content">
              <p class="news-card__date">
                {{-- 04.11.2018 --}}
                {{ get_the_date('d.m.Y', $post->ID) }}
              </p>
              <h3 class="news-card__title">
                {{ get_the_title($post->ID) }}
                {{-- Panie Duda, czy jest pan geniuszem? --}}
              </h3>
              <div class="news-card__content">
                <p>
                  {!! get_the_excerpt($post->ID) !!}
                  {{-- Ludzie uważają, że wybitny szachista musi być też człowiekiem superinteligentnym. Świetnym fizykiem, matematykiem itd... --}}
                </p>
              </div>
              <a href="{{ get_the_permalink($post->ID) }}" class="news-card__link">
                Czytaj więcej
              </a>
            </div>
          </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
</section>
@else
{{-- Nothing found --}}
@endif