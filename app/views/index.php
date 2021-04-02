<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/static/dist/styles.css">
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap"
      rel="stylesheet"
    />
    <title>Support YouTube Creators</title>
  </head>
  <body>
    <main class="home">
      <section class="info">
        <header class="info__header">
          <h1 class="info__title">Meet Our Team</h1>
          <span class="info__spacer"></span>
          <p class="info__subtext">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra
            faucibus vitae consectetur nunc. Fames justo, dignissim pretium leo
            eu ullamcorper tellus. Tellus ac bibendum eu facilisis cursus. Nisl
            aliquet sit.
          </p>
          <a href="<?php echo URLROOT; ?>/users/login" class="info__cta">Log in</a>
        </header>
      </section>
      <section class="cards">
        <div class="group-one">
          <div class="card card--square">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/marques-profile.jpg"
                alt="Marques Brownlee"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Marques Brownlee</a>
              </h3>
            </header>
          </div>
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/tmo-profile.jpg"
                alt="Tech Me Out"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Tech Me Out</a>
              </h3>
            </header>
          </div>
        </div>
        <div class="group-two">
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/ijustin-profile.jpg"
                alt="Justine Ezarik"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Justine Ezarik</a>
              </h3>
            </header>
          </div>
          <div class="card card--square">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/peter-profile.jpg"
                alt="Peter McKinnon"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Peter McKinnon</a>
              </h3>
            </header>
          </div>
        </div>
        <div class="group">
          <div class="card card--large">
            <header class="card__header">
              <img
                class="card__profile"
                src="static/dist/Assets/ijustin-profile.jpg"
                alt="Justine Ezarik"
              />
              <h3 class="card__title">
                <a class="card__link" href="#">Justine Ezarik</a>
              </h3>
            </header>
          </div>
        </div>
      </section>
    </main>
    <script type="text/javascript" src="./functions.js"></script>
  </body>
</html>
