<?php

namespace FluentCustomPostTypes;

use FluentCustomPostTypes\CustomWordpressObject\PostType;
use FluentCustomPostTypes\CustomWordpressObject\Taxonomy;

final class CustomPostTypes
{

    public static function register(array $types, $init = true)
    {
        if($init === true) {
            foreach ( $types as $type ) {
                add_action('init', function() use ($type) {
                    $type->register();
                });
            }
        }else {
            foreach ( $types as $type ) {
                $type->register();
            }
        }
    }

    public static function createPostType(string $postType, string $singular=null, string $plural=null): PostType
    {
        return new PostType($postType, $singular, $plural);
    }

    public static function createTaxonomy(string $taxonomy, $objectType, string $singular=null, string $plural=null): Taxonomy
    {
        return new Taxonomy($taxonomy, $objectType, $singular, $plural);
    }

}
