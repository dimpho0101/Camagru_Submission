<?php
session_start();
$DB_DSN = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'matcha2';
//connect to the newly created database
try {
    $conn = new PDO("mysql:host=$DB_DSN;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
    // INSERT IGNORE INTO viewstats (user1,user2) VALUES (9,10)

    try{
        $sql = $conn->prepare(" INSERT IGNORE INTO likes (`user_id`,comments, `img_id`) VALUES (:userid,:comments,:img_id)");

        $sql->bindParam(':userid', $_SESSION['id']);
        $sql->bindParam(':comments', $_SESSION['id']);
        $sql->bindParam(':userID', $_SESSION['']);
        $sql->execute();
        header('Location: history.php');
    }catch(Exception $e)
    {
        echo 'Error: ' . $e->getMessage();
    }

?>