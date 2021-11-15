<template>
  <div class="hiw-container white-box">
    <div class="hiw-item" v-for="(step, index) in hiwSteps" :key="index">
      <img :src="step.img" :alt="step.img" />
      <span class="hiw-item-span">Etape {{ index+1}}</span>
      <div class="text-container">
        <p>{{ step.content }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      hiwSteps: [
        {
          content: "Choisissez avec amour l'objet que vous souhaitez donner.",
          img: require("../img/step1.png"),
        },
        {
          content:
            "Sélectionnez le projet qui bénéficiera de la vente de votre objet.",
          img: require("../img/step2.png"),
        },
        {
          content:
            "Renseignez le plus précisément possible les caractéristiques du produit.",
          img: require("../img/step3.png"),
        },
        {
          content: "Votre objet est acheté sur label-emmaüs.co.",
          img: require("../img/step4.png"),
        },
        {
          content:
            "Déposez votre objet en point relais ou choisissez une remise en main propre.",
          img: require("../img/step5.png"),
        },
        {
          content:
            "L’argent de la vente est reversé au projet que vous aviez choisi!",
          img: require("../img/step6.png"),
        },
      ],
    };
  },
};
</script>

<style>
.hiw-container {
  
  padding: 5rem;
  padding-left: 8%;
  padding-right: 8%;
  justify-content: center;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.hiw-item {
  display: flex;
  align-items: center;
  flex-direction: column;
  text-align: center;
  max-width: 30%;
  margin-left: 2%;
}

.hiw-item img{
    width: 90%
}

.hiw-item-span {
  color: #e72560;
}
.text-container{
    display: block;
    overflow: hidden;
    max-width: 100%;
    font-size: 17px;
}
</style>