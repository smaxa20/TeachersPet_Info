<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    $file = fopen("feedback.txt", "a+");
    echo fwrite($file, $name);// + " " + $email + " " + $rating + " " + $review);
    fclose($file);
?>