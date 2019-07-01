<section class="section is-medium events events--stack">
  <header class="is-spacer is-small">
    <div class="container">
      <h2 class="title is-2 has-text-weight-bold">Nadchodzące</h2>
    </div>
  </header>

  <div class="container">
    <div class="event-list event-list--upcoming">
      @for ($i = 0; $i < 3; $i++)
      <div class="event event--upcoming">
        <h5 class="columns is-mobile">
          <time class="event__date column is-size-3 has-text-primary">
            15.04.2019
          </time>
          <span class="event__city column">
            St. Petersburg
          </span>
        </h5>
        <h3 class="event__title is-size-5 has-text-dark has-text-weight-semibold">
          Indywidualne mistrzostwa Świata w szachach błyskawicznych
        </h3>
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