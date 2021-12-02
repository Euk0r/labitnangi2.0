<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderPanel extends Model
{
    const HeaderItems = [
        "Главная" => [

        ],
        "news" => "Новости",
        "plan" => "Учебные планы",
        "scientific-work" => "Научная работа",
        "graduates" => "Выпускники",
        "photoalbum" => "Фотоальбом",
        "karta-sajta/" => "Карта сайта"
    ];

    public static function getHeaderItems(){
        return self::HeaderItems;
    }
}
