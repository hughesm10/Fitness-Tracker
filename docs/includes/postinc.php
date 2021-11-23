<?php

if (isset($_POST["submit"]) && isset($_SESSION["userid"])) {
    
    $username = $_SESSION["userid"];
    $post = $_POST["post"];
    $date = CURDATE();

    require_once 'dbhinc.php';
    require_once 'functionsinc.php';

    if (emptyInputPost($post) !== false) {
        header("Location: ../profile.php?error=emptypost");
        exit();
    }

    createPost($conn, $username, $post, $date);

} 
else {
    header("Location: ../profile.php");
    exit();
}