<template>
  <div class="green-button-container">
    <a class="green-button" v-bind:href="link">{{ text }}</a>
  </div>
</template>

<script>
export default {
  props: {
    text: String,
    link: String,
  },
};
</script>

<style>
.green-button-container {
  margin-bottom: 3rem;
}

.green-button {
  background-color: #00baae;
  border-radius: 0.4rem;
  color: white;
  padding-left: 2rem;
  padding-right: 2rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
  margin-bottom: 2rem;
}
</style>