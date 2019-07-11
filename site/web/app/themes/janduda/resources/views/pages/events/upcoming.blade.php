<section class="section is-medium events events--stack">
  <header class="is-spacer is-small">
    <div class="container">
      <h2 class="title is-2 has-text-weight-bold">Nadchodzące</h2>
    </div>
  </header>

  <div class="container">
    <list-posts
      :list="{{ $upcoming_events }}"
      api-url="/wp-json/slvr/v1/upcoming-events"
      class="list-wrapper--upcoming"
    >      
      <template v-slot:default="{ list }">
        <event-card
          v-for="event in list"
          :key="event.id"
          :event="event"
          type="upcoming"
        >
        </event-card>
      </template>
    </list-posts>
  </div>
</section>