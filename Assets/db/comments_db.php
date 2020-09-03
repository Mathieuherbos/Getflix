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
    header("location: index.html");
    // we can add other options here
}

// setting user variables from the session information
$userID = $_SESSION['userId'];
$userName = $_SESSION['userN'];

// Checking if the user is premium
$stmt = $db->prepare("SELECT premium FROM userdb WHERE id = '".$userID."' AND premium = 1;");
$stmt->execute();
$premium = $stmt->rowCount();
//echo $premium;

// if user is not premium
if($premium !== 1){
    $message =  "you are not premium, you cannot comment on this page";
    // setting variable do diable textarea and button
    $disabled = "disabled";
}
// if the user is premium, allow textarea and button to be accessible 
//and execute code to submit comment
else {
    $message = "you are premium";
    $disabled = "";
    if(isset($_POST['comment'])){
        if(!empty($_POST['comment'])){
            $comment = htmlspecialchars($_POST['comment']);
            // $userID = $_SESSION['userId'];
            // $userName = $_SESSION['userN'];
    
            $ins = $db->prepare('INSERT INTO comments(userID, userName, body) 
            VALUES (?, ?, ?)');
            $ins->execute(array($userID, $userName, $comment));
    
            $message = "your comment has been submitted";
            // redirect to stop comments from resumitting upon page reload
            header("location: comments.php?SUCCESS");
    
        } else {
            $messsage = "please enter a comment";
        }
        
    }
}

// Fetching comments and ordering by most recent on top
$content = $db->query('SELECT * FROM comments ORDER BY id DESC');


?>