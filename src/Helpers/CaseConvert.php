<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Helpers;

class CaseConvert
{
    public static function slugToCapitalize($string)
    {
        $modified_string = str_replace('-', ' ', $string);

        return ucwords($modified_string);
    }
}
