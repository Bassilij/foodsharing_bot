<?php
    function check_secret($key) {
            $secret = "MySecretKey";
            if ($key != $secret) {
                die("error");
            }
    }

    $confirmation_token = "4ds4a5asd"; // Код со страницы настроек
    $group_id = 12345678910;
    $data = json_decode(file_get_contents('php://input'));
    if (!isset($data->secret)){
            if ($data->type == "confirmation")  {
                die($confirmation_token);
            } else {
                die("error");
            }
    } else {
        // Тут будет обработка событий
    }
?>
