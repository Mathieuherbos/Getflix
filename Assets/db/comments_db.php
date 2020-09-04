<?php

$db = new PDO("mysql:host=127.0.0.1;dbname=catflix;charset=utf8", "root". "");

session_start();

// checking if user is logged in and if not, redirecting to index.html
if(isset($_SESSION['userN'])){
    echo "<p>Welcome " . $_SESSION['userN'] . "</p>";
    // we can also do the same with the user ID
}
else {
    // once session expires, go back to landing page
    header("location: ../index.html");
    // we can add other options here
}

// temp variable for testing
$jeuinfo = 1;

// setting user variables from the session information
$userID = $_SESSION['userId'];
$userName = $_SESSION['userN'];
// variable taken from selected video linked to streaming php
$videoID = $jeuinfo;

// Checking if the user is premium
$stmt = $db->prepare("SELECT premium FROM userdb WHERE id = '".$userID."' AND premium = 1;");
$stmt->execute();
$premium = $stmt->rowCount();
//echo $premium;

// if user premium, set textarea and button to disabled
if($premium !== 1){
    $message =  "you are not premium, you cannot comment on this page";
    // setting variable do diable textarea and button
    $disabled = "disabled";
}
else {
    $message = "you are premium";
    $disabled = "";
}

// submitting comment to db - only available if premium
if(isset($_POST['comment'])){
    if(!empty($_POST['comment'])){
        $comment = htmlspecialchars($_POST['comment']);
        // $userID = $_SESSION['userId'];
        // $userName = $_SESSION['userN'];

        $ins = $db->prepare('INSERT INTO comments(userID, userName, streamingID, body) 
        VALUES (?, ?, ?, ?)');
        $ins->execute(array($userID, $userName, $videoID, $comment));

        $message = "your comment has been submitted";
        // redirect to stop comments from resumitting upon page reload
        header("location: comments.php?SUCCESS");

    } else {
        $messsage = "please enter a comment";
    }
    
}



// Fetching comments for selected video and ordering by most recent on top
$content = $db->query("SELECT * FROM comments WHERE streamingID = '".$videoID."' ORDER BY id DESC");
// coudld also order by date


?>