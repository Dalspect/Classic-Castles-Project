<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Vianden Castle</title>
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
      <h1>Vianden Castle</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Vianden-Castle.jpg"
            alt="Vianden Castle"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            This impressive Medieval Castle has stood the test of time being
            originally built by the Romans around 435 AD. Although the
            infrastructure was there, it didn’t receive its medieval
            fortifications until 1000 AD where a oval ring wall was built around
            the premises. The Vianden Castle, sitting 310 meters high on rock
            promontory above Vianden Town, offers fantastic views of the
            Luxembourg countryside.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Vianden-Castle-2.jpg"
            alt="Vianden Castle 2"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            In 1820, King WIlliam I of the Netherlands, needing money to
            fight the Spanish, auctioned off the castle to an alderman, who
            sold it piece by piece. All valuables were sold,
            even the roof tiles, windows, and doors. There was an outcry at the
            fate of Vianden Castle, which compelled William to
            repurchase the site in 1827 with the intent to restore the castle.
            However, the 1830 Belgian revolution delayed the restoration, 
            which didn't start until 1851 when Prince Henry of
            the Netherlands rebuilt the chapel.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Upper-Chapel.jpg"
            alt="Upper Chapel"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The chapel, arguably the most impressive part of the castle, was
            built on two separate floors. The lower ground floor was
            intended for commoners and servants, in comparison with the higher floor
            which was intended for the Count and his family.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Arms-Hall.jpg"
            alt="Arms Hall"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            Within the Arms Hall stands a gothic vaulted
            ceiling, established in the 15th century. Currently, the
            room is filled with the armor worn by soldiers who once defended the
            castle and the armaments used in battles.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Banqueting-Hall.jpg"
            alt="Banqueting Hall"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            The Nassau Mansion was established in the 17th century, a location
            where once stood a dungeon. Two main rooms are still featured within
            the palace today, the Banqueting Hall and the bedroom of the palace.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/V-Kitchen.jpg"
            alt="Kitchen"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            Located near the Nassau Mansion is a very impressive kitchen which
            features a 53 meter deep well confined within the castle.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Archeological-Crypt.jpg"
            alt="Crypt"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            A more unusual place can be found in the castle, the archeological
            crypt. Some excavations discovered the remains of Roman walls from
            the 3rd Century! These findings are now displayed within the castle
            in suspended cases.
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
