<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" />
    <link href="about.css" rel="stylesheet" />
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
      <h1>About</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="Intro">
        <p>
          CS3500-100: <br />
          20 April 2021 <br />
          Instructor: Sepideh Mohommadi<br />
          Authors: Daniel Alspector-Kelly, Jered Milner
        </p>
      </div>
      <div class="Description">
        <p>
          Our Final Project is a continuation of the "Classic Castle" Website.
          We added new features to our website! Integrating MYSQL, PHP, APIs, 
          and new web security measures, we added quite a few new features!
          Please become a member today to upload your very own castle images
          into our catalog!<br />
          The castles you can find on this website include Dover Castle,
          Edinburgh Castle, Neuschwanstein Castle, the Palace of Versailles, and
          Vianden Castle. <br />
          Please refer to the navigation bar to move throughout the website; the
          Castle tab will take you to each of the many famous castles. Again, view the Catalog
          to see photos from these castles in one convient place!!
        </p>
      </div>
    </div>
    <footer id="copyright">
      <p><strong><em>Copyright &copy; 2021 Classic Castles</em></strong></p>
    </footer>
    <script type="text/javascript" language="javascript" src="global.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
