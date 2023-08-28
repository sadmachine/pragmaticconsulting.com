<?php
if (!function_exists('asset_nocache')) {
    function asset_nocache($location)
    {
        return asset($location) . '?' . hrtime(true);
    }
}

if (!function_exists('file_ext')) {
    function file_ext($filename)
    {
        return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    }
}

if (!function_exists('resource')) {
    function resource($location)
    {
        $path = trim(env('ASSET_PREFIX', ''), '/') . '/' . trim($location, '/');
        return asset($path);
    }
}

if (!function_exists('dynamic_url')) {
    function dynamic_url($location)
    {
        $path = trim(env('URL_PREFIX', ''), '/') . '/' . trim($location, '/');
        return url($path);
    }
}