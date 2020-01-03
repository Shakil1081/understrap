<?php /* Template Name: Login detals */


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In - Snapshot</title>
        <!-- Latest compiled and minified CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <script>
            
            
  $(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: 'http://54.236.4.195/dologin.action',
       data: $(this).serialize(),
       success: function(data)
       {
          if (data === 'Login') {
            window.location = '/user-page.php';
          }
          else {
            alert('Invalid Credentials');
          }
       },       
           error: function (request, status, error) {
        alert(request.responseText);
    }
   });
 });
});
    
        </script>
    </head>
    <body id="com-atlassian-confluence" class="theme-default login aui-layout aui-theme-default">
        <div class="container">

            <div id="main" class=" aui-page-panel">

    <div id="sidebar-container"></div>
    <!-- \#sidebar-container -->

    <div id="login-container">
        <div class="branding">
            <h1>IPA</h1>
            <h3>Snapshot Dashboard</h3></div>
        <div class="login-section ">

            <form name="loginform" method="POST" class="aui login-form-container">

                <h2>Log in</h2>

                <div id="action-messages">
                </div>
                <fieldset class="compact-form-fields">

                    <legend class="assistive"><span>Log in to Confluence</span></legend>

                    <div class="field-group">
                        <label id="os_username-label" for="os_username">
                            Username
                        </label>

                        <input type="text" name="os_username" id="os_username" class="text   " placeholder="Username" data-focus="0" title="">
                    </div>

                    <div class="field-group">
                        <label id="os_password-label" for="os_password">
                            Password
                        </label>
                        <input type="password" name="os_password" id="os_password" class="password " autocomplete="off" placeholder="Password">
                    </div>

                    <div class="group">

                        <div class="checkbox">
                            <input type="checkbox" class="checkbox" value="true" name="os_cookie" id="os_cookie">
                            <label for="os_cookie">Remember me</label>
                        </div>
                    </div>
                    <div class="field-group form-buttons compact-form-buttons ">
                      
                        <input id="loginButton" class="aui-button aui-style aui-button-primary"  type="submit" name="loginsub" id="loginsub" value="Login">
                        <a id="forgot-password" class="aui-button aui-style aui-button-link" href="/forgotuserpassword.action">Forgot your password?</a>
                    </div>
                    <input type="hidden" name="os_destination" value="/index.action">
                </fieldset>

            </form>
        </div>
    </div>

</div>
            
        </div>
        
        <style>
            
html,
body {
    height: 100%;
	margin:0;
	padding:0;
}

.container 
{
    height: 100%;
    width:100%;
    background-image: url("http://ipawork.it4ubd.com/wp-content/uploads/2019/12/bg.jpg");
	background-size: cover;
	background-repeat:no-repeat;    
}

body.login #main.aui-page-panel {
	padding: 0;
	margin: auto;
	border: none;
	top: 45%;
	position: fixed;
	left: 0;
	right: 0;
	transform: translateY(-50%); 
}
.login #main.aui-page-panel {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 50px auto 0 auto;
    min-height: 120px;
    overflow: auto;
    max-width: 500px;
	background: #fff;
	box-sizing: border-box;
	display: block;
}
form.aui:first-child {
    margin-top: 0;
}
.login-section h2{
    border-bottom: 1px solid #ccc;
    color: #333;
    padding-bottom: 10px;
    margin-bottom: 20px;
	margin-top: 0px;
	font-size: 20px;
	font-weight: 500;
	line-height: 1.5;
	letter-spacing: -0.008em;
	text-transform: none;
}
#forgot-password { text-decoration: none;}
.login-section .aui fieldset, .signup-section .aui fieldset {
    margin-top: 20px;
}
form.aui fieldset {
    border: 0;
    clear: both;
    display: block;
    margin: 0;
    margin-top: 0px;
    padding: 0;
    position: relative;
}
.assistive, form.aui legend.assistive {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
	float: left;
	text-align: right;
}
form.aui legend {
    display: none;
}
form.aui legend + .field-group, form.aui legend + .checkbox, form.aui legend + .radio {
    margin-top: 0;
    padding-top: 5px;
}
form.aui .field-group, form.aui .group, form.aui .date-select {
    box-sizing: border-box;
    clear: both;
    padding: 4px 0 4px 145px;
    padding-top: 4px;
    padding-left: 145px;
    position: relative;
    margin: 1px 0;
    margin-top: 1px;
    width: 100%;
}

form.aui legend, form.aui .field-group > label, form.aui .field-group > aui-label {
    float: left;
    margin-left: -145px;
    padding: 5px 0 0 0;
    position: relative;
    text-align: right;
    width: 130px;
    word-wrap: break-word;
}

form.aui .text, form.aui .password {
    height: 2.14285714em;
    line-height: 1.4285714285714;
    padding: 4px 5px;
}

form.aui .text, form.aui .password {
    border: 1px solid #c1c7d0;
    border-radius: 3.01px;
    box-sizing: border-box;
    font-size: inherit;
    margin: 0;
    max-width: 250px;
    vertical-align: baseline;
    width: 100%;
	background: #fff;
	color: #172b4d;
	font-family: inherit;
}

form.aui .text {
    margin-top: 0px;
    margin-bottom: 20px;
    margin-right: 5px;
    display: block;
    width: 95%;
}

.branding h3 {
    font-size: 16px;
    font-weight: 500;
    line-height: 1.25;
    letter-spacing: -0.006em;
    text-transform: none;
    margin: 30px 0 0 0;
}

form.aui .field-group, form.aui .group, form.aui .date-select {
    box-sizing: border-box;
    clear: both;
    padding: 4px 0 4px 145px;
    padding-left: 145px;
    position: relative;
    margin: 1px 0;
    width: 100%;
}
body.login form.aui .field-group {
    padding-left: 80px;
}

.aui-button.aui-button-primary, .aui-button.aui-button-primary:visited {
    background-image: none;
    background-color: #0052cc;
    border-color: transparent;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
	box-sizing: border-box;
	transition: background-color .1s ease-out;
	border-radius: 3.01px;
	border-style: solid;
	border-width: 1px;
	cursor: pointer;
	font-family: inherit;
	font-size: 14px;
	font-variant: normal;
	display: inline-block;
	height: 2.14285714em;
	line-height: 1.42857143em;
	margin: 0;
    margin-left: 0px;
	padding: 4px 10px;
	vertical-align: baseline;
	white-space: nowrap;
}

body.login div#login-container {
    display: flex; }
body.login div.login-section {
    padding: 10px; }
body.login div#login-container.websudo {
    display: block; }
body.login div.branding {
    background: #2c3e50;
    width: 150px;
    padding: 10px;
    position: relative; }
body.login div.branding * {
      color: #fff; }
body.login div.branding h1 {
      background: url("http://ipawork.it4ubd.com/wp-content/uploads/2019/12/bg.jpg") no-repeat;
      text-indent: -9999px;
      padding: 10px; }
body.login div.branding h4 {
      position: absolute;
      bottom: 15px; }
body.login form.aui .field-group input {
      width: 95%; }
body.login form.aui .field-group input.aui-button {
        width: auto; 
}
body.login form.aui .group {
    padding: 10px 0 10px 80px; 
}
        </style>
    </body>
</html>
