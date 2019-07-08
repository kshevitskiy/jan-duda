<section class="hero is-medium is-black is-relative">
  @include('partials.cover', array(
    'image' => App\asset_path('images/bio-2.jpg')
  ))
  <div class="hero-body no-padding-top">
    <header class="section no-padding-left no-padding-right">
      <div class="container">
        <h2 class="title is-2">Najważniejsze<br> osiągnięcia</h2>
      </div>
    </header>
    <div class="container">
      <div class="columns is-multiline">
        @foreach ($achievements as $item)
        @php
          $isFeatured = get_field('achievement_is_featured', $item->ID);
          $year = date('Y', strtotime(get_field('achievement_date', $item->ID)));
        @endphp
        <div class="column is-6-tablet is-4-widescreen is-3-fullhd">
          <div class="card is-transparent is-full-height">
            <div class="{{ $isFeatured ? 'attainment attainment--featured' : 'attainment' }}">
              <div class="attainment-content">
                <h5 class="details">
                  <span class="details__city">
                    {{ get_field('achievement_city', $item->ID) }}
                  </span>
                  <span class="details__year">
                    {{ $year }}
                  </span>
                </h5>
                <h4 class="attainment__title">
                  {{ get_the_title($item->ID) }}
                </h4>
                <h3 class="prize">
                  <span class="prize__label">
                    {{ get_field('achievement_prize', $item->ID) }}
                  </span>
                  @if(get_field('achievement_comment', $item->ID))
                    <sub class="prize__description">
                      {{ get_field('achievement_comment', $item->ID) }}
                    </sub>
                  @endif
                </h3>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>