<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url','http://localhost/freelance/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);
if(!defined('DB_SERVER')) define('DB_SERVER',"us-cdbr-east-05.cleardb.net");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"b9490a9b679bdc");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"533af754");
if(!defined('DB_NAME')) define('DB_NAME',"heroku_a7d81cb1e20e18a");
?>

<!-- mysql://b9490a9b679bdc:533af754@us-cdbr-east-05.cleardb.net/heroku_a7d81cb1e20e18a?reconnect=true -->