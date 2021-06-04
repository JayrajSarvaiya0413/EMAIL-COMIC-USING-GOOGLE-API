<?php  

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('539388184524-hpno27um91fqb44vob0a8l6b9fv89c87.apps.googleusercontent.com');
$google_client->setClientSecret('DeU2ib3COsW4oK8eesyAg4UK');

$google_client->setRedirectUri('http://localhost/rtcamp_jayraj_email_challenge/index.php');

$google_client->addScope('email');
$google_client->addScope('profile');


session_start();

?>