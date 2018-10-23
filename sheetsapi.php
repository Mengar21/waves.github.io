<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/><link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="fdgs.js"></script>
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
<h1>Google Sheets API</h1>
<h3>Add HTML Form Data to Sheet via Javascript</h3>
</div>
<!-- Form -->
<div class="form_container">
<form id="sheets" name="sheets" class="form_body">
<input id="first_name" name="last_name" class="form_field" value="" placeholder="First Name"/>
<input id="last_name" name="last_name" class="form_field" value="" placeholder="Last Name"/>
<input id="email" name="email" class="form_field" value="" placeholder="Email Address"/>
<input id="submit" name="submit" type="button" class="form_button" value="Submit" onClick="submit_form()">
</form>
<div class="form_message" id="message"></div>
</div>
<!-- Form -->
</div>
</div>
</div>
</body>
</html>
