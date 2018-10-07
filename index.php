<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name=viewport' />
	<title>Newton</title>
    <link rel="icon" href="./src/img/newton-icon.png">
	<link rel="stylesheet" type="text/css" href="./src/css/w3.css">
    <link rel="stylesheet" type="text/css" href="./src/css/login-n.css">
	<link rel="stylesheet" type="text/css" href="./src/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./src/css/login-register.css">
    <link rel="stylesheet" type="text/css" href="./src/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="./src/css/animate.css">
    <script src="./src/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="./src/js/bootstrap.js" type="text/javascript"></script>
    <script src="./src/js/login-register.js" type="text/javascript"></script>
    <script src="./src/js/newton.js" type="text/javascript"></script>
</head>
<body> 
    </div>
    <div class="logoLeft">
        <div class="w3-container-white w3-round-big w3-card-4 logo-newton animated bounceInLeft">
            <img src="./src/img/newton-logo.png" id="imageNewton" class="logoNewton">
                <div class="divisionLogo">
                <p class="w3-text-black w3-center">Digital Learning Management System</p>
                <p class="w3-text-black w3-center">for Students and Professors</p>
                <p class="w3-text-black w3-center" id="logotext">SAD Project v.01 || BT-IT 4A</p>
                </div>
        </div>
    </div>
    <div class="loginRight">
        <div class="w3-container w3-card-4 login-newton animated bounceInRight">
            <div class="loginContent">
                <div class="loginHeader w3-panel">
                    <h2 class="loginTitle w3-text-black w3-center w3-grey w3-round">Login</h2> 
                </div>
                    <input id="user" class="w3-input w3-round w3-border w3-center input-n" placeholder="Username:" required>
                    <input id="pass" type="password" class="w3-input w3-round w3-border w3-center input-p" placeholder="Password:" required> 
                    <a class="w3-text-white w3-btn w3-indigo w3-round w3-hover-light-green button" id="loginButton"onclick="register();"><i class="fa fa-lock logoBtn"></i>Login</a>
                    <a class="w3-text-white w3-btn w3-indigo w3-round w3-hover-light-green button" id="registerButton" onclick="register();"><i class="fa fa-check-square logoBtn"></i>Register</a>
                </div> 
            </div>
        </div>
    </div>
        


    <!-- <div class="login fade" id="loginModal">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title w3-text-blue"></h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span></span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
                </div>
            </div>
        </div> -->
    <!-- <div class="frontpage">        
	<center>   
		<div class="w3-container w3-round-big w3-card-4 login-newton animated zoomInUp delay-10s">
		<img src="./src/img/newton-logo.png" id="image" class="logo animated fadeInUp delay-1s" >
		<p class="w3-text-white animated fadeInUp delay-1s">A Digital Learning Manamgement System || v.01 </p>
        <br>
		<a class="w3-btn w3-blue w3-round w3-hover-green" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
        <a class="w3-btn w3-blue w3-round w3-hover-green" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
        </div>
    </center>
    </div> -->
</body>
</html>