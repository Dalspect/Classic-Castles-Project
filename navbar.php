<?php
if(isset($_SESSION['Message']))
{
  echo '<script type="text/javascript">alert("' . $_SESSION['Message'] . '")</script>';
  unset($_SESSION['Message']);
}
?>
<div class="unsticky" id="navs">
  <nav class="navbar navbar-expand" id="navone">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Castles</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item dover" href="dover.php">Dover Castle</a></li>
          <li><a class="dropdown-item edinburgh" href="edinburgh.php">Edinburgh Castle</a></li>
          <li><a class="dropdown-item neuschwanstein" href="neuschwanstein.php">Neuschwanstein Castle</a></li>
          <li><a class="dropdown-item versailles" href="versailles.php">Palace of Versailles</a></li>
          <li><a class="dropdown-item vianden" href="vianden.php">Vianden Castle</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalog.php">Catalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="darkMode()">Dark Mode</a>
      </li>
      <div class="d-none d-md-flex">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sources.php">Sources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tours.php">Castle Tours</a>
        </li>
        <?php
        if(!isset($_SESSION['UserID'])) {
          echo '<li class="nav-item dropdown">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Account</button>
            <div id="account" class="dropdown-menu dropdown-menu-right">
              <form method="post" action="login.php" role="form">
                <p class="gold" style="text-align: center;">Sign In</p>
                <input class="form-control" type="text" name="Username" placeholder="Username" style="margin-bottom: 10px;" required>
                <input class="form-control" type="password" name="Password" placeholder="Password" style="margin-bottom: 10px;" required>
              <button type="submit" class="submit btn form-control gold" style="border: 1px solid #ddd;">Submit</button>
              </form>
              <hr style="border-color: white;"></hr>
              <form method="post" action="join.php" role="form">
              <p class="gold" style="text-align: center;">Don\'t have an Account? <br> Sign up here!</p>
                <input class="form-control" type="text" name="Username" placeholder="Create Username" style="margin-bottom: 10px;" required>
                <input class="form-control" type="password" name="Password" placeholder="Create Password" style="margin-bottom: 10px;" required>
              <button type="submit" class="submit btn form-control gold" style="border: 1px solid #ddd;">Submit</button>
              </form>
            </div>
          </li>';
        }
        else {
          echo '<li class="nav-item dropdown">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">' . $_SESSION['Username'] . '</button>
            <div id="account" class="dropdown-menu dropdown-menu-right">
              <form method="post" action="signout.php" role="form">          
              <button type="submit" class="submit btn form-control nav-link">Sign Out</button>
              </form>
            </div>
          </li>';
        }
        ?>
      </div>  
    </ul>
  </nav>
  <nav class="navbar navbar-expand d-md-none" id="navtwo">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sources.php">Sources</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tours.php">Castle Tours</a>
      </li>
      <?php
      if(!isset($_SESSION['UserID'])) {
        echo '<li class="nav-item dropdown">
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Account</button>
          <div id="account" class="dropdown-menu dropdown-menu-right">
            <form method="post" action="login.php" role="form">
              <p class="gold" style="text-align: center;">Sign In</p>
              <input class="form-control" type="text" name="Username" placeholder="Username" style="margin-bottom: 10px;">
              <input class="form-control" type="password" name="Password" placeholder="Password" style="margin-bottom: 10px;">
            <button type="submit" class="submit btn form-control gold" style="border: 1px solid #ddd;">Submit</button>
            </form>
            <hr style="border-color: white;"></hr>
            <form method="post" action="join.php" role="form">
            <p class="gold" style="text-align: center;">Don\'t have an Account? <br> Sign up here!</p>
              <input class="form-control" type="text" name="Username" placeholder="Create Username" style="margin-bottom: 10px;">
              <input class="form-control" type="password" name="Password" placeholder="Create Password" style="margin-bottom: 10px;">
            <button type="submit" class="submit btn form-control gold" style="border: 1px solid #ddd;">Submit</button>
            </form>
          </div>
        </li>';
      }
      else {
        echo '<li class="nav-item dropdown">
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">' . $_SESSION['Username'] . '</button>
          <div id="account" class="dropdown-menu dropdown-menu-right">
            <form method="post" action="signout.php" role="form">          
            <button type="submit" class="submit btn form-control nav-link">Sign Out</button>
            </form>
          </div>
        </li>';
      }
      ?>
    </ul>
  </nav>
</div>
