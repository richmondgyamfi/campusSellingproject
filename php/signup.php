

<!-- <?php require 'signupScript.php'; ?>
 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signup.css">

  </head>
  <body>
<div class="form-group" id="sign" >
      <p>Please fill the form below</p>
      <br><br>

    <div class="tab-pane container" style="margin-top: 10px;">

       <!-- <?php 
       $output = NULL;
        ?> -->

        <form role="form" method="POST" action="signupScript.php" class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">
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
        </div><br><br>
       
         <div class="form-group">
            <label for="email" class="col-sm-2 control-label">
                Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="username" />
            </div>
        </div><br><br>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">
                Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Email" />
            </div>
        </div><br><br>
        <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label">
                Mobile number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phoneNo" placeholder="Phone number" />
            </div>
        </div><br><br>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">
                Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password" />
            </div> 
        </div><br>  <br>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">
                Re-Enter Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="repass" placeholder="Re-Enter Password" />
            </div>
        </div>

        <br><br><br>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    Register</button>
                <button type="button" class="btn btn-default btn-sm data-dismiss" data-dismiss="modal" aria-hidden="true">
                    Cancel</button>
            </div>
        </div>
        </form>

        <?php 
        echo $output;
        ?>
   </div>

    <!-- <?php
    #$link = mysqli('localhost', 'root', '', 'users') or die('Could not connect database');
    //echo "already have account" <a href="../login.php">login</a> ;
    #SSSecho $fname;
     ?> -->


</div>

  </body>
</html>
