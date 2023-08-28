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

if (!function_exists('path')) {
    function path_concat() {
        $paths = array();

        foreach (func_get_args() as $arg) {
            if ($arg !== '') { $paths[] = $arg; }
        }

        return preg_replace('#/+#','/',join('/', $paths));
    }
}

if (!function_exists('resource')) {
    function resource($location)
    {
        $path = path_concat(
            env('APP_PREFIX', ''), 
            env('APP_ASSETS_PREFIX', ''), 
            $location
        );
        return asset($path);
    }
}
