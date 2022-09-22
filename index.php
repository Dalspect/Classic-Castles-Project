<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Classic Castles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" />
    <link href="index.css" rel="stylesheet" />
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
      <h1>Classic Castles</h1>
      <?php require_once('navbar.php')?>
    </header>
    <div class="container">
      <div class="Intro">
        <h2>
          Welcome to Classic Castles!
        </h2>
        <p>
          This is a website dedicated to showcasing famous castles and palaces!
          <br />
          On this website you can view web pages tailored to each individual
          castle under the <b>Castle</b> tab in the Navigation bar. <br />
          Each castle page highlights the unique locations found within each
          castle or palace! This is a great way to learn more about a specific
          castle at your own leisure. <br />
          If you wish to look at all the images found on this site please click
          on the <b> Catalog</b> tab in the Navigation bar to get access to
          them! <br />
          Hovering over each image in the Catalog will enlarge them so that you
          can better see the details in each photo! <br />
          <b>NEW!</b> Try clicking on the image you are hovering over in the 
          <u>Catalog</u>, our catalog will provide you with a short description 
          of the image as well as credit to the member who posted it! <br />
          Try our <u>Tours Page</u> to get the latest travel information to all the 
          castles we feature! You can get directions to and from each castle 
          as well as see local weather for each castle location.<br />
          When navigating, if you ever wish to return to this page hit the
          <b>Home</b> tab in the navigation bar. <br />
          We hope you enjoy your visit to this website and become a member today! 
          If you wish to know more about us check out our <b>About</b> page. <br />
          Sources to content used on this site can be found under the
          <b>Sources</b> tab.<br />
          <br />*NEW* Try our new <b>Dark Mode</b>!
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
