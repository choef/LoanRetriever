<?php

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="main.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to Loan Retriever</h1>
      <form method="post" action="loanR.php">

<div class="hideReg">
   <p><input type="text" name="firstName" value="" placeholder="First Name"></p>
   <p><input type="text" name="lastName" value="" placeholder="Last Name"></p>
   <p><input type="text" name="email" value="" placeholder="Username or Email"></p>
   <p><input type="password" name="regPass" value="" placeholder="Password"></p>
   <p><input type="password" name="confirm" value="" placeholder="Confirm Password"></p>
      <p class="submit"><input type="submit" name="submit" value="Register"></p>
   </div>
   <div class="shown">
   <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
   <p><input type="password" name="logPass" value="" placeholder="Password"></p>
   <p class="submit"><input type="submit" name="submit" value="Login"></p>
   </div>
   <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
	<p class="register">Register
	</p>
  
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/login-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/login-form.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy; 2012&ndash;2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://www.premiumpixels.com/freebies/clean-simple-login-form-psd/" target="_blank">Orman Clark</a>
  </section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
$(document).ready(function(){

$('div.hideReg').css('display','none');

$('.register').click(function() {
$('div.shown').css('display','none');
$('div.hideReg').css('display','block');
});


});

</script>
<p>
<?php
require_once("MDB2.php");
require_once("/home/cs304/public_html/php/MDB2-functions.php");
require_once("choef_dsn.inc");
require_once("methods.php");
/*
 $dbh = db_connect($sstewar2_dsn);
echo "<p>things";

if ($_REQUEST['action'] == 'logSubmit') {
  echo"<p>logsubmit";
  logIn($dbh);
} else if ($_REQUEST['action'] == 'regSubmit'){
    echo "<p>regsubmit";
    if(isset($_REQUEST['firstName'])){
    echo $_REQUEST['firstName'];
    insertUser($dbh);
}
}
echo "THINGS";*/
?>
</p>
</body>
</html>
