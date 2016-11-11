<?php
require_once(dirname(dirname(__FILE__)).'/lib/_autoload.php');
$as = new SimpleSAML_Auth_Simple('default-sp');
$as->requireAuth();
$attributes = $as->getAttributes();
print_r($attributes);
echo "Hello";
