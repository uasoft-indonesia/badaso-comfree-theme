<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Helpers;

class Route
{
    public static function getController($key)
    {
        // get config 'controllers' from config/badaso-comfree-theme.php
        $controllers = config('badaso-comfree-theme.controllers');

        // if the key is not found, return $key
        if (!isset($controllers[$key])) {
            return 'Uasoft\\Badaso\\Theme\\ComfreeTheme\\Controllers\\'.$key;
        }

        // return the value of the key
        return $controllers[$key];
    }
}
