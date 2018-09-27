<!DOCTYPE html>
<html>
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
    <link href="vendor/css-hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="vendor/revolution/css/layers.css" rel="stylesheet">
    <link href="vendor/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendor/revolution/css/settings.css" rel="stylesheet">
    <link href="vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <!--Theme style-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="">
                                            Submit</button>
                                        <a href="forgetpd.php">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" style="margin-top: 10px;" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Re-Enter Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="repassword" placeholder="Re-Enter Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="">
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

<script type="text/javascript">
$('#myModal').modal('show');
</script>


            </div>
        </div>

     
        <div class=" col-md-3" style="margin-top: 0px;">
            <a href="home.php"><img src="images/icons/hdlogo.png"></a>
        </div>

    <nav class="navbar col-sm-5" role="navigation">    
        <div class="navbar-header ">       
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">          
                <span class="sr-only">Toggle navigation</span>          
                <span class="icon-bar"></span>          
                <span class="icon-bar"></span>          
                <span class="icon-bar"></span>       
                <span class="icon-bar"></span>       
            </button>       
            <a class="navbar-brand" href="#"></a>    
        </div>    
        <div class="collapse navbar-collapse col-lg-2" id="example-navbar-collapse">       
            <ul class="nav navbar-nav">          
                <li class=""><a href="index.php">HOME</a></li>          
                <li><a href="#">ABOUT</a></li>          
                <li class="dropdown">             
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">JOB TYPE <b class="caret"></b></a>             
                    <ul class="dropdown-menu">                
                        <li><a href="#">Engineering Base</a></li>                
                        <li><a href="#">Fashion</a></li>                
                        <li><a href="#">Arts</a></li>                
                        <li class="divider"></li>                
                        <li><a href="#">Separated link</a></li>                
                        <li class="divider"></li>                
                        <li><a href="#">One more separated link</a></li>             
                    </ul>          
                </li>
                <li><a href="#">CONTACT</a></li>          
       
            </ul>    
        </div>
    </nav>
   

    <!--<div style="margin-top: 10px;">    
        <form class="bs-example bs-example-form" role="form">       
            <div class="row">                  
            <div class="col-md-5">             
                <div class="input-group">                
                    <input type="text" placeholder="Search" class="form-control">                
                    <span class="input-group-btn">                   
                        <button class="btn btn-default" type="button">                      
                        <span class="glyphicon glyphicon-search"></span>                   
                    </button>                
                </span>             
            </div><!-- /input-group          
        </div><!-- /.col-lg-6        
    </div><!-- /.row    
</form> 
</div>--> 
</div>
</div>

    <div id="myCarousel" style="margin-bottom: 0px;" class="carousel slide">    <!-- Carousel indicators-->    
        <ol class="carousel-indicators">       
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>       
        <li data-target="#myCarousel" data-slide-to="1"></li>       
        <li data-target="#myCarousel" data-slide-to="2"></li>    
    </ol>       <!-- Carousel items -->    
    <div class="carousel-inner">       
        <div class="item active">          
            <img src="images/heading-blog-02.jpg" alt="first image">
            <div class="carousel-caption">
                    <p>Buy Product</p>
                    <button class="btn btn-primary">Buy Now</button>
            </div>       
        </div>       
            <div class="item">          
                <img src="images/heading-blog-01.jpg" alt="Second image">
                <div class="carousel-caption">
                    <p>To Employ someone</p>  
                <button class="btn btn-primary">Employ</button>
                </div>
            </div>       
            <div class="item">          
                <img src="images/heading-contact.jpg" alt="Third image">   
                <div class="carousel-caption">
                    <p>Order Product</p>
                    <button class="btn btn-primary">Order Now</button>
                </div>
            </div>    
        </div>    <!-- Carousel nav -->    
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>    
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> 
    </div>

</header>

<div class="container">
	<h2><i class="fa fa-cars"></i></h2>
</div>

</body>
</html>