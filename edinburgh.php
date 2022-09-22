<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Edinburgh Castle</title>
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
      <h1>Edinburgh Castle</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Edinburgh-Castle.jpg"
            alt="Edinburgh Castle"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            Scotland’s most famous fortress, the Edinburgh Castle, towered above
            the city of Edinburgh since the 13th century and is the country’s
            most popular tourist attraction. This castle remains tall atop a
            high black basalt outcrop. The castle is known for its amazing views
            of the rest of the city. The Portcullis Gate forces entry by a
            drawbridge over a moat to enter the castle. The gate was built in
            the late 1500s on the ruins of a 14th century tower where the gate
            imposed an impressive obstacle for anyone trying to storm the
            castle.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Inside-Royal-Palace.jpg"
            alt="Inside Royal Palace"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The Royal Palace inside the Castle was the official residence of the
            later Stuart Monarchs. One of the most cherished features within the
            palace is a fireplace in Laich Hall. In an adjoining room, Mary,
            Queen of Scots, gave birth to the future King James VI of Scotland in
            1566.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Great-Hall.jpg"
            alt="Great Hall"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            This is the Great Hall, located at the south side of Crown Square.
            It was built shortly before the death of King James IV in 1511 and
            was used for state ceremonies and as the meeting place for the
            Scottish parliament until 1640. The building was later used as a
            barracks and then a military hospital during Cromwell’s occupation.
            Although the building was restored by the end of the 19th century,
            the ceiling remains intact from its first conception.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/War-Memorial.jpg"
            alt="War Memorial"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            On the north side of Crown Square, the Scottish National War
            memorial was built in memory of the many Scots who died in WWI. Each
            regiment has its own memorial, and even the animals that worked
            alongside the soldiers are remembered in its iconography.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Napoleonic-Wars-Bunks.jpg"
            alt="Napoleonic Wars Bunks"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            During the Napoleonic wars, French prisoners were kept and interned
            under the Great Hall. It is worth noting that many of the prisoners
            of this time had mostly tolerable circumstances and were allowed
            time to make toys and jewelry boxes.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Mons-Meg.jpg"
            alt="Mons Meg"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            This castle is known for this mammoth of a cannon, the Mons Meg. It
            stands in great contrast to the St. Margaret’s Chapel next to it.
            Made in the town of Mons in 1449 by Jehan Cambier, it represented cutting edge
            technology of its time. It was even presented to James II by the Duke
            of Burgundy in 1457.
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
