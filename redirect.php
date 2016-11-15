<?php
 header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

if(isset($_GET['legislators']))
    $url = 'http://104.198.0.197:8080/legislators?per_page=all';
if(isset($_GET['committees']))
    $url = 'http://104.198.0.197:8080/committees?per_page=all';
if(isset($_GET['bills']))
    $url = 'http://104.198.0.197:8080/bills?history.active=true';
if(isset($_GET['bills_new']))
    $url = 'http://104.198.0.197:8080/bills?history.active=false';
$json = @file_get_contents("$url");
echo $json;

?>
    
