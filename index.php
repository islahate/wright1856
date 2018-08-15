<?php
/**
 * Created by Digital.
 * User: Islahate
 * Date: 09/03/2018
 * Mail: a.majoch@iwaco.ma
 * Autor: majoch abdessamad
 * File: index
 */

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '64M');

error_reporting(E_ALL);

date_default_timezone_set('Africa/Casablanca');

define("APP_DIR", "app");
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__FILE__));

define("LIB_DIR", "lib");

if (!file_exists(LIB_DIR . DS . 'bootstrap.php'))
    die ('<h3>Erreur bootstrap</h3> bootstrap n\'existe pas ou endommag&eacute;');

include LIB_DIR . DS . 'bootstrap.php';


?>