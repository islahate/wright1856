<?php

/**
 * Default controller and action
 */
define("CONTROLLER_DEFAULT", "accueilController");
define("CONTROLLER_ADMIN_DEFAULT", "loginController");
define("ACTION_DEFAULT", "index");
define('CONTROLLER_SUF', 'Controller');

/**
 * default controller erreur
 */
define("ERREUR_CONTROLLER", "erreur");
define("PAGE_NOT_FOUND", "page_not_found");
define("ACTION_NOT_FOUND", "action_not_found");
define("PERMISSION", "permission");
define("SYSTEM_ERREUR", "system_erreur");
define("ADMIN_PAGE_NOT_FOUND", "admin_page_not_found");
define("ADMIN_ACTION_NOT_FOUND", "admin_action_not_found");
define("ADMIN_PERMISSION", "admin_permission");


/**
 * DB configuration
 */
define("HOST", "localhost");
define("NAME", "islahato_w");
define("USER", "islahato_w");
define("PASS", 'K!QticKTe$lX');
define("SITE_WEB", "https://www.islahate.ovh/");

/**
 *  GOOGLE ANALYTICS "oauth2"
 */
define('CLIENT_ID', '');
define('CLIENT_SECRET', '');
define('REDIRECT', ''); // redirect page
define('ACCOUNT_ID', 'ga:167336202'); // like ga:xxxxxxxxx


/**
 *  SMTP configuration
 */
define("SMTP_DEBUG", 2);
define("SMTP_HOST", 'smtp.office365.com');
define("SMTP_PORT", 587);
define("SMTP_USER", 'contact@islahate.ma');
define("SMTP_PASS", 'reception@18');
define("SMTP_SENDER_NAME", "contact");