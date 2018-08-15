<?php

/**
 * Created by majoch abdessamad.
 * User: BBC
 * Date: 28/07/2018
 * Time: 15:30
 */
class Router
{

    static $list_rout = array(
        SITE_WEB . 'le-the' => SITE_WEB . 'pages/the',
        SITE_WEB . 'the-tea' => SITE_WEB . 'pages/the',

        SITE_WEB . 'accessoires' => SITE_WEB . 'pages/accessoires',
        SITE_WEB . 'accessoires/(.*)?' => SITE_WEB . 'pages/accessoire_detail/',

        SITE_WEB . 'musee-wright' => SITE_WEB . 'pages/musee',
        SITE_WEB . 'reservation' => SITE_WEB . 'pages/reservation',
        SITE_WEB . 'booking' => SITE_WEB . 'pages/reservation',
//        SITE_WEB . 'collection/heritage/(.*)?' => SITE_WEB . 'pages/detail/',
        SITE_WEB . 'our-rooms' => SITE_WEB . 'pages/our_rooms',
        SITE_WEB . 'nos-magasins' => SITE_WEB . 'pages/our_rooms',
        SITE_WEB . 'collections' => SITE_WEB . 'pages/collections',

        SITE_WEB . 'collections/heritage' => SITE_WEB . 'pages/collection/heritage',
        SITE_WEB . 'collections/1001-nuits' => SITE_WEB . 'pages/collection/1001-nuits',
        SITE_WEB . 'collections/escapade' => SITE_WEB . 'pages/collection/escapade',

        SITE_WEB . 'collections/heritage/(.*)?' => SITE_WEB . 'pages/detail/',
        SITE_WEB . 'collections/1001-nuits/(.*)?' => SITE_WEB . 'pages/detail/',
        SITE_WEB . 'collections/escapade/(.*)?' => SITE_WEB . 'pages/detail/'

//        SITE_WEB . 'collections/(.*)?' => SITE_WEB . 'pages/collection/'
    );
    static $url = null;

    static function getOriginal()
    {
        $return = null;

        foreach (self::$list_rout as $u => $original) {
//            $_u = str_replace('/', '\/', $u);
//            $_u = str_replace('.', '\.', $_u);

            preg_match("#{$u}#", self::$url, $match);

//            debug($u . ' | ' . self::$url);

            if (!empty($match) && empty($match[1])) $return = array($original, str_replace(SITE_WEB, '', $original));
            elseif (!empty($match) && !empty($match[1])) $return = array($original . $match[1], str_replace(SITE_WEB, '', $original . $match[1]));
        }

//        debug($return);
//        exit;
        return $return;

    }
}