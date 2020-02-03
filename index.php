<?php 
    //set default value of variables for initial page load
    if (!isset($first_name)) { $first_name = $_GET['firstname']; } 
    if (!isset($last_name)) { $last_name = $_GET['lastname']; } 
    if (!isset($age)) { $age = $_GET['age']; } 
    
    if ($age <18) {
         $can_vote = 'I am not old enough to vote in the United States';
     } else {
         $can_vote = 'I am old enough to vote in the United States';
     }
        
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment 1 INF653</title>
    </head>

<body>
    <main>
    <h1>Are you of voting age?</h1>
        <div>
            <p>"Hello, my name is <?php echo $first_name. ' '.$last_name; ?>."</p>
        </div>
        <div>
            <p>"I am <?php echo $age ?> years old and <?php echo $can_vote; ?>."</p>
        </div>
    </main>
</body>
<footer>
    <p>Created by Amy Booker for FHSU INF 653-VB on 02-03-2020!</p>
</footer>
</html>