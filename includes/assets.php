<?php

/**
 * Assets helper class
 */
class Assets {
    
    public static function url() {
        return self::assets_url();
    }

    public static function path($path) {
        return self::assets_url() . $path;
    }

    protected static function assets_url() {
        return '/assets/';
    }
}
new Assets();