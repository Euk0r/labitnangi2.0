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
        /*
        $output = curl_init();    //подключаем курл
        curl_setopt($output, CURLOPT_URL, $url);    //отправляем адрес страницы
        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($output, CURLOPT_HEADER, 0);
        $out = curl_exec($output);        //помещаем html-контент в строку
        curl_close($output);    //закрываем
        */
        $out = self::curl_get_contents($url, 1, 0);
        //$out = file_get_html('https://liblbt.yanao.ru/');
        //print_r($out ['html']);
        $content = self::fixUrls($out['html']);
        return $content;
    }

    static function fixUrls($string)
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        foreach ($dom->getElementsByTagName('a') as $item) {
            $href = $item->getAttribute('href');
            $isLabitnangi = strpos($href, 'liblbt.yanao.ru');
            if (!$isLabitnangi === false) {
                $href = self::after('liblbt.yanao.ru', $href);
                //print_r($href);
                $item->setAttribute('href', self::after('/', $_SERVER['SERVER_NAME']) . $href);
            }
        }

        //foreach ($dom->getElementsByTagName('img') as $item) {
            //$item->replaceWith()
            //$href = $item->getAttribute('src');
            //$href->replaceWith('data-src');
            //$isLabitnangi = strpos($href, 'liblbt.yanao.ru');
            //$item = str_replace('src', 'data-src', $item->getAttribute('href'));
            //print_r( $href . ' /123/');
            //$href = self::after('liblbt.yanao.ru', $href);
            //print_r($href);
            //$item->setAttribute('href', self::after('/', $_SERVER['SERVER_NAME']) . $href);
            //$href = str_replace('/', '++', $item->getAttribute('href'));
            //$server = self::after('/', $_SERVER['SERVER_NAME']);
            //$temp = $server . '/' . $href;
            //$item->setAttribute('href', $temp);
        //}

        $html = $dom->saveHTML();
        libxml_use_internal_errors(false);
        return $html;
    }

    public static function getHtmlElementById($string, $id_element, $id_element_remove = null)
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        $html = null;
        $id = $dom->getElementById($id_element);
        if (!is_null($id)) {
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
        }
        libxml_use_internal_errors(false);
        return $html;
    }

    public static function getHtmlElementByTag($string, $tag_element, $id_element_remove = null)
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument;
        $dom->loadHTML($string);
        $html = null;
        $id = $dom->getElementsByTagName($tag_element);
        if (!is_null($id)) {
            if (!is_null($id_element_remove)) {
                if (is_array($id_element_remove)) foreach ($id_element_remove as $item_to_remove) {
                    $id_remove = $dom->getElementById($item_to_remove);
                    $id_remove->parentNode->removeChild($id_remove);
                } else {
                    $id_remove = $dom->getElementById($id_element_remove);
                    $id_remove->parentNode->removeChild($id_remove);
                }
            }
            foreach ($id as $item) {
                $html = $dom->saveHTML($item);
            }
        }
        libxml_use_internal_errors(false);
        return $html;
    }

    static function after($thiss, $inthat)
    {
        if (!is_bool(strpos($inthat, $thiss)))
            return substr($inthat, strpos($inthat, $thiss) + strlen($thiss));
    }

    static public function getCurrentRoute()
    {
        return (isset($_SERVER['HTTP_HOST']) && !empty($_SERVER['HTTP_HOST'])) ? self::after($_SERVER['HTTP_HOST'], url()->current()) : null;
    }

    static function curl_get_contents($page_url, $pause_time, $retry)
    {
        /*
        $page_url - адрес страницы-источника
        $base_url - адрес страницы для поля REFERER
        $pause_time - пауза между попытками парсинга
        $retry - 0 - не повторять запрос, 1 - повторить запрос при неудаче
        */
        $error_page = array();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0");
        curl_setopt($ch, CURLOPT_COOKIEJAR, str_replace("\\", "/", getcwd()) . '/gearbest.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, str_replace("\\", "/", getcwd()) . '/gearbest.txt');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Автоматом идём по редиректам
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Не проверять SSL сертификат
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // Не проверять Host SSL сертификата
        curl_setopt($ch, CURLOPT_URL, $page_url); // Куда отправляем
        //curl_setopt($ch, CURLOPT_REFERER, $base_url); // Откуда пришли
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Возвращаем, но не выводим на экран результат
        $response['html'] = curl_exec($ch);
        $info = curl_getinfo($ch);
        if ($info['http_code'] != 200 && $info['http_code'] != 404) {
            $error_page[] = array(1, $page_url, $info['http_code']);
            if ($retry) {
                sleep($pause_time);
                $response['html'] = curl_exec($ch);
                $info = curl_getinfo($ch);
                if ($info['http_code'] != 200 && $info['http_code'] != 404)
                    $error_page[] = array(2, $page_url, $info['http_code']);
            }
        }
        $response['code'] = $info['http_code'];
        $response['errors'] = $error_page;
        curl_close($ch);
        return $response;

    }
}
