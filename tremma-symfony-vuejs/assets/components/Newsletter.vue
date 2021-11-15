<template>
  <div class="newsletter-container">
    <div class="info-newsletter">
      <span>S'inscire à la newsletter</span>
      <p>
        Inscrivez-vous à la newsletter pour suivre l'actualité de Trëmma et des
        projets soutenus et recevoir nos bons plans.
      </p>
    </div>
    <div class="form-container white-box">
      <form class="form">
        <div class="form-input">
          <input type="text" placeholder="Votre nom" />
          <input type="text" placeholder="Votre email" />
        </div>

        <p class="form-text">
          Vos coordonnées sont uniquement utilisés pour vous envoyer les
          newsletters Trëmma. Vous pouvez à tout moment utiliser le lien de
          désabonnement intégré dans la newsletter. En savoir plus sur la
          gestion de vos données et vos droits
        </p>
        <div class="a">
            <input type="submit" value="S'inscrire" class="submit-button" />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import GreenButton from "./GreenButton.vue";
export default {};
</script>

<style>
.form p{
    margin-top: 1rem;
    margin-bottom: 1rem;
}
.form-input input{
    padding: 1rem;
    margin-top: 2rem;
}
.form-input{
    display: flex;
    flex-direction: column;
    width: 75%;
}
.form-text {
  text-align: left;
  font-size: 14px;
  margin-bottom: 5px;
  margin-top: 0;
  line-height: 1;
}
.newsletter-container {
  padding-top: 5rem;
  padding-bottom: 5rem;
  display: flex;
  justify-content: center;
}

span {
  font-size: 25px;
}

.submit-button {
  border-color: #00baae;
  color: #fff;
  background-color: #00baae;
  fill: #fff;
}

.form {
  padding: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
</style>