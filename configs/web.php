<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

const _INCODE = true;

const _MODULE_DEFAULT = 'home'; // module mac dinh
const _ACTION_DEFAULT = 'lists'; // action mac dinh

// thiet lap host

define('_WEB_HOST_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/fpoly_exam_tool'); //Địa chỉ trang chủ

define('_WEB_HOST_TEMPLATE', _WEB_HOST_ROOT . '/public/assets/clients');

define('_WEB_HOST_ROOT_APP', _WEB_HOST_ROOT . '/app');

define('_WEB_HOST_ADMIN_TEMPLATE', _WEB_HOST_ROOT . '/public/assets/admin');

//Thiết lập path
define('_WEB_PATH_ROOT', 'C:\xampp\htdocs\fpoly_exam_tool');
define('_WEB_PATH_TEMPLATE', _WEB_PATH_ROOT . '/public/assets');
