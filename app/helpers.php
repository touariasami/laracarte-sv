<?php


function page_title($title){

    $base_title = 'Laracarte - Les artisans';

    if ( $title === '' ){

        return $base_title ;

    } else {

        return $title . ' | ' . $base_title;

    }
}
