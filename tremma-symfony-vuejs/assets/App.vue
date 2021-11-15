<template>
  <div class="main">
    <Header />
    <Fixed />
    <Carousel/>
    <HIW />
    <SupportProject />
    <FundedProjects />
    <Newsletter />
    <Footer />
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Fixed from "./components/Fixed.vue";
import HIW from "./components/HIW.vue";
import Footer from "./components/Footer.vue";
import Newsletter from "./components/Newsletter.vue";
import SupportProject from "./components/SupportProject";
import Carousel from './components/Carousel.vue';
import FundedProjects from './components/FundedProjects.vue'

export default {
  components: {
    Header,
    Fixed,
    Footer,
    SupportProject,
    Newsletter,
    HIW,
    Carousel,
    FundedProjects,    
  },
};
</script>

<style>
</style>