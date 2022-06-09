<?php
/**
 * Plugin Name: Plugin de l'exercice #1
 * Author: Cedric Forges
 * Description: Premier plugin pour l'exercice #1
 * Author URI: https://github.com/cedogithub/exer1
 */

?>

<?php
function function_general(){
    function mon_31w_enqueue() {
        wp_enqueue_style(   'mon_31w-style',
                            get_stylesheet_uri(),
                            array(),
                            filemtime(get_template_directory() . '/style.css'));
    }
    add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );
}
add_action('init', 'function_general')


?>