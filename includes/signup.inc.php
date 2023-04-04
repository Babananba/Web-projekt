<?php

if(isset($_POST["submit"])){

    // Grabbing the data
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($name, $lname, $email, $pwd, $pwdRepeat);

    // Running error handers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../home.php?error=none");
}