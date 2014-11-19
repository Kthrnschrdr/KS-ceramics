<?
    function register_entities() {
    register_nav_menu( 'top-nav', 'Nav Bar');
    }
    add_action('init', 'register_entities');

?>