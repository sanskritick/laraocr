<?php

Route::get('ocr', 'Sanskritick\LaraOCR\Controllers\OcrController@home')->name('home');

Route::post('ocr', 'Sanskritick\LaraOCR\Controllers\OcrController@readImage');

Route::get('ocr/test', 'Sanskritick\LaraOCR\Controllers\OcrController@test');
