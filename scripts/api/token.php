<?php

define("TOKEN_DELIMITER", "///TDELIM///");

function token_encode($userid, $password_hash, $login){
    return base64_encode($userid.TOKEN_DELIMITER.$password_hash.TOKEN_DELIMITER.$login);
}

function token_decode($token) {
    $decoded_token = base64_decode($token);

    $decoded_splitted_token = explode(TOKEN_DELIMITER, $decoded_token);

    $userid = $decoded_splitted_token[0];
    $password_hash = $decoded_splitted_token[1];
    $login = $decoded_splitted_token[2];

    return array(
        "userid" => $userid,
        "password_hash" => $password_hash,
        "login" => $login
    );
}
