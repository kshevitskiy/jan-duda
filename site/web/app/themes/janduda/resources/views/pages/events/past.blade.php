<section class="section is-medium events">
  <header class="is-spacer is-small">
    <div class="container">
      <h2 class="title is-2 has-text-weight-bold has-text-dark">Przeszłe</h2>
    </div>
  </header>

  <div class="container">
    <list-posts :list="{{ $past_events }}">
      <template v-slot:default="{ list }">
        <event-card
          v-for="event in list"
          :key="event.id"
          :event="event"
          type="overview"
        >
        </event-card>
      </template>
    </list-posts>    
  </div>
</section>