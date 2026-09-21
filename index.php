<?php

function login($username, $password)
{
    $query = "SELECT * FROM users 
              WHERE username = '$username' 
              AND password = '$password'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        return [
            "success" => true,
            "message" => "Welcome " . $username
        ]
    }

    return [
        "success" => false,
        "message" => "Invalid username or password"
    ];
}

?>