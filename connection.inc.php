<?php
session_start();

//Use the below $con command if you are deploying website using AWS RDS, EC2
$con=mysqli_connect("ecom.cuil8gwatjrr.ap-northeast-3.rds.amazonaws.com", "admin", "password", "ecom");

//Use the below command if you want to run the website on Localhost i.e., XAMPP
// $con=mysqli_connect("localhost","root","","ecom");

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');

//Edit the IP address (127.0.0.1) with the Public IP address of your EC2 instance
// Determine the protocol based on the request
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

// Edit the domain name accordingly
$domain = 'website-lb-210271409.ap-northeast-3.elb.amazonaws.com';

define('SITE_PATH', $protocol . $domain . '/');

define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'media/product/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'media/product/');
?>

