<?php
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
set_time_limit(0);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

global $USER, $APPLICATION;
if (!is_object($USER))
    $USER = new CUser;

if(!in_array(222, $USER -> GetUserGroupArray())) exit();

?>
<form method="post">
    <div>
        <p>Добавить:</p>
        <p><textarea rows="20" cols="40" name="data"></textarea></p>
        <p><input type="submit"></p>
    </div>
</form>