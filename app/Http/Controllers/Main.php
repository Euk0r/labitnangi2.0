<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Main extends Controller
{
    public static function openPage()
    {
        $url = 'https://liblbt.yanao.ru' . \App\Http\Models\Main::getCurrentRoute() . '/';
        //$url = str_replace('++', '/', $url);
        //print_r($url);
        //$temp = strpos($url, 'liblbt.yanao.ru');

        $page = \App\Http\Models\Main::getPage($url);
        $head = \App\Http\Models\Main::getHtmlElementByTag($page, 'head');
        $top_head = \App\Http\Models\Main::getHtmlElementById($page, 'tophead');
        $mast_head = \App\Http\Models\Main::getHtmlElementById($page, 'masthead');
        $main_nav = \App\Http\Models\Main::getHtmlElementById($page, 'main-nav');
        $content_primary = \App\Http\Models\Main::getHtmlElementById($page, 'primary');
        $content_sidebar = \App\Http\Models\Main::getHtmlElementById($page, 'sidebar-primary', 'custom_html-7');
        return view("main.main", [
            'head' => $head,
            'top_head' => $top_head,
            'mast_head' => $mast_head,
            'main_nav' => $main_nav,
            'content_primary' => $content_primary,
            'content_sidebar' => $content_sidebar,
        ]);
    }

    static function after($thiss, $inthat)
    {
        if (!is_bool(strpos($inthat, $thiss)))
            return substr($inthat, strpos($inthat, $thiss) + strlen($thiss));
    }
}
