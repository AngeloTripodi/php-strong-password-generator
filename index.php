<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


</head>

<body>

    <?php

    $lowercaseList = ['q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'];
    $uppercaseList = ['A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P'];
    $specialcharactersList = ['{', '}', '[', ']', ';', ':', ',', '.', '/', '<', '>', '?', '_', '+', '~', '!', '@', '#', "'", '"',];
    $numbersList = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    ?>

    <main>

        <form action="./index.php" method="GET">
            <input type="number" name="passwordLength">
            <button type="submit">invia</button>
        </form>

        <?php
        $passwordLen = $_GET['passwordLength'];

        function getRandomPassword($len)
        {
            $password = '';
            $alpha = 'qwertyuiopasdfghjklzxcvbnmASDFGHJKLZXCVBNMQWERTYUIOP1234567890{}[];:,./<>?_+~!@#"';
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


        echo getRandomPassword($passwordLen);
        ?>


    </main>


</body>

</html>