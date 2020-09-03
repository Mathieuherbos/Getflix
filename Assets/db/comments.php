<?php
    include "db/comments_db.php";
    $db = new PDO("mysql:host=127.0.0.1;dbname=catflix;charset=utf8", "root". "");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="streaming.css">
</head>
<body>
    <form action=""  method="post">
        <label for="comment">Comment</label> 
        <br>
        <textarea name="comment" id="" cols="30" rows="3" <?php echo $disabled ?>></textarea><br>
        <button type="submit" <?php echo $disabled ?>>Submit</button>
    </form>
    <?php 
        if(isset($message)){
            echo $message;
        }
    ?>

<div>
        <!-- Printing comment information from query fetch -->
        <?php while($a = $content->fetch()){ ?>
            <p><?= $a['userName'] ?></p>
            <!-- replace with $_SESSION['userN'] -->
            
            <p><?= $a['body'] ?></p>
            <p><?= $a['created'] ?></p>
            <br>

        <?php } ?>
        

    </div>

    

    
</body>
</html>
