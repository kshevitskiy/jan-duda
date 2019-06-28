<section class="section is-medium no-padding-bottom">
  <header class="section-header">
    <div class="container">
      <h2 class="title is-2">Wydarzenia....</h2>
    </div>
  </header>

  <div class="container">
    <div class="tabs is-toggle has-spacer">
      <ul>
        <li class="is-active">
          <a>Nadchodzące</a>
        </li>
        <li>
          <a>Przeszłe</a>
        </li>
      </ul>
    </div>

    <div class="columns is-multiline is-gapless no-margin-bottom">
      @for ($i = 0; $i < 3; $i++)      
      <div class="card event-card column is-12 is-4-desktop">
        <div class="card-header">
          <p class="event-card__city">
            St. Petersburg
          </p>
        </div>
        <div class="card-content">
          <p class="event-card__date">
            15.04.2019
          </p>
          <div class="event-card__content">
            <p>
              Indywidualne mistrzostwa Świata w szachach błyskawicznych
            </p>
          </div>
        </div>
      </div>
      @endfor
    </div>
    
    <div class="section no-padding-bottom has-text-centered">
      <a class="button is-large is-text">
        <span>Zobacz wszystkie</span>
      </a>
    </div>

  </div>
</section>