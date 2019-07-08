<template>
  <div class="events">
    <b-tabs v-model="activeTab" :animated="false" type="is-toggle">
      <b-tab-item label="Nadchodzące">
        <div class="list-wrapper list-wrapper--upcoming">
          <div class="list">
            <slot name="upcoming"/>
          </div>
        </div>
      </b-tab-item>
      <b-tab-item label="Przeszłe">
        <div class="list-wrapper">
          <div class="list">
            <slot name="past"/>
          </div>
        </div>
      </b-tab-item>
    </b-tabs>
  </div>
</template>

<script>
export default {
  data() {
    return {
      activeTab: 0,
    }
  },
}
</script>

<style scoped>
.events ::v-deep .tab-content {
  padding: 0;
}
</style>
