<template>
  <li class="simple-list__item link" v-bind:class="{ indented: isIndented }">
    <div class="d-flex flex-row">
      <span class="m-0 flex-fill">
        <a class="stretched-link" :href="url"><slot></slot></a>
      </span>
      <span><i class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
    </div>
  </li>
</template>

<script>
export default {
  props: {
    url: {
      type: String,
      required: true,
    },
    indented: {
      type: Boolean,
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
  computed: {
    isIndented() {
      return this.indented;
    },
  },
};
</script>
