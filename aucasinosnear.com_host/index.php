<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Luxury vacation in a luxury hotel in the heart of the business district. Excellent rooms with a gorgeous view of the Australian nature and an excellent Australian offline casino">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/NotoSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/WorkSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Hilton Sydney Casino Hotel. Great vacation with online casino and casino at the hotel</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <span class="hero__span">
              EXPLORE SYDNEY WITH HILTON
            </span>
            <h1 class="hero__title">
              Hilton Sydney
              <span>Casino Hotel</span>
            </h1>
            <p class="hero__text">
              Five star casino hotel where you can book a room online
            </p>
            <a class="hero__link" href="index.php#contacts">
              Contacts
            </a>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp, ./img/hero-x2.webp 2x" type="image/webp">
              <img src="./img/hero.jpg" srcset="./img/hero-x2.jpg 2x" loading="lazy" width="300" height="300"
                alt="Image">
            </picture>
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
              <p class="benefits__text">
                Location in the center of Sydney
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Easy access to local attractions
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Two bars, an executive lounge and many other amenities.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-4.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Executive lounge with access to evening drinks and canapés.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-5.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Stunning city view
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-6.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text">
                Room amenities, modern design and space to relax
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="gallery" id="gallery">
        <div class="container">
          <h2 class="gallery__title">
            Gallery of the best places of the hotel-casino
          </h2>
          <ul class="gallery__list">
            <li class="gallery__item gallery__item_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-1.webp, ./img/gallery-1-x2.webp 2x"
                  type="image/webp">
                <img src="./img/gallery-1.jpg" srcset="./img/gallery-1-x2.jpg 2x" loading="lazy" width="300"
                  height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item gallery__item_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-2.webp, ./img/gallery-2-x2.webp 2x"
                  type="image/webp">
                <img src="./img/gallery-2.jpg" srcset="./img/gallery-2-x2.jpg 2x" loading="lazy" width="300"
                  height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item gallery__item_3">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-3.webp, ./img/gallery-3-x2.webp 2x"
                  type="image/webp">
                <img src="./img/gallery-3.jpg" srcset="./img/gallery-3-x2.jpg 2x" loading="lazy" width="300"
                  height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item gallery__item_4">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-4.webp, ./img/gallery-4-x2.webp 2x"
                  type="image/webp">
                <img src="./img/gallery-4.jpg" srcset="./img/gallery-4-x2.jpg 2x" loading="lazy" width="300"
                  height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item gallery__item_5">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-5.webp, ./img/gallery-5-x2.webp 2x"
                  type="image/webp">
                <img src="./img/gallery-5.jpg" srcset="./img/gallery-5-x2.jpg 2x" loading="lazy" width="300"
                  height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item gallery__item_6">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-6.webp, ./img/gallery-6-x2.webp 2x"
                  type="image/webp">
                <img src="./img/gallery-6.jpg" srcset="./img/gallery-6-x2.jpg 2x" loading="lazy" width="300"
                  height="300" alt="Image">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            About our casino hotel
          </h2>
          <h3 class="about__subtitle">
            Hilton Sydney Casino Hotel
          </h3>
          <div class="about__content">
            <div class="about__left">
              <div class="about__left-top">
                <p class="about__text">
                  The Hilton Sydney hotel is ideally located in Sydney's CBD, characterized by its ideal modern design
                  and exceptional luxury. The hotel is ideal for any type of vacation or business trip, it has
                  everything a tourist needs. With unrivaled access to the city's best shopping, dining, tourist
                  activities and transportation routes. The Hilton Sydney is truly the ideal hotel for all Sydney
                  visitors.
                </p>
              </div>
              <div class="about__left-bottom">
                <div class="about__descr">
                  <p class="about__text">
                    The rooms are maximally equipped for each guest. The rooms have cable TV, a seating and work area,
                    as well as a private bathroom in each room.Guests of the hotel can enjoy amazing views. Guests can
                    also use the coffee maker, electric kettle and refrigerator available in the kitchen.
                  </p>
                  <p class="about__text">
                    A continental breakfast is served every morning. The restaurant serves French cuisine. Refreshing
                    drinks are served at the cocktail bar. Restaurant "The Tea Room QVB" is located 350 meters from the
                    hotel.
                  </p>
                  <p class="about__text">
                    The hotel has a lounge, a nightclub, an indoor pool and a free casino that can be played around the
                    clock. Online casino is popular in Australia but you can also enjoy offline slots or poker. A hot
                    tub and spa therapy can also be used free of charge. Guests of this hotel can relax by the pool.
                  </p>
                </div>
                <div class="about__images">
                  <div class="about__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/about-1.webp, ./img/about-1-x2.webp 2x"
                        type="image/webp">
                      <img src="./img/about-1.jpg" srcset="./img/about-1-x2.png 2x" loading="lazy" width="300"
                        height="300" alt="Image">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            <div class="about__image about__image_2" data-da=".about__images, 991, 1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-2.webp, ./img/about-2-x2.webp 2x"
                  type="image/webp">
                <img src="./img/about-2.jpg" srcset="./img/about-2-x2.png 2x" loading="lazy" width="300" height="300"
                  alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <section class="contacts" id="contacts">
        <div class="contacts__container container">
          <div class="contacts__descr">
            <h2 class="contacts__title">
              Do you have any questions?
            </h2>
            <p class="contacts__text">
              Fill out the form and we will contact you to answer all your questions online
            </p>
          </div>
          <form class="contacts__form form" action="#!" name="contacts" autocomplete="on">
            <input class="form__input" type="text" name="text" id="text" placeholder="Your name..." required>
            <input class="form__input" type="email" name="email" id="email" placeholder="Your email..." required>
            <textarea class="form__textarea" name="textarea" id="textarea" placeholder="Your message..."></textarea>
            <button class="form__button" type="submit">Send</button>
          </form>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>