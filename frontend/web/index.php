<?php$env = getenv('ENV');if (!empty($env)) {    define('ENV', $env);}define("ROOT_DIR", dirname(dirname(__DIR__)));defined('ENV') or define('ENV', 'prod');if (ENV === 'dev') {    defined('YII_DEBUG') or define('YII_DEBUG', true);    defined('YII_ENV') or define('YII_ENV', 'dev');}require(ROOT_DIR . '/vendor/skeeks/cms/app-web.php');