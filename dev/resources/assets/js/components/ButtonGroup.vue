<template>
  <div class="d-flex flex-row"></div>
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
