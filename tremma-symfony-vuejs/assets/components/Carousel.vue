<template>
  <div class="caroussel-container">
    <carousel>
      <slide> Slide 1 Content </slide>
      <slide> Slide 2 Content </slide>
      <slide> Slide 1 Content </slide>
      <slide> Slide 2 Content </slide>
    </carousel>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";

export default {
  components: {
    Carousel,
    Slide,
  },
  data() {
    return {
      madata: "OUIOUI",
    };
  },
};
</script>

<style>
.caroussel-container{
  margin-top: 5rem;
}
</style>