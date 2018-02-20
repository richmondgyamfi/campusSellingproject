.<!DOCTYPE html>
<html>
<head>
	<title>login/register</title>

	<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery2.2.4.min.js"></script>
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="vendor/jQuery.mmenu/dist/jquery.mmenu.all.css" rel="stylesheet">

</head>
<body>
	<a id="modal_trigger" href="#modal" class="btn">Click here to Login or register</a>

	<div id="modal" class="popupContainer" style="display:none;">
	<header class="popupHeader">
		<span class="header_title">Login</span>
		<span class="modal_close"><i class="fa fa-times"></i></span>
	</header>
 
    <section class="popupBody">
    <!-- Here Goes all the Login and signup Forms -->
    </section>
</div>

<div class="social_login">
    <div class="clearfix">
        <a class="social_box fb" href="#"><span class="icon_title">Connect with
        Facebook</span></a> <a class="social_box google" href="#"><span class=
        "icon_title">Connect with Google</span></a>
    </div>
 
    <div class="centeredText">
        <span>Or use your Email address</span>
    </div>
 
    <div class="action_btns">
        <div class="one_half">
            <a class="btn" href="#" id="login_form" name="login_form">Login</a>
        </div>
 
        <div class="one_half last">
            <a class="btn" href="#" id="register_form" name=
            "register_form">Sign up</a>
        </div>
    </div>
</div>

<div class="user_login">
    <form>
        <label>Email / Username</label> <input type="text"><br>
        <label>Password</label> <input type="password"><br>
 
        <div class="checkbox">
            <input id="remember" type="checkbox"> <label for=
            "remember">Remember me on this computer</label>
        </div>
 
        <div class="action_btns">
            <div class="one_half">
                <a class="btn back_btn" href="#">Back</a>
            </div>
 
            <div class="one_half last">
                <a class="btn btn_red" href="#">Login</a>
            </div>
        </div>
    </form>
    
    <a class="forgot_password" href="#">Forgot password?</a>
</div>

<div class="user_register">
    <form>
        <label>Full Name</label> <input type="text"><br>
        <label>Email Address</label> <input type="email"><br>
        <label>Password</label> <input type="password"><br>
 
        <div class="checkbox">
            <input id="send_updates" type="checkbox"> <label for=
            "send_updates">Send me occasional email updates</label>
        </div>
 
        <div class="action_btns">
            <div class="one_half">
                <a class="btn back_btn" href="#">Back</a>
            </div>
 
            <div class="one_half last">
                <a class="btn btn_red" href="#">Register</a>
            </div>
        </div>
    </form>
</div>

<script src="js/jquery2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

 // Calling Login Form
    $("#login_form").click(function () {
        $(".social_login").hide();
        $(".user_login").show();
        return false;
    });
 
    // Calling Register Form
    $("#register_form").click(function () {
        $(".social_login").hide();
        $(".user_register").show();
        $(".header_title").text('Register');
        return false;
    });
 
    // Going back to Social Forms
    $(".back_btn").click(function () {
        $(".user_login").hide();
        $(".user_register").hide();
        $(".social_login").show();
        $(".header_title").text('Login');
        return false;
    });
 
})
</script>
</body>
</html>