<?php
// FMStudio v2 - do not remove comment, needed for DreamWeaver support
# FileName="Connection_php_FMStudio2.htm"
# Type="FMStudio2"
# FMStudio2="true"
$path = preg_replace("#^(.*[/\\\\])[^/\\\\]*[/\\\\][^/\\\\]*$#",'\1',__FILE__);
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('FileMaker.php');
require_once('FMStudio_v2/FMStudio_Tools.php');
$hostname_vouchers = "vouchers.ahasf.org";
$database_vouchers = "FinancialServices";
$username_vouchers = "password";
$password_vouchers = "R@set4me!";
$vouchers = new FileMaker($database_vouchers, $hostname_vouchers, $username_vouchers, $password_vouchers); 
?>