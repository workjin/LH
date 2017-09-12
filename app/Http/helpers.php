<?php

namespace App\Http;

class helpers
{
    public static $dict_platform = array(
        1=>'至尊心水',
        2=>'人人料',
        3=>'心水论坛',
        4=>'每期玄机',
        5=>'168公式');

    static function platform_to_id($platform)
    {
        return array_search($platform, helpers::$dict_platform);
    }

    static function id_to_platform($id)
    {
        return helpers::$dict_platform[$id];
    }

    static function id_to_predictionytpe($id)
    {

    }
}



?>