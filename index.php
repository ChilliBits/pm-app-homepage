<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);

    if($lang == "de") {
        header("Location: ./de/");
    } else if($lang == "fr") {
        header("Location: ./fr/");
    } else {
        // Default language
        header("Location: ./en/");
    }
    exit;
?>