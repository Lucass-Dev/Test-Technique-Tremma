<template>
  <div class="funded-project-container">
    <p>Les projets déjà financés</p>
    <div class="carousel-funded-project" v-for="(project, index) in fundedProjects" :key="index">
      <div class="funded-project-top">
        <div class="funded-image"><img :src="project.img" alt="test"></div>
        <div class="funded-project-description"></div>
        <div class="funded-by-container"></div>
      </div>
      <div class="funded-project-bot">
        <div class="funded-project-bot-text">
          <p>En bref</p>
          <p>{{project.bref}}</p>
        </div>
        <div class="funded-project-bot-text">
          <p>Le projet</p>
          <p>{{project.projet}}</p>
        </div>
        <div class="funded-project-bot-text">
          <p>La structure</p>
          <p>{{project.structure}}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fundedProjects: [
        {
          title: "FERME EMMAÜS BAUDONNE",
          description: "Aidez la Ferme Emmaüs Baudonne en donnant vos objets pour financer un poste de formateur-accompagnateur en numérique qui accompagnera les femmes accueillies à la ferme quelques heures par semaine.",
          img: require("../img/fundedProject.png"),
          url: "https://www.tremma.co/projet/ferme-emmaus-baudonne",
          funders: 259,
          fundersObject: 1712,
          bref: "“La ferme Emmaüs de Baudonne est un lieu d’accompagnement pour des femmes en fin de pein...“",
          projet: "“La maîtrise de l’outil numérique est un réel atout pour trouver un travail, communiquer...“",
          structure: "“La Ferme Emmaüs Baudonne, créée en 2018, se situe à quelques kilomètres de Bayonne, au...“",
        },
      ],
    };
  },
};
</script>

<style>
</style>