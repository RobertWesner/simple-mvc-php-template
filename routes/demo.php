<?php

use RobertWesner\SimpleMvcPhp\Route;

Route::get('/', function () {
    Route::render('demo.twig');
});
