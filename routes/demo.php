<?php

use RobertWesner\SimpleMvcPhp\Route;

Route::get('/', function () {
    return Route::render('demo.twig');
});
