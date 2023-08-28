<template>
  <div
    id="carouselShowcase"
    class="carousel slide carousel-fade mb-3 mx-auto px-0"
    data-ride="carousel"
    data-interval="3500"
  >
    <div class="carousel-inner">
      @component('components.carousel', ['carousel_items' => $carousel_obj->getItems()]) @endcomponent
    </div>
    <a class="carousel-control-prev" href="#{{ id }}" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{{ id }}" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</template>

<script>
export default {
  props: {
    id: {
      type: String,
      required: true,
    },
  },

  mounted() {
    console.log("Component mounted.");
  },
};
</script>
