<?php

        echo $_COOKIE["user"];
        print_r($_COOKIE);
        unset($_COOKIE['user']);
        echo "<br>";
        echo $_COOKIE["user"];
        print_r($_COOKIE);
header('Location: ..');
?>
