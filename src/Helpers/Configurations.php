<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Helpers;

use Uasoft\Badaso\Models\Configuration;

class Configurations
{
    public static function index()
    {
        $configurations = Configuration::where('group', 'comfreeTheme')->get();
        foreach ($configurations as $key => $config) {
            if ($config->key == 'comfreeThemeSiteTitle') {
                $site_title = $config->value;
            }
        }

        $title = (object)[
            "siteTitle" => $site_title
        ];
        return $title;
    }
}
