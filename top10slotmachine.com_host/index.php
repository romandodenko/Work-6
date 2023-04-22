<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Speel nu in het Franse online casino en verspil geen tijd aan registratie, slots zijn altijd en overal beschikbaar. Met de adaptieve versie van de site kun je vanaf je telefoon spelen.">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Frans online casino met gratis slots en themaspellen zonder registratie.</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Nos jeux sont destinés à un public ADULTE de plus de 18 ans. En cliquant
            le bouton
            Bouton pour confirmer votre âge.</p>
          <button class="popup__button">Il est d'accord</button>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
              <span class="hero__span">
                Amusez-vous avec notre site et nos machines à sous en ligne
              </span>
              <h1 class="hero__title">
                casino francais en ligne
              </h1>
              <p class="hero__text">
                <span>Les jeux proposés sur le site ne permettent pas aux utilisateurs de gagner de l'argent
                  réel.</span>
                Le site ne fournit pas aux utilisateurs des compétences qui pourraient être utilisées dans le jeu réel.
                Les jeux sont disponibles pour les utilisateurs de plus de 18 ans.
              </p>
              <a class="hero__link" href="#games">
                Jeux
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title">
              À propos des créneaux gratuits
            </h2>
            <p class="about__text">
              Les propriétaires de casinos en ligne sous licence offrent souvent à chaque visiteur la possibilité de
              jouer aux machines à sous gratuitement et sans inscription. En mode automatique, un compte de
              démonstration est créé avec des pièces qui peuvent être dépensées dans les machines à sous classiques et
              modernes, la roulette virtuelle et les jeux de cartes.
            </p>
          </div>
          <div class="about__right">
            <p class="about__text about__text_2">
              Le développement rapide de l'industrie du jeu oblige les fabricants à lancer de nouveaux casinos en ligne
              français avec des graphismes de haute qualité, une musique et une intrigue spécialement sélectionnées. Les
              développeurs s'associent à des sociétés cinématographiques pour créer des jeux avec des personnages
              familiers, offrant des méthodes mises à jour pour supprimer des personnages, adaptant le gameplay aux
              petits écrans de téléphones portables et de tablettes.
              Vous pouvez jouer aux machines à sous gratuitement et sans inscription depuis un ordinateur personnel, un
              smartphone ou une tablette.
            </p>
            <p class="about__text about__text_2">
              Pour de nouveaux scénarios, les fabricants de logiciels de divertissement tentent de créer des
              fonctionnalités uniques. Certaines solutions qui ont reçu de bons retours des joueurs se retrouvent dans
              diverses machines à sous et casinos en ligne français : free spins et respins, symboles en expansion. Les
              effets d'animation améliorent l'expérience de chute des bonus.
            </p>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <strong class="benefits__strong">
                Argent virtuel
              </strong>
              <p class="benefits__text">
                Aucun argent réel requis, tous les jeux sont gratuits et fonctionnent avec un compte virtuel.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <strong class="benefits__strong">
                version mobile
              </strong>
              <p class="benefits__text">
                Les jeux sont disponibles sur n'importe quel gadget - vous pouvez jouer où bon vous semble
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <strong class="benefits__strong">
                Sans inscription
              </strong>
              <p class="benefits__text">
                Machines à sous gratuites disponibles en ligne sans inscription
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Jeux de casino en ligne
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <img src="./img/game-1.png" loading="lazy" width="30" height="30" alt="Image">
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                The wild machine
              </a>
              <a class="games__play" href="game-1.php">
                Jouer
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <img src="./img/game-2.png" loading="lazy" width="30" height="30" alt="Image">
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Dance party
              </a>
              <a class="games__play" href="game-2.php">
                Jouer
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <img src="./img/game-3.png" loading="lazy" width="30" height="30" alt="Image">
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Lazy monkey
              </a>
              <a class="games__play" href="game-3.php">
                Jouer
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>