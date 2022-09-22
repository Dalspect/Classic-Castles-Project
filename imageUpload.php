<?php
session_start();
require_once('config.php'); 

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['UserID'])) {
        $tableName;
        
        if($_POST['imgcastle'] == "Dover Castle")
        {
            $tableName = "dover";
        }
        else if($_POST['imgcastle'] == "Edinburgh Castle")
        {
            $tableName = "edinburgh";
        }
        else if($_POST['imgcastle'] == "Neuschwanstein Castle")
        {
            $tableName = "neuschwanstein";
        }
        else if($_POST['imgcastle'] == "The Palace of Versailles")
        {
            $tableName = "versailles";
        }
        else if($_POST['imgcastle'] == "Vianden Castle")
        {
            $tableName = "vianden";
        }
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("INSERT INTO " . $tableName . " VALUES (\"" . $_POST['imgname'] . "\", \"" . $_POST['imgtext'] . "\", '" . $_POST['imgcastle'] . "', \"" . $_POST['imgurl'] . "\", DEFAULT, '" . $_SESSION['UserID'] . "')");
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
    $pdo = null;
}
catch (PDOException $e) {
    die( $e->getMessage() );
}
?>