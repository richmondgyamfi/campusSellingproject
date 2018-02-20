<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chatsite</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="description" content="Responsive website using AngularJS - demo page">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- add styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- add javascripts -->
    <script src="js/jquery2.2.4.min.js"></script>
    <script src="js/angular.min.js"></script>
    <!--<script src="js/app.js"></script>
    <script src="js/controllers.js"></script>-->

  </head>
  <body>

<header>
     <div class="wrap">
      <!-- navigation menu -->
        <nav>
            <ul>
                <li><a id="workBtn" href="#!/" ng-class="{activeSmall:part == 'projects'}" >Our Projects</a></li>
                <li><a id="privacyBtn" href="#!/privacy" ng-class="{activeSmall:part == 'privacy'}">Privacy &amp; Terms</a></li>
                <li><a id="aboutBtn" href="#!/about" ng-class="{activeSmall:part == 'about'}">About</a></li>
                <li style="margin-right:0px"><a id="contactBtn" class="active" href="javascript: void(0)" ng-click="showForm()">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>


    <div class="input-group form-control" style="text-align:center; padding-top:100px;">
    <h2>Login</h2><br><br>
    <form class="" action="welcome.php" method="post">

    <input type="text" class="input" name="username" placeholder="username"> <br><br><br>
    <input type="password" name="password" placeholder="password"><br><br>

    <input onclick="" class="btn btn-info btn-large" type="submit" name="login" value="submit">
    <br><br>
    </form>


    <p>New member? <a href="php/signup.php">Sign Up </a><p>

  </div>
  </body>
</html>
