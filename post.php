<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="images/icons/logo.png" type="image/gif" sizes="16x16">
	<title>SelfSell</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/main.css" rel="stylesheet">
    <link href="js/jquery2.2.4.min.js" rel="stylesheet">
    <link href="js/bootstrap.min.js" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mycss.css">
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="css/local.css" rel="stylesheet">
</head>
<body>

    <?php 
        include 'pagehead.php'
     ?>

	<div class="" id="main">
      <img src="images/revo-01.jpg" alt="" id="main1">
    </div>
    <div class="container">
    	<div class="row">
    		<div style="margin-top: 10px; height:400px; " class="col-md-6">
    			<div class="input-group form-control">
    			<h3>Input details of products</h3>
    			<hr>
    			<div class="">
    			<form class="f_mar" action="uploadScript.php" method="post" enctype="multipart/form-data" class="">
    				<div class="">
    					<div class="col-md-8">
    					<input class="form-control" type="text" name="sellername" placeholder="Seller/Procucer's name" required="Please enter name!">
    					</div>
                        <br>
                        <br><br>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="phoneNo" placeholder="Phone Number" required="Please enter your phone number">
                        </div>
                         <br>
                        <br><br>
                        <div class="col-md-8">
                            <!--<input class="form-control" type="text" name="location" placeholder="Location" required="Please enter your phone number">
                            <label for="location" class="col-sm-2 control-label">Location</label><br>-->

                            <select name="location">
                                <option>Location</option>
                                <option value="Amamomah">Amamomah</option>
                                <option value="Ayensu">Ayensu</option>
                                <option value="Kwaprow">Kwaprow</option>
                                <option value="oldsite">oldsite</option>
                                <option value="src">SRC</option>

                            </select>
                        </div>
                        <br><br>
                        <!--<div class="col-md-8 form-control">
                          <input type="text" class="form-control" name="item" id="" placeholder="Item / Service" required><br>

                          <input type="text" class="form-control" name="price" id="" placeholder="($)Price" required>
                        </div>-->
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="item" placeholder="item" required="Please enter the item name you do">
                        </div>
                        <br><br>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="price" placeholder="Price($)" required="Enter price">
                        </div>
                        <br><br>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="category" placeholder="Category" required="Enter category">
                        </div>
                        <br><br>
                        <div class="col-md-8">
                            <label for="photo" class="lead">Upload Photo(s)</label>
                            <input class="form-control btn btn-outline-warning" type="file" name="photo" required="Upload a picture of item">
                        </div>
                        <br><br><br>
                        <div class="col-md-8">
                            <textarea name="message" rows="10" cols="40" placeholder="Description of product">
                            </textarea>
                        </div>
                        <br><br>
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-lg btn-outline-warning">Post Item</button>
                        </div>
    				</div>
    			</form>
    			</div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="">
    			<h1>Sell and Showcase ur product</h1>
    			<h3>We are here to help you show the work you do in campus</h3>

    			<p>show product so people will order or contact you</p>
    			</div>
    		
            <div class="row">
                <div class="col-md-12 container">
                      <a href="php/signup.php"><button class="btn btn-lg btn-info t_tex  lead "><strong>Join Us Today</strong></button></a>
                      &nbsp;&nbsp;
                      <a href="index.php"><button class="btn btn-lg btn-outline-warning c_btn_p  lead "><strong>Visit A Store</strong></button></a>
                      <br><br><br><br>
                    </div>
            </div>
            </div>
    	</div>
    </div>
   
</body>
</html>