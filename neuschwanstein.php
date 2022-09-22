<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Neuschwanstein Castle</title>
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
      <h1>Neuschwanstein Castle</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Neuschwanstein-Castle.jpg"
            alt="Neuschwanstein Castle"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            Built in the 19th Century in Bavaria, Germany by the famous
            “Fairytale King”, King Ludwig II, the Neuschwanstein Castle is
            considered the most popular tourist destination in all of Europe.
            The castle was very particularly designed by none other
            than the king himself; he was heavily inspired by the work of
            Richard Wagner, a world-renowned composer of the time. Even the
            name, Neuschwanstein, literally means the “New Swan Castle”, which
            referenced one of Wagner’s characters.
            Only fifteen rooms could be built before the King's unexpected death;
            he only spent eleven nights in the castle before committing
            suicide. 
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Throne-Hall.jpg"
            alt="Throne Hall"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The two-story throne room was designed in a Byzantine-like style.
            The wall paintings of the room depict angels. Ironically, there is
            no throne in the Throne Room, as Ludwig died before it could be
            completed.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Kings-Dressing-Room.jpg"
            alt="King's Dressing Room.jpg"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            Ludwig’s Dressing Room is a highlight of Ludwig’s particular design
            choices. The entire room is finished in rich gold and violet silks.
            Murals are found on the walls illustrating the works of poets
            Walther von der Vogelweide and Hans Sachs.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Singers-Hall.jpg"
            alt="Singers' Hall.jpg"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The Hall of Singers is a grand concert hall which was one of
            Ludwig’s favorite parts of the Castle. The room was designed for
            operas, with walls decorated with images from Lohengrin and
            Parzival. Unfortunately, no performances were held in the hall in
            Ludwig’s time. The concert hall is still used today on occasion.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/King-Ludwig-II-Bedroom.jpg"
            alt="King Ludwig II Bedroom.jpg"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            As shown here, the walls of the King’s bedroom are covered with
            murals and there are also meticulous carving designs in the door and
            ceiling. One of the more unusual features is the washstand, with a
            fountain in the form of a silver-plated swan. Small swans also
            decorate the washstand set.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Oratory.png"
            alt="Oratory"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The Oratory, adjacent to the bedroom, is in a neo-gothic style.
            Louis IX of France is pictured in the murals, glass windows, and the center of the altar.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-2 picture">
          <img
            src="images/Salon.jpg"
            alt="Salon"
          />
        </div>
        <div class="col-md-4 order-md-1 text">
          <p>
            This L-shaped salon is furnished with chairs and separated with
            pillars. A large oak cupboard is modelled on an item of furniture
            from the Wartburg and is decorated with scenes from medieval poems.
            The murals in this room show scenes from the Lohengrin saga.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 picture">
          <img
            src="images/Study.jpg"
            alt="Study"
          />
        </div>
        <div class="col-md-4 text">
          <p>
            The murals in the King’s study portray the Tannhauser saga.
            The king worked at the large
            table in the center of the study where his writing stand still sits
            to this day. The plans and drafts of the castle remain in his desk.
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