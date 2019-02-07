<?php

session_start();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

$userpairs[0] = array(
    "email" => "admin@admin.cz",
    "password" => "admin"
);

$userpairs[1] = array(
    "email" => "user@admin.cz",
    "password" => "user"
);


if(($email) && (strlen($password) > 0)) {

    foreach ($userpairs as $userpair => $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            echo "Logged in!";
            $_SESSION['email'] = $email;
            break;
        }
    }
}
else {
    echo "Invalid.";
}