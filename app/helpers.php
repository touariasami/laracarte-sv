<?php


/**
 * @param $title
 */
function page_title($title){

    $base_title = config('app.name') .' - Les artisans';

    if ( $title === '' ){

        return $base_title ;

    } else {

        return $title . ' | ' . $base_title;

    }
}


/**
 * @param $route
 */
function set_active_route($route){

    return (Route::is($route)) ? 'active' : '';

}