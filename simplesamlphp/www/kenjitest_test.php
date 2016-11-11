<?php
require_once(dirname(dirname(__FILE__)).'/lib/_autoload.php');
$as = new SimpleSAML_Auth_Simple('default-sp');
$as->requireAuth();
$attributes = $as->getAttributes();

echo $attributes["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname"][0];

//print_r($attributes);
//echo "Hello";
