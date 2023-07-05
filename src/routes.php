<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    $path = rtrim(config('menu.route_path'));

    // Routes for menus
    Route::post($path . '/menus/create', array('as' => 'menus.create', 'uses' => '\DevYSM\Menu\Controllers\MenuController@createMenu'));
    Route::post($path . '/menus/update', array('as' => 'menus.update', 'uses' => '\DevYSM\Menu\Controllers\MenuController@updateMenu'));
    Route::post($path . '/menus/delete', array('as' => 'menus.delete', 'uses' => '\DevYSM\Menu\Controllers\MenuController@deleteMenu'));

    // Routes for menu items
    Route::post($path . '/menu-items/create', array('as' => 'menus.items.create', 'uses' => '\DevYSM\Menu\Controllers\MenuController@addMenuItem'));
    Route::post($path . '/menu-items/update', array('as' => 'menus.items.update', 'uses' => '\DevYSM\Menu\Controllers\MenuController@updateMenuItem'));
    Route::post($path . '/menu-items/delete', array('as' => 'menus.items.delete', 'uses' => '\DevYSM\Menu\Controllers\MenuController@deleteMenuItem'));
});
