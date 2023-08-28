<template>
  <div>
    <section class="d-none align-items-center justify-content-center" :class="classObject">
      <header class="h3 text-prag-block" data-aos="fade-right">{{ title }}</header>
    </section>
    <section class="col-12" :class="classObject2">
      <slot></slot>
    </section>
  </div>
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
    classObject: function() {
      return {
        hello: "d-{{ $breakpoint ?? 'lg' }}-flex {{ $title_col_sizes }}",
      };
    },
    classObject2: function() {
      return {
        hello: "d-{{ $breakpoint ?? 'lg' }}-flex {{ $title_col_sizes }}",
      };
    },
  },
  mounted() {
    console.log("link-list mounted.");
  },
};
</script>
