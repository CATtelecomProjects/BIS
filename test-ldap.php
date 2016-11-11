<?php

require('adodb.inc.php');
 
/* Make sure to set this BEFORE calling Connect() */
/*
$LDAP_CONNECT_OPTIONS = Array(
         Array ("OPTION_NAME"=>LDAP_OPT_DEREF, "OPTION_VALUE"=>2),
         Array ("OPTION_NAME"=>LDAP_OPT_SIZELIMIT,"OPTION_VALUE"=>100),
         Array ("OPTION_NAME"=>LDAP_OPT_TIMELIMIT,"OPTION_VALUE"=>30),
         Array ("OPTION_NAME"=>LDAP_OPT_PROTOCOL_VERSION,"OPTION_VALUE"=>3),
         Array ("OPTION_NAME"=>LDAP_OPT_ERROR_NUMBER,"OPTION_VALUE"=>13),
         Array ("OPTION_NAME"=>LDAP_OPT_REFERRALS,"OPTION_VALUE"=>FALSE),
         Array ("OPTION_NAME"=>LDAP_OPT_RESTART,"OPTION_VALUE"=>FALSE)
);
$host = '10.35.1.16';
$ldapbase = 'ou=people,o=cattelecom,c=th';
 $password='bis@ministr@t0r';
 $user_name='uid=bisadmin,ou=people,o=cattelecom,c=th';
$ldap = NewADOConnection( 'ldap' );
$ldap->Connect( $host, $user_name, $password, $ldapbase );
 
echo "<pre>";
 
print_r( $ldap->ServerInfo() );
$ldap->SetFetchMode(ADODB_FETCH_ASSOC);
$userName = '00354293';
$filter="(|(CN=*$userName*)(sn=*$userName*)(displayName=*$userName*)(uid=*$userName*))";
 
$rs = $ldap->Execute( $filter );
if ($rs)
         while ($arr = $rs->FetchRow()) {
              print_r($arr);       
         }
 
$rs = $ldap->Execute( $filter );
if ($rs) 
         while (!$rs->EOF) {
                 print_r($rs->fields);     
                 $rs->MoveNext();
         } 
         

$ldap->Close();
echo "</pre>";
*/

$server='10.35.1.16';
$admin='uid=bisadmin,ou=people,o=cattelecom,c=th';
$passwd='bis@ministr@t0r';

$ds=ldap_connect($server);  // assuming the LDAP server is on this host

if ($ds) {
    // bind with appropriate dn to give update access
    $r=ldap_bind($ds, $admin, $passwd);
    if(!$r) die("ldap_bind failed<br>");

    echo "ldap_bind success";
    ldap_close($ds);
} else {
    echo "Unable to connect to LDAP server"; 
}

?>
