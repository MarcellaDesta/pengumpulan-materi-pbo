<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Constructor</title>
</head>
<body>
        <h1> Data User </h1>

    <?php
        // memanggil class user
        require 'User.php';

        // melakukan instansiasi class objek
        $user = new User(2, "Elextra", "Elextra@gmail.com", "Bandung", "admin");


        // memberi nilai/ assigment value
        $user->id = 2;
        $user->name = "Elextra";
        $user->email = "Elextra@gmail.com";
        $user->address = "Bandung";
        $user->role = "admin";


    ?>
    <ul>
        <li><?php echo $user->id; ?> </li>
        <li><?php echo $user->name; ?> </li>
        <li><?php echo $user->email; ?> </li>
        <li><?php echo $user->address; ?> </li>
        <li><?php echo $user->role; ?> </li>
       
    </ul>

    
</body>
</html>