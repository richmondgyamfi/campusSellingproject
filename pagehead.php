<!DOCTYPE html>

<?php 
include 'dbcon.php';
 ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SelfSell</title>
    <meta name="description" content="Raven theme tempalte">
    <meta name="keywords" content="Raven theme template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icons/logo.png" type="image/gif" sizes="16x16">
    <!--Fonts-->
    <link href="fonts/fonts.css" rel="stylesheet">
    <!--Icons fonts-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/linearicons/dist/web-font/style.css" rel="stylesheet">
    <!--Styles-->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
    <link href="vendor/jQuery.mmenu/dist/jquery.mmenu.all.css" rel="stylesheet">
    <!-- <link href="vendor/css-hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="vendor/revolution/css/layers.css" rel="stylesheet">
    <link href="vendor/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendor/revolution/css/settings.css" rel="stylesheet">
    <link href="vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!--Theme style-->
    <link href="css/main.css" rel="stylesheet">
    <link href="js/jquery2.2.4.min.js" rel="stylesheet">
    <link href="js/bootstrap.min.js" rel="stylesheet">
</head>

<body>
    <header>
    <div class="navbar navbar-default" id="top-bar">
        <div class="container">
            <div class="pull-right right-top-bar">
                <div class="col-md-2" style="margin-top: 10px;">
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Login/Register</button>
                </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
                        <h4 class="modal-title" id="myModalLabel">
                        Login/Registration</h4>
                    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" style="margin-top: 10px;" id="Login">
                                <form role="form" method="POST" action="details.php" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="exampleInputPassword1" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="login_submit">
                                            Submit</button>
                                        <a href="forgetpd.php">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" style="margin-top: 10px;" id="Registration">
                                <form role="form" method="POST" action="details.php" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                  <input type="text" name="firstName" class="form-control" placeholder="First Name" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="lastName" class="form-control" placeholder="Last  Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile number</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="mobile" placeholder="Phone number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Re-Enter Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="repassword" placeholder="Re-Enter Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="register_submit">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm data-dismiss" data-dismiss="modal" aria-hidden="true">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/jquery2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




            </div>
            <div class="col-md-3" style="margin-top: 10px">
                <a href=" post.php"><button class="btn btn-primary pull-right">Post </button></a>
            </div>
        </div>

     
        <div class=" col-md-3" style="margin-top: 0px;">
            <a href="home.php"><img src="images/icons/hdlogo.png"></a>
        </div>

     
</div>
</div>



    </header>

  
  <script type="text/javascript">
$('#myModal').modal('show');
</script>

</body>

</html>
