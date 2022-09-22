<?php session_start(); 
require_once('config.php'); 

/* Based on submission of users input into form, allow user to sign into website 
   and have access to manipulate their uploaded images */
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        $encrypted = password_hash($Password, PASSWORD_DEFAULT);
        
        
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $userExists = $pdo->query("SELECT COUNT(1) FROM members WHERE Username = '" . $Username . "'");

        if($userExists->fetch()['COUNT(1)'] == 0)
        {
            $pdo->query("INSERT INTO members VALUES (DEFAULT, '" . $Username . "', '" . $encrypted . "')");
            $user = $pdo->query("SELECT UserID FROM members WHERE Username = '" . $Username . "' AND Password = '" . $encrypted . "'");
            $UserID = ($user->fetch())["UserID"];
            $_SESSION['Username'] = $Username;
            $_SESSION['UserID'] = $UserID;
        }
        else{
            $_SESSION['Message'] = "User '" . $Username . "' already Exists!";
        }

        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
    $pdo = null;
}
catch (PDOException $e) {
    die( $e->getMessage() );
}
?>