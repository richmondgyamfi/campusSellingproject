<?php 
    include 'pagehead.php';
    include 'dbcon.php';


    

 ?>

<div>
    <div class="container">
    <nav class="navbar navbar-default" role="navigation">    
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
        <div class="collapse navbar-collapse col-md-6" id="example-navbar-collapse">       
            <ul class="nav navbar-nav">          
                <li class="active"><a href="index.php">HOME</a></li>          
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
        <div class="col-md-6" style="margin-top: 10px;">    
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
            </div><!-- /input-group -->          
        </div><!-- /.col-lg-6 -->       
    </div><!-- /.row -->    
</form> 
</div> 
    </nav> 
</div>
</div>  

</body>

</html>
