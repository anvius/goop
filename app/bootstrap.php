<?php

    require 'vendor/autoload.php';

    define('DIR_MAIN', __DIR__.'/../');
    define('DIR_CONFIG', DIR_MAIN.'config/');

    define('FILE_CONFIG', DIR_CONFIG.'app.config.ini');

    if(file_exists(FILE_CONFIG)) {
        
    }