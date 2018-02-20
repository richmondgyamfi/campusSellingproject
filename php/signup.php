<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

  </head>
  <body>
<div class="form-group" style="text-align:center; margin-top:50px; ">
      <p>Please fill the form below</p>
      <br><br>
    <form class="" action="" method="post">
      <input type="text" name="fname" placeholder="firstname"> <br><br>
      <input type="text" name="lname" placeholder="lastname"> <br><br>
      <input type="text" name="email" placeholder="E-mail"> <br><br>
      <input type="password" name="password" placeholder="password"> <br><br>
      <input type="password" name="re-password" placeholder="re-enter password"><br><br>

      <input class="btn btn-primary" type="submit" name="signup" value="sign up">
    </form>

    <p>welcome<p>
    <?php
    $link = mysqli('localhost', 'root', '', 'users') or die('Could not connect database');
    //echo "already have account" <a href="../login.php">login</a> ;
    echo $fname;
     ?>


</div>

  </body>
</html>
