<?php

require_once("MDB2.php");
require_once("/home/cs304/public_html/php/MDB2-functions.php");
require_once("choef_dsn.inc");
require_once("methods.php");

//connects to database
$dbh = db_connect($choef_dsn);

if (!isset($_COOKIE['phpname'])) {
  header('Location:mainCookie.php' ) ;
}
 if( isset($_REQUEST['submit']) && $_REQUEST['submit'] == "Logout" ) {
        setcookie('phpname',false);
	 header('Location:mainCookie.php' ) ;
 }
if(isset($_REQUEST['nameofObject'])&& $_REQUEST['submit'] && $_REQUEST['submit'] == "Submit Request"){
  echo "Inserting item";
  insertItem($dbh);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
 
  <script>
  $(function() {
      $( "#tabs" ).tabs();
    });
</script>
<style>
  </style></head>
  
  
  <body>
    <h1>Form for Inserting Loan Retriever Data</h1>
    <form method='post' action='loanR.php'>
      <input type='submit' name='submit' value='Logout'><br/>
    </form>
    <div id="tabs">
    <ul>
      <li><a href="#tabs-1">Nunc tincidunt</a></li>
      <li><a href="#tabs-2">Proin dolor</a></li>
      <li><a href="#tabs-3">Aenean lacinia</a></li>
    </ul>
    <div id="tabs-1">
    <div id="form">
    <form name="form" action="loanR.php" method="POST">
    <p><input type="hidden" name="_recipient" ></p>
    <table>
  
    <tr>
    <th> Object</th>
    <td> <input type="text" name="nameofObject" placeholder="Item Name"></td>
  <td> <input type="text" name="description" placeholder="Description"></td>
  <td> <input type="text" name="itemvalue" placeholder="value"></td>
  <td> 
  <select name="cond">
  <option>Select condition</option>
  <option>unacceptable</option>
  <option>used - acceptable</option>
  <option>used - good</option>
		<option>used - very good</option>
		<option>used - like new</option>
		<option> new</option>
	    </td>
	    <td> <input type="text" name="bemail" placeholder="Borrower Email"></td>
   <td>
 <select name="priority">
		<option>Select priority</option>
		<option>not important</option>
		<option>important</option>
		<option>urgent</option>
</td>
	  </tr>
	  <tr>
	    <th>Messages</th>
	    <td> <input type="text" name="senderID" placeholder="Sender"></td>
	    <td> <input type="text" name="receiverID" placeholder="Receiver"></td>
	    <td> <input type="text" name="content" placeholder="message"></td>
	 </tr>
	 
	  </table>
	<p><input type="submit" name="submit" value="Submit Request"></p>
  
	</form>
      </div>
<p>
</div>
<div id="tabs-2">
<h2>Items Loaned</h2>
 <?PHP
   // The following loads the Pear MDB2 class and our functions
 
    
   getItems($dbh,$_COOKIE['phpname']);


?>
</div>
<div id="tabs-3">
</div>
</div>
    <a href="http://validator.w3.org/check?uri=referer">
           <img
                     src="http://cs.wellesley.edu/~cs110/Icons/valid-html5v2.png"
                     alt="Valid HTML 5"
                     title="Valid HTML 5"
                     height="31" width="88">
             </a>
    </p>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </body>
</html>
