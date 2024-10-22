<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Constructor</title>
</head>
<body>
    <center>
        <h1> Data User </h1>
    </center>

    <?php
        // memanggil class user
        require 'User.php';

        // melakukan instansiasi class objek
        $user = new User();
    ?>
    <ul>
        <li><?php var_dump($user) ?> </li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    
</body>
</html>