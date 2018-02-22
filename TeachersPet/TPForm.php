<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    fopen("feedback.txt", "a+");
    echo fwrite("feedback.txt", $name + " " + $email + " " + $rating + " " + $review);
    fclose("feedback.txt");
?>