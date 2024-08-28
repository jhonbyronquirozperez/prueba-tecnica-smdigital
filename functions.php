<?php

#funciones de encolamiento
function enque_style(){

    wp_enqueue_style(
        'public-css',
        get_template_directory_uri().'/public/css/atr-public.css',
        array(),
        '1.0.0',
        'all'
    );


    wp_enqueue_style(
        'bootstarp-css',
        get_template_directory_uri().'/helpers/bootstrap.min.css',
        array(),
        '5.0.0',
        'all'
    );

}

#accionadores
add_action('wp_enqueue_scripts','enqueue_styles');


function enque_scripts(){

     wp_enqueue_script(
        'public-js',
        get_template_directory_uri().'/public/js/atr-public.js',
        ['jquery','bootstrap-min'],
        '1.0.0',
        true
     );


     wp_enqueue_script(
        'bootstrap-min',
        get_template_directory_uri().'/helpers/bootstrap/js/bootstrap.min.js',
        ['jquery'],
        '4.0.0',
        true
     );


}

add_action('wp_enqueue_scripts','enqueue_scripts');