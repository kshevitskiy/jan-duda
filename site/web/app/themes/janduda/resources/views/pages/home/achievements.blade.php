@php
  $achievements = get_field('achievements_posts');
@endphp

@if( $achievements )
<section class="hero is-medium is-black is-relative">
  @include('partials.cover', array(
    'image' => App\asset_path('images/home-2.jpg')
  ))
  <div class="hero-body">
    <header class="section-header">
      <div class="container">
        <h2 class="title is-2">Najważniejsze<br> osiągnięcia szachowe</h2>
      </div>
    </header>

    <div class="container">
      <div class="columns">
        <div class="column is-8-tablet is-6-fullhd">
          @foreach ($achievements as $item)
            @php
              $year = date('Y', strtotime(get_field('achievement_date', $item->ID)));
            @endphp
            <div class="card achievement-card">
              <div class="card-content">
                <div class="columns">
                  <div class="column is-8 is-9-widescreen">
                    <h3 class="achievement-card__title">
                      {{ get_field('achievement_prize', $item->ID) }}
                    </h3>
                    <div class="achievement-card__content">
                      <p>
                        {{ get_the_title($item->ID) }}
                      </p>
                    </div>
                  </div>
                  <div class="column is-4 is-3-widescreen">
                    <div class="achivement-card-meta">
                      <p class="achivement-card-meta__city">
                        {{ get_field('achievement_city', $item->ID) }}
                      </p>
                      <p class="achivement-card-meta__year">
                        {{ $year }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      @if( get_field('achievements_button_label') && get_field('achievements_button_link') )
        <a href="{{ the_field('achievements_button_link') }}" class="button is-primary is-large">
          {{ the_field('achievements_button_label') }}
        </a>
      @endif
    </div>
  </div>
</section>
@else
{{-- Nothing found --}}
@endif