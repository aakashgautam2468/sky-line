<?php

if (!defined('APP_NAME')) {
    define('APP_NAME', 'Login System');
}
if (!defined('APP_ORGANIZATION')) {
    define('APP_ORGANIZATION', 'Flora');
}
if (!defined('APP_OWNER')) {
    define('APP_OWNER', 'Aakash');
}
if (!defined('APP_DESCRIPTION')) {
    define('APP_DESCRIPTION', 'Embeddable PHP Login System');
}

if (!defined('ALLOWED_INACTIVITY_TIME')) {
    define('ALLOWED_INACTIVITY_TIME', time() + 1 * 60);
}

if (!defined('DB_DATABASE')) {
    define('DB_DATABASE', 'aakash_loginsystem');
}
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', 'Password_Whatever_you_want');
}
if (!defined('DB_PORT')) {
    define('DB_PORT', '3306');
}

if (!defined('MAIL_HOST')) {
    define('MAIL_HOST', 'smtp.gmail.com');
}
if (!defined('MAIL_USERNAME')) {
    define('MAIL_USERNAME', 'example.email@gmail.com');
}
if (!defined('MAIL_PASSWORD')) {
    define('MAIL_PASSWORD', 'example-password');
}
if (!defined('MAIL_ENCRYPTION')) {
    define('MAIL_ENCRYPTION', 'ssl');
}
if (!defined('MAIL_PORT')) {
    define('MAIL_PORT', 465);
}
