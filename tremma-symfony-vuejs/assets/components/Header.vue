<template>
  <header class="header">
    <div class="header-container">
      <div class="header-logo">
        <img
          src="../img/tremma-logo.svg"
          alt="tremma-logo"
          class="header-logo-img"
        />
      </div>
      <ul class="menu">
        <li class="menu-item">
          <a class="menu-item-link" href="https://www.tremma.co/qui-sommes-nous"
            >Qui sommes nous ?</a
          >
        </li>
        <li class="menu-item">
          <a
            class="menu-item-link"
            href="https://www.tremma.co/c/comment-ca-marche"
            >Comment ça marche</a
          >
        </li>
        <li class="menu-item">
          <a class="menu-item-link" href="https://www.label-emmaus.co/fr/"
            >Acheter un objet</a
          >
        </li>
        <li class="menu-item">
          <a href="" class="header-button-different">Donner un objet</a>
        </li>
        <li class="menu-item">
          <a href="" class="header-button">Connexion</a>
        </li>
      </ul>
    </div>
  </header>
</template>

<script>
export default {};
</script>

<style>
.menu {
  list-style: none;
}
.menu-item {
  margin: 1rem;
}
.menu-item-link {
  color: white;
}
.header-button {
  border: white solid 0.1rem;
  border-radius: 0.4rem;
  color: white;
  padding: 1em;
}
.header-button-different {
  color: #e72560;
  background-color: white;
  border-radius: 0.4rem;
  padding: 1em;
}
.header {
  background-color: #e72560;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 5rem;

  color: white;
}
.header-container {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}
.header-logo {
  margin: auto;
}

.header-logo-img {
  display: block;
  width: auto;
  height: 2.5rem;
}

.menu {
  display: flex;
}
</style>