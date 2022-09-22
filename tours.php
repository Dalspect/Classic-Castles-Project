<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Castle Tours</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="global.css" media="screen and (min-width:481px)" />
  <link rel="stylesheet" href="globalSmall.css" media="screen and (max-width:480px)" />
  <link rel="stylesheet" href="tours.css" media="screen and (min-width:481px)" />
  <link rel="stylesheet" href="toursSmall.css" media="screen and (max-width:480px)" />
  <script src="jquery-3.5.1.min.js"></script>
</head>

<body>
  <header>
    <h1>Castle Tours</h1>
    <?php require_once('navbar.php')?>
  </header>
    
    <div>
    <nav class="navbar navbar-expand" id="tabsOne">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link tab" href="#" onclick="tabDisplay(0)">Dover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tab" href="#" onclick="tabDisplay(1)">Edinburgh</a>
        </li>
        <div class="d-none d-md-flex">
          <li class="nav-item">
            <a class="nav-link tab" href="#" onclick="tabDisplay(2)">Neuschwanstein</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="#" onclick="tabDisplay(3)">Versailles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="#" onclick="tabDisplay(4)">Vianden</a>
          </li>
        </div>
      </ul>
    </nav>
    <nav class="navbar navbar-expand d-md-none" id="tabsTwo">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link tab" href="#" onclick="tabDisplay(2)">Neuschwanstein</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="#" onclick="tabDisplay(3)">Versailles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="#" onclick="tabDisplay(4)">Vianden</a>
          </li>
      </ul>
    </nav>
  </div>
  <div class="container">
    <div class="row">
            <div class="col-md-8" id="map"></div>
          <div class="col-md-4 weather">
            <p id="wInfo">
            </p>
          </div>
    </div>
    <h2 id="calcText"></h2>
    <nav class="navbar navadrs navbar-expand">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#!" onclick="getLocation()">Use Your Location</a>
        </li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Set Location</button>
          <div class="dropdown-menu addrDrop dropdown-menu-right" >
            <label class="gold" for="addr" style="width: 100%; text-align: center;">Enter an address:</label>
            <input class="form-control"type="text" id="addr" name="addr" required>
            <a class="btn gold" href="#!" onclick="getDir()" style="width: 100%; text-align: center;">Submit</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="row">
      <div class="col-md-3 details">
        <p id="details">
        </p>
      </div>
      <div class="col-md-6" id="dirMap">
      </div>
      <div class="col-md-3 directions">
        <p id="directions">
        Submit address to see distance info here
        </p>
      </div>
    </div>
  </div>
  
  <script type="text/javascript" language="javascript" src="tours.js"></script>
  <script type="text/javascript" language="javascript" src="global.js"></script>
  <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBryC4n5U2or8RaReZHmkMAbST_8pXOrsA&callback=init"></script>
</body>

</html>