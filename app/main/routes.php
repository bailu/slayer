<?php

# ---------------------------------------------------------
# Creating Routes
# ---------------------------------------------------------
#
# - There are two ways to create route, there is the Facade
# and the function route()
#
# e.g
# - Route::addGet() or Route::get() ...
# - route()->addGet() or route()->get() ...

Route::addGet('/', [
    'controller' => 'Welcome',
    'action'     => 'showSignature',
]);


# ----------------------------------------------------------
# Organized Routes using RouteGroup
# ----------------------------------------------------------
#
# - You can group your routes by using route classes,
# mounting them to organize your routes

Route::mount(new App\Main\Routes\AuthRoutes);
Route::mount(new App\Main\Routes\NewsfeedRoutes);