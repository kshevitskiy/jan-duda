<section class="hero is-medium is-black is-relative">
  @include('partials.cover', array(
    'image' => 'images/bio-2.jpg'
  ))
  <div class="hero-body no-padding-top">
    <header class="section no-padding-left no-padding-right">
      <div class="container">
        <h2 class="title is-2">Najważniejsze<br> osiągnięcia</h2>
      </div>
    </header>
    <div class="container">
      <div class="columns is-multiline">
        @for ($i = 0; $i < 12; $i++)
        <div class="column is-6-tablet is-4-widescreen is-3-fullhd">
          <div class="card is-transparent">
            <div class="attainment _attainment--featured">
              <div class="attainment-content">
                <h5 class="details">
                  <span class="details__city">
                    Warszawa
                  </span>
                  <span class="details__year">
                    2018
                  </span>
                </h5>
                <h4 class="attainment__title">
                  Indywidualne mistrzostwa Świata w szachach błyskawicznych 
                </h4>
                <h3 class="prize">
                  <span class="prize__label">I miejsce</span>
                  <sub class="prize__description">(6½/9)</sub>
                </h3>
              </div>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
</section>