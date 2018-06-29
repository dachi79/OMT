<?php
define("APP_DIR","c:/wamp/www/omt");

function __autoload($class){
	require_once "classes/{$class}.php";
}