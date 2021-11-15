<template>
    <div class="footer-container white-box">
      <div class="footer-element about-tremma">
        <p>A propos de Trëmma</p>
        <ul>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/qui-sommes-nous"
              >Qui sommes nous ?</a
            >
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/faire-un-don-tremma"
              >Participer financièrement au projet</a
            >
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/donner-du-temps"
              >Donner de mon temps pour un projet</a
            >
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/devenir-partenaire"
              >Devenir partenaire</a
            >
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/politique-de-confidentialite"
              >Politique de confidentialité</a
            >
          </li>
          <li>
            <a class="footer-element-link" href="https://www.tremma.co/cgu"
              >Conditions générales d'utilisation</a
            >
          </li>
        </ul>
      </div>
      <div class="footer-element about-tremma">
        <p>Rubriques</p>
        <ul>
          <li>
            <GreenButton
              text="Donner un objet"
              link="https://www.tremma.co/projets-actifs"
            />
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/donner-du-temps"
              >Comment ça marche ?</a
            >
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/devenir-partenaire"
              >Label Emmaüs</a
            >
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/politique-de-confidentialite"
              >Point de collecte physique</a
            >
          </li>
          <li>
            <a class="footer-element-link" href="https://www.tremma.co/cgu"
              >FAQ - Centre d'aide</a
            >
          </li>
        </ul>
      </div>
      <div class="footer-element about-tremma">
        <p>Suivez Trëmma sur</p>
        <ul>
          <li>
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
          </li>
          <li>
            <a
              class="footer-element-link"
              href="https://www.tremma.co/faire-un-don-tremma"
              >Blog Trëmma</a
            >
          </li>
        </ul>
      </div>
      <div class="footer-element about-tremma">
        <p>Ils accompagnent Trëmma</p>
        <ul>
          <li>
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
          </li>
        </ul>
      </div>
    </div>
</template>

<script>
import GreenButton from "./GreenButton";

export default {
  components: {
    GreenButton,
  },
};
</script>

<style>
.about-tremma {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}

.about-tremma ul li {
  margin-top: 1rem;
}
.footer-container {
  padding: 4rem;
  bottom: 100%;
  display: flex;
  justify-content: space-evenly;
  margin-left: auto;
}
.footer-element-link {
  color: #595858 !important;
}
</style>