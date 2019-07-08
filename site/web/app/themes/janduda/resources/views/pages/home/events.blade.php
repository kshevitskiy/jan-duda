<section class="section is-medium no-padding-bottom">
  <header class="section-header">
    <div class="container">
      <h2 class="title is-2">Wydarzenia</h2>
    </div>
  </header>

  <div class="container">
    <hello-world>
      <template v-slot:upcoming>
        @foreach($upcoming_events as $event)
        <div class="event-card event-card--upcoming">
          <div class="event-card__city">
            {{ get_field('event_city', $event->ID) }}
          </div>
          <div class="box is-shadowless no-padding-right no-padding-bottom">
            <time class="event-card__date">
              {{ get_field('event_date', $event->ID) }}
            </time>
            <span class="is-spacer is-small"></span>
            <h3 class="event-card__title is-size-5">
              {{ get_the_title($event->ID) }}
            </h3>
          </div>
        </div>
        @endforeach
      </template>
      <template v-slot:past>
        @foreach($past_events as $event)
        <div class="event event--upcoming">
          <div class="event-card__city">
            {{ get_field('event_city', $event->ID) }}
          </div>
          <div class="box is-shadowless no-padding-right no-padding-bottom">
            <time class="event-card__date">
              {{ get_field('event_date', $event->ID) }}
            </time>
            <span class="is-spacer is-small"></span>
            <h3 class="event-card__title is-size-5">
              {{ get_the_title($event->ID) }}
            </h3>
          </div>
        </div>
        @endforeach
      </template>      
    </hello-world>
    
    @if( get_field('events_button_label') && get_field('events_button_link') )
      <div class="section no-padding-bottom has-text-centered">
        <a href="{{ the_field('events_button_link') }}" class="button is-large is-text">
          {{ the_field('events_button_label') }}
        </a>
      </div>
    @endif

  </div>
</section>