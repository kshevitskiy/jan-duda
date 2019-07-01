<section class="hero is-medium is-black is-relative">
  @include('partials.cover', array(
    'image' => 'images/home-2.jpg'
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
          @for ($i = 0; $i < 3; $i++)
          <div class="card achievement-card">
            <div class="card-content">
              <div class="columns">
                <div class="column is-8 is-9-widescreen">
                  <h3 class="achievement-card__title">
                    Srebrny medal
                  </h3>
                  <div class="achievement-card__content">
                    <p>
                      Indywidualne mistrzostwa Świata w szachach błyskawicznych
                    </p>
                  </div>
                </div>
                <div class="column is-4 is-3-widescreen">
                  <div class="achivement-card-meta">
                    <p class="achivement-card-meta__city">
                      St. Petersburg
                    </p>
                    <p class="achivement-card-meta__year">
                      2018
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor
        </div>
      </div>
      <a href="/" class="button is-primary is-large">
        Zobacz pełną listę
      </a>
    </div>
  </div>
</section>