<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Palace of Versailles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="castleSmall.css" media="screen and (max-width:480px)" />
    <link rel="stylesheet" href="castleLarge.css" media="screen and (min-width:481px)" />  
    <link rel="stylesheet" href="global.css" media="screen and (min-width:481px)" />
    <link rel="stylesheet" href="globalSmall.css" media="screen and (max-width:480px)" />
    <script src="jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <header>
      <h1>Palace of Versailles</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Palace-of-Versailles.jpg"
            alt="Palace of Versailles"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            First starting off as but a humble hunting lodge, the Palace of
            Versailles transformed into the famous iconic residence it is
            today. The Palace became a permanent residence for the French
            Monarchy and the seat of political power in France. Ultimately the
            royal family was removed from the palace by force at the onset of
            the French Revolution. After this radical transformation of French
            government, the Palace of Versailles became a place occupied by
            Napoleon and the Bourbon Kings. Finally, the
            Palace of Versailles was remodeled into a public museum.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Kings-Apartment.jpg"
            alt="King's Apartment"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            In 1701, the King’s Apartment was built during the reign of
            Louis XIV. He moved his bedchamber to the center of the
            the royal apartments, making his room the focal point of the
            entire palace. Louis XIV died there in 1715.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Queens-Grand-Apartment.jpg"
            alt="Queen's Grand Apartment"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The Queen’s Apartment, built in 1682, was where the first queen
            Maria Theresa resided until she died in 1683 soon after
            arriving in Versailles. The apartment was then dramatically altered
            by the King in order to make his royal bedchamber.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Hall-of-Mirrors.jpg"
            alt="Hall of Mirrors"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The Hall of Mirrors was the central gallery of the Palace of
            Versailles. Containing 21 mirrors, the room is lightened by the 17
            arched windows which look out onto the dramatic gardens of
            Versailles. This was the epitome of the French Monarchy's wealth at
            the time. The room was originally created with an open-air terrace
            but because of the temperamental French climate the terrace was removed
            so that the Hall of Mirrors was enclosed.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Royal-Chapel.jpg"
            alt="Royal Chapel"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The Royal Chapel, built in 1710, was the last structure built in the
            Palace to be commissioned by Louis XIV. Biblical artwork was
            strategically placed to draw eyes towards the altar. The
            artwork depicted the death and resurrection of Jesus Christ.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Palace-Gardens.jpg"
            alt="Palace Gardens"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            A garden most breath-taking would be found at the Palace of
            Versailles. Started in 1661, the garden was made in honor of the Sun
            King. Here you can find elaborate fountains and statues. Because
            the garden turned out to be so expansive, King Louis XIV was known
            to lead tours for friends and courtiers in order show off the best
            views that the garden had to offer.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Royal-Opera-House.jpg"
            alt="Royal Opera House"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The Royal Opera House was built in 1770, constructed in an ovular shape so
            that all attendants could see the stage. The structure and material
            of the building was designed to give the acoustics within the Opera House
            a soft but clearly audible “violin-like” sound. The Royal Opera House is
            known as one of the largest surviving court opera houses.
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
