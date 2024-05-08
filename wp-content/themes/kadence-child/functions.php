<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
    wp_enqueue_style( 'wpm-kadence-style', get_template_directory_uri() . '/style.css' );
}

function ajouter_date_sous_image_mise_en_avant() {
    if (is_single() && has_post_thumbnail()) {
        echo '<div class="post-date">Le ' . get_the_date() . '</div>';
    }
}

add_action('kadence_single_after_featured_image', 'ajouter_date_sous_image_mise_en_avant', 20);
