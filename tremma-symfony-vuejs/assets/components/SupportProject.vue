<template>
  <div class="support-project">
    <h2>Les projets à sountenir</h2>
    <div class="project-container">
        <div v-for="(project, index) in projects" :key="index" class="project">
            <div class="img-container" :style="{'background-image': 'url('+project.img+')'}"></div>
            <div class="progress-text">
                <span>Fiancement</span>
                <br>
                <span><b>à {{ project.progress }}%</b> en objets vendus</span>
                <br>
                <div class="progressBarContainer">
                    <div class="progressBar" :style="{'width': project.progress +'%'}"></div>
                </div>
            </div>
            <p>{{ project.title }}</p>

            <p class="end-date">Fin le {{project.endDate}} </p>
            <div class="discover-button">
                <GreenButton  text="Découvrir le projet" :link="project.url"/>
            </div>
            
        </div>
    </div>
    
  </div>
</template>

<script>
import GreenButton from "./GreenButton.vue";
export default {
  components: {
    GreenButton,
  },
  data() {
    return {
      projects: [
        {
          title: "LE NUMÉRIQUE AU SERVICE DE L'INSERTION CHEZ EMMAÜS DÉFI",
          progress: 20,
          endDate: "10 - 01 - 2022",
          img: require("../img/support1.jpeg"),
          url:
            "https://www.tremma.co/projet/le-numerique-au-service-de-l-insertion-chez-emmaus-defi",
        },
        {
          title: "LE NUMÉRIQUE AU SERVICE DE L'INSERTION CHEZ EMMAÜS DÉFI",
          progress: 17,
          endDate: "10 - 01 - 2022",
          img: require("../img/support2.jpeg"),
          url:
            "https://www.tremma.co/projet/metamorphose-par-la-recyclerie-sportive-3eme-vie-du-sport",
        },
        {
          title: "LE NUMÉRIQUE AU SERVICE DE L'INSERTION CHEZ EMMAÜS DÉFI",
          progress: 12,
          endDate: "10 - 01 - 2022",
          img: require("../img/support3.jpeg"),
          url:
            "https://www.tremma.co/projet/emmaus-alternatives-s-engage-pour-l-inclusion-numerique",
        },
        {
          title: "LE NUMÉRIQUE AU SERVICE DE L'INSERTION CHEZ EMMAÜS DÉFI",
          progress: 13,
          endDate: "10 - 01 - 2022",
          img: require("../img/support4.jpeg"),
          url:
            "https://www.tremma.co/projet/seconde-vie-des-ordinateurs-avec-emmaus-53",
        },
      ],
    };
  },
};
</script>

<style>
.support-project h2{
    margin-left: 5%;
}
.discover-button{
    display: flex;
    justify-content: center;
    margin-top: 35%;
}
.end-date {
  color: #828282;
}
.progressBar {
  background-color: #e72560;
  border-radius: 0.7rem;
  height: 0.4rem;
}
.progressBarContainer {
  background-color: #f1f1f3;
  width: 95%;
  border-radius: 0.7rem;
  height: 0.4rem;
}
.img-container {
  background-size: 100%;
  height: 20rem;
}
.support-project {
  display: flex;
  flex-direction: column;
}
.project-container {
  display: flex;
  justify-content: space-evenly;
}
.project {
  display: flex;
  flex-direction: column;
  border-radius: 1rem;
  background-color: white;
  width: 15%;
}

.project p {
  margin: 1rem;
}

.progress-text {
  color: #e72560;

  margin-left: 5%;
  margin-top: 5%;
}

.progress-text span {
  font-size: 20px;
}
</style>