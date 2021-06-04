<?php  

include('config.php');

$login_button = '';

if(isset($_GET["code"]))
{
	$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

	if(!isset($token['error']))
	{
		$google_client->setAccessToken($token['access_token']);

		$_SESSION['access_token'] = $token['access_token'];

		$google_service = new Google_Service_Oauth2($google_client);

		$data = $google_service->userinfo->get();

		if(!empty($data['given_name']))
		{
			$_SESSION['user_first_name'] = $data['given_name'];
		}
		if(!empty($data['family_name']))
		{
			$_SESSION['user_last_name'] = $data['family_name'];
		}
		if(!empty($data['email']))
		{
			$_SESSION['user_email_address'] = $data['email'];
		}
		if(!empty($_SESSION['gender']))
		{
			$_SESSION['user_gender'] = $data['gender'];
		}
		if(!empty($_SESSION['picture']))
		{
			$_SESSION['user_image'] = $data['picture'];
		}
	}

}

if(!isset($_SESSION['access_token']))
{
	$login_button = '<a href="'.$google_client->createAuthurl().'"><h2>Login With </h2><img src="google.png" style="width:50px;height:50px;"/></a>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rtcamp Jayraj Email Challenge</title>
	<style>
		.page-footer {
			background-color: #000033;
			color: #ccc;	
		}

		.footer-copyright {
			color: #ffffff;
			padding: 10px 0;
		}
	</style>
</head>
<body>
	<table bgcolor="#000033" width="1250">
		<tr><td>
			<h1 align="center" ><font color="white"> Welcome To <font color="red" >rtCamp</font> Email COMIC </font> </h1> </td></tr></table>
			<img src="rt.png" />
			
			<?php  

			if($login_button == '')
			{
				echo '<h1>You Are Most Welcome..!!!</h1>';
		// echo '<img src="'.$_SESSION["user_image"].'" />';
				echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
				echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
				echo '<h3><a href="logout.php">Logout</h3>';
				echo '<h3 align="center" ><a href="mailform.php">If You Want To Get Comic Then Click Hear..</h3>';
			}
			else
			{
				echo '<div align="center">'.$login_button.'</div>';
			}

			?>

		</body>
		</html>