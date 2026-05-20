<?php
/*
Plugin Name:  Fluent Custom Post Types
Description:  Developer-friendly fluent interface for registering WordPress custom post types
Version:      1.0.0
License:      MIT License
*/

use FluentCustomPostTypes\CustomWordpressObject;
use FluentCustomPostTypes\CustomWordpressObject\PostType;
use FluentCustomPostTypes\CustomWordpressObject\Taxonomy;
use FluentCustomPostTypes\CustomPostTypes;

/**
 * Autoload classes from PSR4 src directory
 * Mirrored after Composer dump-autoload for performance
 *
 * @param string $class - class to load.
 *
 * @since 1.0.0
 *
 * @return void
 */
function fluent_custom_post_types_autoload( $class ) {
    $classes = [
        CustomWordpressObject::class => 'CustomWordpressObject.php',
        PostType::class              => 'CustomWordpressObject/PostType.php',
        Taxonomy::class              => 'CustomWordpressObject/Taxonomy.php',
        CustomPostTypes::class       => 'CustomPostTypes.php'
    ];
    if ( isset( $classes[ $class ] ) ) {
        require __DIR__ . '/src/' . $classes[ $class ];
    }
}

spl_autoload_register( 'fluent_custom_post_types_autoload' );



