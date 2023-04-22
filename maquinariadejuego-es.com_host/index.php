<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Juegue al casino en línea ahora mismo sin registrarse, las tragamonedas con diferentes temas y un diseño moderno están disponibles en el sitio. Todas las tragamonedas son gratuitas y no requieren inversiones.">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Tragamonedas de casino en línea temáticas gratuitas para entretenimiento y ocio</title>
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
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Al hacer clic en
            el botón
            Botón para confirmar tu edad.</p>
          <button class="popup__button">El está deacuerdo</button>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
              <h1 class="hero__title">
                Tragamonedas de casino en línea
              </h1>
              <p class="hero__text">
                Juega tu entretenimiento favorito con nosotros y gana los mejores premios virtuales.
              </p>
              <a class="hero__link" href="#games">
                Jugar
              </a>
              <p class="hero__text hero__text_2">
                <span>Los juegos ofrecidos en el sitio no brindan a los usuarios la oportunidad de ganar dinero
                  real.</span>
                El sitio no proporciona a los usuarios habilidades que puedan usarse en juegos de azar reales. Los
                juegos están disponibles para usuarios mayores de 18 años.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Juegos de casino en línea
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <img src="./img/game-1.jpg" loading="lazy" width="30" height="30" alt="Image">
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Jugar
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <img src="./img/game-2.png" loading="lazy" width="30" height="30" alt="Image">
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Jugar
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <img src="./img/game-3.jpg" loading="lazy" width="30" height="30" alt="Image">
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Jugar
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            Acerca de nuestro casino en línea
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text">
                Gracias a la gran variedad de máquinas tragamonedas, cada jugador puede elegir la máquina tragamonedas
                que más le guste. Los fanáticos de los clásicos pueden volver al pasado y jugar a máquinas tragamonedas
                antiguas con gráficos antiguos pero muy familiares. Las tragamonedas en línea modernas se distinguen por
                gráficos avanzados y la presencia de características adicionales como la compra de bonos.
              </p>
              <p class="about__text">
                Independientemente de la edad, puedes probar todas las tragamonedas y disfrutar del juego, los gráficos,
                los sonidos y los personajes. Los héroes de tragamonedas modernos te sorprenderán mucho por su detalle y
                claridad. Además, estas tragamonedas son gratuitas y no requieren registro.
              </p>
              <p class="about__text">
                Juegas por monedas virtuales y obtienes premios virtuales. Esto es una ventaja, ya que no hay riesgo y
                no malgastas tu dinero. Simplemente disfruta del juego en sí y no te vuelvas adicto.
              </p>
            </div>
            <div class="about__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about.webp, ./img/about-x2.webp 2x" type="image/webp">
                <img src="./img/about.png" srcset="./img/about-x2.png 2x" loading="lazy" width="300" height="300"
                  alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title">
            Ventajas del casino en línea
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Preparándose para el juego real
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Disponible sin registro
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Variedad de tragamonedas
              </p>
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