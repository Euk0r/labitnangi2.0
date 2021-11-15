<?php

namespace App\Http\Models;

use DOMDocument;
use DOMElement;
use DOMXPath;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class Main extends Model
{
    use HasFactory;

    public static function getPage($url)
    {
        //$url = url()->current();
        //$url = stristr($url, '/liblbt.yanao.ru');
        //print_r($url);
        $output = curl_init();    //подключаем курл
        curl_setopt($output, CURLOPT_URL, $url);    //отправляем адрес страницы
        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($output, CURLOPT_HEADER, 0);
        $out = curl_exec($output);        //помещаем html-контент в строку
        curl_close($output);    //закрываем
        $content = self::fixUrls($out);
        //$content = self::getHtmlElementById($out, 'content');

        //$content = preg_replace('!(<a .*?href=)!', '$1' . '+', stristr($content, '"'));

        //print_r($content);
        return $content;
    }

    static function fixUrls($string) {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        foreach ($dom->getElementsByTagName('a') as $item) {
            $href = str_replace('/', '++', $item->getAttribute('href'));
            $server = self::after('/', $_SERVER['SERVER_NAME']);
            $temp = $server . '/' . $href;
            $item->setAttribute('href', $temp);
        }
        $html = $dom->saveHTML();
        libxml_use_internal_errors(false);
        return $html;
    }

    public static function getHtmlElementById($string, $id_element, $id_element_remove = null)
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        $id = $dom->getElementById($id_element);
        if (!is_null($id_element_remove)) {
            if (is_array($id_element_remove)) foreach ($id_element_remove as $item_to_remove) {
                $id_remove = $dom->getElementById($item_to_remove);
                $id_remove->parentNode->removeChild($id_remove);
            } else {
                $id_remove = $dom->getElementById($id_element_remove);
                $id_remove->parentNode->removeChild($id_remove);
            }
        }
        $html = $dom->saveHTML($id);
        libxml_use_internal_errors(false);
        return $html;
    }

    public static function removeHtmlElementById($string, $id_element)
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        $id = $dom->getElementById($id_element);
        $id->parentNode->removeChild($id);
        $html = $dom->saveHTML();
        libxml_use_internal_errors(false);
        return $html;
    }

    public static function getHtmlElementByTag($string, $id_element)
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        $id = $dom->getElementsByTagName($id_element);
        foreach ($id as $item) {
            $html = $dom->saveHTML($item);
        }
        libxml_use_internal_errors(false);
        return $html;
    }

    static function after ($thiss, $inthat)
    {
        if (!is_bool(strpos($inthat, $thiss)))
            return substr($inthat, strpos($inthat,$thiss)+strlen($thiss));
    }
}
