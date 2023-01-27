<?php
function getRandomPassword($len)
{
    $password = '';
    $alpha = 'qwertyuiopasdfghjklzxcvbnmASDFGHJKLZXCVBNMQWERTYUIOP1234567890{}[];:,./>?_+~!@#"';
    $alphaLen = strlen($alpha) - 1;
    // $lowercase = "qwertyuiopasdfghjklzxcvbnm";
    // $uppercase = "ASDFGHJKLZXCVBNMQWERTYUIOP";
    // $numbers = "1234567890";
    // $specialcharacters = "{}[];:,./<>?_+~!@#";
    for ($i = 0; $i < $len; $i++) {
        $password .= $alpha[random_int(0, $alphaLen - 1)];
    }
    return $password;
}
