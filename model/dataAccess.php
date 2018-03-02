<?php
$host = "10.169.0.168";
$dbName = "colinroi_notes";
$username = "colinroi_notes";
$password = "notes";

$pdo = new PDO("mysql:host=$host;dbname=$dbName",
                $username,
                $password);
            
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getUserCardsByDate($user){
    global $pdo;
    $statement = $pdo->prepare("SELECT cardId, title, content, dueDate, color FROM Cards WHERE user = ? ORDER BY dueDate ASC");
    $statement->execute(array($user));
    $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Card');
    return $result;
}

function getUser($user){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Users WHERE userName = ?");
    $statement->execute(array($user->userName));
    $result = $statement->fetchAll(PDO::FETCH_CLASS, 'User');
    return $result;
}

function getUserName($user){
    global $pdo;
    $statement = $pdo->prepare("SELECT userName FROM Users WHERE userId = ?");
    $statement->execute(array($user->userId));
    $result = $statement->fetchAll(PDO::FETCH_CLASS, 'User');
    return $result;
}

function addNewUser($user){
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO Users (userName, password) VALUES(?,?)");
    $statement->execute(array(
        $user->userName,
        $user->password
    ));
}

function insertNewCard($card){
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO Cards (user, title, content, dueDate, color) VALUES (?, ?, ?, ?, ?)");
    $statement->execute(array(
        $card->user,
        $card->title,
        $card->content,
        $card->dueDate,
        $card->color
    ));
}

function deleteCard($cardId){
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM Cards WHERE cardId = ?");
    $statement->execute(array($cardId));
}

function getdata(){
    $card1 = new Card();
    $card1->setAttributes("card one", "hejahehfslk", "12/12/2018", "red");
    $card2 = new Card();
    $card2->setAttributes("card one", "hejahehfslk", "12/12/2018", "green");
    $card3 = new Card();
    $card3->setAttributes("card one", "hejahehfslk", "12/12/2018", "purple");
    $card4 = new Card();
    $card4->setAttributes("card one", "hejahehfslk", "12/12/2018", "indigo");
    $card5 = new Card();
    $card5->setAttributes("card one", "hejahehfslk", "12/12/2018", "red");
    $card6 = new Card();
    $card6->setAttributes("card one", "hejahehfslk", "12/12/2018", "amber");
    $card7 = new Card();
    $card7->setAttributes("card one", "hejahehfslk", "12/12/2018", "green");

    return array($card1, $card2, $card3, $card4, $card5, $card6, $card7);
}

?>