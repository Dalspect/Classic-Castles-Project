<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dover Castle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="castleSmall.css"
      media="screen and (max-width:480px)"
    />
    <link
      rel="stylesheet"
      href="castleLarge.css"
      media="screen and (min-width:481px)"
    />
    <link
      rel="stylesheet"
      href="global.css"
      media="screen and (min-width:481px)"
    />
    <link
      rel="stylesheet"
      href="globalSmall.css"
      media="screen and (max-width:480px)"
    />
    <script src="jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <header>
      <h1>Dover Castle</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Dover-Castle.webp"
            alt="Dover Castle"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The largest known castle in England, Dover Castle dominates the
            city’s skyline. Dover Castle is equipped with a mile-long defensive
            “curtain” wall. This castle was founded in the 11th Century and has
            played a significant role in defending England since then.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Great-Tower.jpg"
            alt="Great Tower"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The Great Tower was built by King Henry II in the year 1180. There
            are 3 floors decorated and furnished with a lavish medieval palace
            look. Here in the Great Tower you can find King Henry II's bed
            chambers and his Throne Room.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Underground-Hospital.webp"
            alt="Underground Hospital"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            During WWII a hospital complex was constructed underneath the
            castle, which was completely separated from the medieval tunnels.
            The hospital was built in the 1940s in order to treat the injured
            soldiers before sending them to a better equipped hospital.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Grand-Shaft.jpg"
            alt="Grand Shaft"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            This is a view from the bottom of the Grand Shaft, an enormous stairwell 180 ft deep, used to get
            troops from the citadel to the bottom of the white cliffs of Dover
            in a matter of minutes.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/St.-Mary-de-Castro.jpg"
            alt="St Mary de Castro"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The St Mary de Castro is a Saxon church built on the grounds of
            Dover Castle in the 10th century. This humble church has walls made
            mainly of flint with some stone and tile added. The church is still
            used as a place of worship to this day.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/King-Henry-II-Bedroom.webp"
            alt="King Henry II Bedroom"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            This is the bedroom of King Henry II of England. As you can see, the bed
            seems unusually small, but the room is nothing short of extravagant.
            Interestingly the small bed was a design choice as it was a common
            belief at the time that if people fell asleep with their mouths
            open the devil would enter their bodies. With a shorter bed they
            could sleep in more of a sitting position and this would not happen.
          </p>
        </div>
      </div>
    </div>
    <footer id="copyright">
      <p><strong><em>Copyright &copy; 2021 Classic Castles</em></strong></p>
    </footer>
    <script type="text/javascript" language="javascript" src="global.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
