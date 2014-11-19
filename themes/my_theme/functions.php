<?
    function register_entities() {
    register_nav_menu( 'Nav Bar', 'Top Navigation Bar');
    }
    add_action('init', 'register_entities');

?>