<?php 
require_once("./model/User.php");
require_once("./model/Card.php");
require_once("./model/dataAccess.php");

$loggedIn = isset($_COOKIE["Loggedin"]);

if($loggedIn){
    $paramsSet = true;
    @$params = array (
        $_REQUEST["noteName"],
        $_REQUEST["noteContent"], 
        $_REQUEST["dueDate"],
        $_REQUEST["color"]
    );

    foreach ($params as $p){
        if(preg_match("/(.+)/", $p) != 1){
            $paramsSet = false;
        }
    }

    if($paramsSet){
        $card = new Card();
        $card->user = $_COOKIE["Loggedin"];
        $card->title = $_REQUEST["noteName"];
        $card->content = $_REQUEST["noteContent"];
        $card->dueDate = $_REQUEST["dueDate"];
        $card->color = $_REQUEST["color"];
        insertNewCard($card);
    }

    $userCards = getUserCardsByDate($_COOKIE["Loggedin"]);

    if(count($userCards) == 0){
        $displayNoNotesMsg = "inline";
    }else{
        $displayNoNotesMsg = "none";
    }

    $user = new User();
    $user->userId = $_COOKIE["Loggedin"];
    $userName = getUserName($user)[0]->userName;

    require_once("./view/homepage_view.php");
}else{
    $userToBeLoggedIn = false;
    
    if(isset($_REQUEST["username"]) && isset($_REQUEST["pword"])){
        $loggingInUser = new User();
        $loggingInUser->userName = $_REQUEST["username"];
        $userList = getUser($loggingInUser);
        if(count($userList) != 0){
            if(password_verify($_REQUEST["pword"], $userList[0]->password)){
                $userToBeLoggedIn = true;
            }
        }
    }

    if($userToBeLoggedIn){
        setcookie("Loggedin", $userList[0]->userId, time()+3600);
    }else{ //create user
        $paramsSet = true;
        @$params = array (
            $_REQUEST["username"],
            $_REQUEST["pword"]
        );
        
        foreach ($params as $p){
            if(preg_match("/(.+)/", $p) != 1){
                $paramsSet = false;
            }
        }
        
        if($paramsSet){
            $user = new User();
            $user->userName = $_REQUEST["username"];
            $user->password = password_hash($_REQUEST["pword"], PASSWORD_BCRYPT);
            addNewUser($user);
        }
    }

    require_once("./view/login_view.php");
}


?>