<template>
  <div
    :class="modifiers"
    class="event-card"
  >
    <h5 class="columns is-mobile">
      <time class="event-card__date column is-size-3 has-text-primary">
        {{ event.date }}
      </time>
      <span class="event-card__city column">
        {{ event.city }}
      </span>
    </h5>
    <h3 class="event-card__title is-size-5 has-text-dark has-text-weight-semibold">
      {{ event.title }}
    </h3>
    <img
      v-if="event.image"
      :src="event.image"
      :alt="event.title"
      class="event-card__image"
    >
    <a
      v-if="event.url"
      :href="event.url" class="event-card__link"
    >
      Więcej
    </a>
  </div>
</template>

<script>
export default {
  props: {
    event: {
      type: Object,
      required: true,  
    },
    type: {
      type: String,
      default: 'upcoming',
      validate: value => [
        'upcoming',
        'overview',
      ].includes(value),
    },
  },
  computed: {
    modifiers() {
      return [
        `event--${this.type}`,
      ]
    },
  },
}
</script>
