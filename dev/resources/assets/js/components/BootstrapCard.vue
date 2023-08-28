<template>
  <div class="card">
    <div v-html="title" class="card-header"></div>
    <div class="card-body"><slot></slot></div>
    <div v-if="hasFooterSlot" class="card-footer">
      <slot name="footer"></slot>
    </div>
    <div v-else v-html="footer" class="card-footer"></div>
  </div>
</template>

<script>
export default {
  props: ["title", "footer"],
  mounted() {
    console.log("Component mounted.");
  },
  computed: {
    hasFooterSlot() {
      return !!this.$slots.footer;
    },
  },
};
</script>
