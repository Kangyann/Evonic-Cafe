<?php

namespace App\Models;

class File
{
    private static $link = [
        "title" => "Evonic Caffe",
        "images" => [
            "primary_icon" => "assets/images/icon-1.png",
            "icon" => "assets/images/icon/",
            "gallery" => "assets/images/gallery/",
            "menu" => "assets/images/menu/"

        ]
    ];
    public static function all()
    {
        return self::$link;
    }
}
