<?php session_start();

require_once('config.php'); 

/* Based on submission of users input into form, allow user to sign into website 
   and have access to manipulate their uploaded images */
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM members";
        $result = $pdo->query($sql);
        $login = false;
        while ($row = $result->fetch()) {
            $UserID = $row['UserID'];
            if ($row['Username'] == $Username) {
                if (password_verify($Password, $row['Password'])) {
                    $_SESSION['Username'] = $Username;
                    $_SESSION['UserID'] = $UserID;
                    $login = true;
                }
                else {
                    break;
                }
            }
        }
        if(!$login) {
            $_SESSION['Message'] = "Invalid Credentials!";
        }
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
    $pdo = null;
}
catch (PDOException $e) {
    die( $e->getMessage() );
}
?>