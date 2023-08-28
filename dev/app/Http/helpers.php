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