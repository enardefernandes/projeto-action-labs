<?php
// THUMBNAILS DOS POSTS
add_theme_support('post-thumbnails');
add_image_size ('blogHome', 360, 270, true);
add_image_size ('blogSingle', 1024, 800, true);


// Abilitando o gerenciador de menus do Wordpress
function my_menus() {
    register_nav_menus(array(
        'MenuHeader' => __('Header menu', 'MenuHeader'),
        'MenuFooter' => __('Menu Rodapé', 'MenuFooter')
    ));
}
add_action('init', 'my_menus');


// LIMITA CARACTERES DOS POSTS
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

function limitarTexto($texto, $limite) {
    $contador = strlen($texto);
    if ($contador >= $limite) {
        $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
        return $texto;
    } else {
        return $texto;
    }
}

// PAGINACAO
function wordpress_pagination() {
    global $wp_query;

    $big = 999999999;

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
 
?>