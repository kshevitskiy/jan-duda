<section class="section is-medium no-padding-bottom">
  <header class="section-header">
    <div class="container">
      <h2 class="title is-2">Wydarzenia</h2>
    </div>
  </header>

  <div class="container">
    <div class="tabs is-toggle">
      <ul>
        <li class="is-active">
          <a>Nadchodzące</a>
        </li>
        <li>
          <a>Przeszłe</a>
        </li>
      </ul>
    </div>

    <div class="event-list event-list--upcoming">
      @for ($i = 0; $i < 3; $i++)
      <div class="event event--upcoming">
        <div class="event__city">
          St. Petersburg
        </div>
        <div class="box is-shadowless no-padding-right no-padding-bottom">
          <time class="event__date">
            15.04.2019
          </time>
          <span class="is-spacer is-small"></span>
          <h3 class="event__title is-size-5">
            Indywidualne mistrzostwa Świata w szachach błyskawicznych
          </h3>
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