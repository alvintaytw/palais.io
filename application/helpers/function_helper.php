<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function make_seed() {
	list($usec, $sec) = explode(' ', microtime());
	return (float) $sec + ((float) $usec * 100000);
}

function formatcurrency($price, $currency, $withsymbol = false, $currencyposition = "") {
	$formattedprice = "";
	switch($currency) {
     	case "S$": $formattedprice = number_format($price, 2); break;
          case "A$": $formattedprice = number_format($price, 2); break;
     }
     
     if ($withsymbol) {
     	if (intval($currencyposition) == 1)
          	$formattedprice = $currency . $formattedprice;
          else
          	$formattedprice = $formattedprice . $currency;
     }
     
     return str_replace("$", "&#36;", $formattedprice);
}

function returnstatus($status) {
	$status = intval($status);
	return (intval($status) == 1 ? "Active" : (intval($status) == 2 ? "Draft" : "Unused"));
}

function stringtodb($str, $maxlength = 0) {
	$str = str_replace("\$", "&#36;", $str);
	$str = ($maxlength > 0 ? substr($str, 0, $maxlength) : $str);
	return mysql_real_escape_string($str);
}

function stringtodbsimple($str, $maxlength = 0) {
	$str = ($maxlength > 0 ? substr($str, 0, $maxlength) : $str);
	return mysql_real_escape_string($str);
}

function dbtostring($str) {
	return htmlentities($str);
}

function dbtostringAJAX($str) {
	return $str;
}

function stringtoGApath($str) {
	return strtolower(preg_replace("/\W+/i", "", $str));
}
?>
