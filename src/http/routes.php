<?php

Route::get('blog', 'Cloudware\Blog\BlogController@index')->name('blog_index')->middleware('web');
Route::get('blog/about', 'Cloudware\Blog\BlogController@about')->name('blog_index')->middleware('web');
Route::get('blog/post', 'Cloudware\Blog\BlogController@post')->name('blog_index')->middleware('web');
Route::get('blog/contact', 'Cloudware\Blog\BlogController@contact')->name('blog_index')->middleware('web');


//Route::get('subtract/{a}/{b}', 'Cloudware\Blog\BlogController@subtract')->name('subtract')->middleware('auth');
