<?php session_start();
require_once('config.php'); 

try {
  $conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);
} catch (PDOException $e) {
  die("Could not connect to the database " . DBNAME . ": " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Catalog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="global.css" media="screen and (min-width:481px)" />
  <link rel="stylesheet" href="globalSmall.css" media="screen and (max-width:480px)" />
  <link rel="stylesheet" href="catalog.css" media="screen and (min-width:481px)" />
  <link rel="stylesheet" href="catalogSmall.css" media="screen and (max-width:480px)" />
  <script src="jquery-3.5.1.min.js"></script>
</head>

<body>
  <header>
    <h1>Catalog</h1>
    <?php require_once('navbar.php')?>
    
  </header>
  <div class="gContainer">
  <?php
  if(isset($_SESSION['UserID'])) {
    echo '<div class="dropdown manageimg"">
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Upload Image</button>
    <div class="dropdown-menu">
      <form method="post" action="imageUpload.php" role="form">
        <div class="form-group dropdown-item">
          <label class="gold" for="imgcastle">Select Castle:</label>
          <select class="form-control" id="imgcastle" name="imgcastle">
            <option class="gold dover" value="Dover Castle">Dover Castle</option>
            <option class="gold edinburgh" value="Edinburgh Castle">Edinburgh Castle</option>
            <option class="gold neuschwanstein" value="Neuschwanstein Castle">Neuschwanstein Castle</option>
            <option class="gold versailles" value="The Palace of Versailles">The Palace of Versailles</option>
            <option class="gold vianden" value="Vianden Castle">Vianden Castle</option>
          </select>
        </div>
        <div class="form-group dropdown-item">
          <label class="gold" for="imgurl">Image URL:</label>
          <input class="form-control" type="url" id="imgurl" name="imgurl" required>
        </div>
        <div class="form-group dropdown-item">
          <label class="gold" for="imgname">Image Name:</label>
          <input class="form-control" type="text" id="imgname" name="imgname" required>
        </div>
        <div class="form-group dropdown-item">
          <label class="gold" for="imgtext">Image Description:</label>
          <textarea class="form-control" rows="3" id="imgtext" name="imgtext"></textarea>
        </div>
        <button type="submit" class="submit btn form-control gold">Submit</button>
      </form>
    </div>
  </div>
  <div class="dropdown manageimg">
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Remove Image</button>
    <div class="dropdown-menu">
      <form method="post" action="imageRemove.php" role="form">
        <div class="form-group dropdown-item">
          <label class="gold" for="imgid">Select Image:</label>
          <select class="form-control" id="imgid" name="imgid">';
              
              $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $tables = $pdo->query("SELECT TABLE_NAME 
                                      FROM INFORMATION_SCHEMA.TABLES 
                                      WHERE TABLE_TYPE = 'BASE TABLE' 
                                        AND TABLE_SCHEMA='id16654734_catalog'
                                        AND TABLE_NAME <> 'members'");
              while ($table = $tables->fetch()) {
                $sql = "select * from " . $table['TABLE_NAME'];
                $images = $pdo->query($sql);
                while ($image = $images->fetch()) {
                  if($_SESSION['UserID'] == 1 || $_SESSION['UserID'] == $image['UserID'])
                  {
                    echo "<option class=\"gold " . $table['TABLE_NAME'] . "\" value=\"" . $image['ID'] . " " . $table['TABLE_NAME'] . "\">" . $image['Name'] . "</option>";
                  }
                }
              }
        echo '</select>
          </div>
          <button type="submit" class="submit btn form-control gold">Submit</button>
        </form>
      </div>
    </div>';      
  }
  ?>
    <?php
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $tables = $pdo->query("SELECT TABLE_NAME 
                             FROM INFORMATION_SCHEMA.TABLES 
                             WHERE TABLE_TYPE = 'BASE TABLE' 
                               AND TABLE_SCHEMA = 'id16654734_catalog'
                               AND TABLE_NAME <> 'members'");
    while ($table = $tables->fetch()) {
      $sql = "select * from " . $table['TABLE_NAME'];
      $images = $pdo->query($sql);

      while ($image = $images->fetch()) {
        $user = $pdo->query("SELECT Username from " . "members" . " WHERE UserID = " . $image["UserID"]);
        $Username = $user->fetch()['Username'];
        echo "<div class=\"pContainer gold\">";
        echo "<div class=\"pictbox\"></div>";
        echo "<img class=\"picture rounded\" src=\"" . $image['Image'] . "\" alt=\"" . $image['Name'] . "\"/>";
        echo "<h4 class=\"desc gold\">" . $image['Description'] . "<br><br>Uploaded By: " . $Username . "</h4>";
        echo "<div class=\"caption rounded " . $table['TABLE_NAME'] . "\">" . $image['Name'] . "</div></div>";
      }
    }
    ?>
  </div>
  <script type="text/javascript" language="javascriupt" src="catalog.js"></script>
  <script type="text/javascript" language="javascript" src="global.js"></script>
  <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>