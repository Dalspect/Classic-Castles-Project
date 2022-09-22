<?php
ob_start();
session_start();
require_once('config.php'); 

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        list($id, $table) = explode(" ", $_POST['imgid']);
        echo $id . " " . $table;
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("DELETE FROM " . $table . " WHERE ID = " . $id);
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
    $pdo = null;
}
catch (PDOException $e) {
    die( $e->getMessage() );
}
?>