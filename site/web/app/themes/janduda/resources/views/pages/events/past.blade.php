<section class="section is-medium events">
  <header class="is-spacer is-small">
    <div class="container">
      <h2 class="title is-2 has-text-weight-bold has-text-dark">Przeszłe</h2>
    </div>
  </header>

  <div class="container">
    <div class="event-list">
      @for ($i = 0; $i < 6; $i++)
      <div class="event event--overview">
        <h5 class="columns is-mobile">
          <time class="event__date column has-text-grey">
            15.04.2019
          </time>
          <span class="event__city column">
            St. Petersburg
          </span>
        </h5>
        <h3 class="event__title is-size-5 has-text-grey has-text-weight-semibold">
          Indywidualne mistrzostwa Świata w szachach błyskawicznych
        </h3>
        <img
          src="https://www.tygodnikprzeglad.pl/wp-content/uploads/2015/11/jan-krzysztof-duda-800x500_c.jpg"
          alt="JKD"
          class="event__image"
        >
        <a href="#" class="event__link">Więcej</a>
      </div>
      @endfor
    </div>
    
    <div class="section no-padding-bottom has-text-centered">
      <a class="button is-large is-text">
        <span>Zobacz więcej</span>
      </a>
    </div>

  </div>
</section>