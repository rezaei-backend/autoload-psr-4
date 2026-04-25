<?php
//just for psr-4 
//از دستور زیر برای اجرا میتوانید استفاده کنید 
//php -S 127.0.0.1
use libraries\MyLib;

require_once "vendor/autoload.php";

$lib = new MyLib();
$lib->index();
