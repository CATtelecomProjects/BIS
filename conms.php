<?
ini_set('display_errors', '1');
    // $myServer = "winsrv22.somedns.co.uk:22320";//this style works as well
    $servername = "10.42.4.2,1433";
    $myUser = "catit";
    $myPass = '"itcat';
    $myDB = "Report eDocument"; 

    //connection to the database
    $dbhandle = mssql_connect($servername, $myUser, $myPass)
        or die("Couldn't connect to SQL Server on $myServer. Error: " . mssql_get_last_message()); 
    if($dbhandle) {
     echo "Success, Connected\r\n"; 
    } else {
        echo "problem :( \r\n";
    }
?>