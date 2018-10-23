<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="header_container">
<div class="header">
<img src="logo.png" class="header_logo"/>
</div>
</div>

	
<div class="content_container">
<div class="content">
<div class="content_full content_twelve">
<div class="container_text">
<h1>Google oAuth API</h1>
<h3>Obtain Access and Refresh Tokens for API</h3>
</div>
<!-- Form -->
<div class="form_container">
<?php
// Config
$redirect = ""; // Enter your API Callback URL here
$client_id = ""; // Enter your API Client ID Here
$client_secret = ""; // Enter your API Client Secret here
// Check Code
if(empty($_GET['code'])) {
	// Authorization Link
	$authorization = "https://accounts.google.com/o/oauth2/auth?redirect_uri=$redirect&client_id=$client_id&response_type=code&scope=https://www.googleapis.com/auth/spreadsheets&approval_prompt=force&access_type=offline";
	echo "<h3><a href=\"$authorization\">Authorize &raquo;</a></h3>";
	} else {
	// Authorization
	$code = $_GET['code'];	
	// Token
	$url = "https://accounts.google.com/o/oauth2/token";
	$data = "code=$code&client_id=$client_id&client_secret=$client_secret&redirect_uri=$redirect&grant_type=authorization_code";	
	// Request
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	@curl_setopt($ch, CURLOPT_URL, $url);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/x-www-form-urlencoded'
	));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = @curl_exec($ch); 
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); 
	@curl_close($ch);
	$array = json_decode($response);
	echo "<p>Access Token:<br/>".$array->access_token."</p>";
	echo "<p>Refresh Token:<br/>".$array->refresh_token."</p>";	
}
?>
</div>
</div>
</div>
</div>
</body>
</html>
