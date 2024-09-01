<?php
    // $value = 'что-то откуда-то';
    // setcookie("TestCookie", $value);
    setcookie('location','USA',time() + 60 * 60 * 24 * 7, '/');
    if (isset($_COOKIE['location'])) $location = $_COOKIE['location'];
    echo $location;
?>