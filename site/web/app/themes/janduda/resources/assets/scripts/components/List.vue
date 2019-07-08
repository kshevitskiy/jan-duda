<template>
  <div class="list-wrapper">
    <div class="list">
      <slot v-bind:list="list"></slot>
      <b-loading :is-full-page="false" :active.sync="isLoading" class="list-loader"></b-loading>
    </div>

    <div class="section has-text-centered">
      <button
        v-if="!isLastPage"
        :class="modifiers"
        class="button is-large is-text"
        :disabled="isLoading"
        @click.prevent="fetchPosts"
      >
        <span>Zobacz więcej</span>
      </button>
    </div>
    <pre>
      {{ page }}
    </pre>
  </div>
</template>

<script>
export default {
  props: {
    list: {
      type: [Object, Array],
      required: true,
    },
  },
  data() {
    return {
      events: [],
      error: false,
      isLoading: false,
      page: {
        total: 0,
        current: 1,
      },
    }
  },
  computed: {
    modifiers() {
      return [
        {
          'is-loading': this.isLoading,
        },
      ]
    },
    isLastPage() {
      return this.page.current === this.page.total
    }
  },
  mounted() {
    this.events = this.list
  },
  methods: {
    fetchPosts() {
      if (this.isLastPage) return
      this.isLoading = true
      this.page.current++
      fetch(`/wp-json/wp/v2/events?per_page=3&page=${this.page.current}`)
        .then(response => {
          this.page.total = Number(response.headers.get('x-wp-totalpages'))
          return response.json()
        })
        .then(data => {          
          this.events.push(...data)          
          this.error = false
          console.log('Data:', this.events)

          setTimeout(() => {
            this.isLoading = false
          }, 1 * 1000)
        })
        .catch(error => {
          this.error = true
          this.isLoading = false
        })
    },
  },
}
</script>
