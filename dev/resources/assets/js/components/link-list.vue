<template>
  <ul class="simple-list">
    <li v-for="item in items" :key="item.url" :class="[item.indented ? 'indented' : '']" class="simple-list__item link">
      <div class="d-flex flex-row">
        <span class="m-0 flex-fill">
          <a class="stretched-link" :href="item.url">{{ item.text }}</a>
        </span>
        <span><i class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
      </div>
    </li>
  </ul>
</template>

<script>
export default {
  props: {
    items: Array,
  },
  data: function() {
    return {
      portfolio_links: [],
    };
  },
  computed: {
    isIndented(item) {
      return item.indented;
    },
  },
  mounted() {
    console.log("link-list mounted.");
  },
};
</script>
