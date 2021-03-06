<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/css/mws-theme.css" media="screen">

<title>MWS Admin - Login Page - (shared on themelock.com)</title>

</head>

<body>
	<h3>账号:admin,密码：123，是不是很刺激</h3>
    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>Login</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/" method="post" enctype="multipart/form-data">
                	{{csrf_field()}}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="captcha" style="width: 130px" class="mws-login-password required" placeholder="">
                            {!!captcha_img()!!}
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登陆" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var im =document.getElementsByTagName('img')[0];
        console.log(im);
        im.onclick=function(){
            this.src = '{!!captcha_src()!!}'+Math.random(0,10);
        }
    </script>
    <!-- JavaScript Plugins -->
    <script src="/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/js/libs/jquery.placeholder.min.js"></script>
    <script src="/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/js/core/login.js"></script>

</body>
</html>
