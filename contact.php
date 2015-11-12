<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>contact us </title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css"type="text/css">
	<meta name="decription" content="....">
	<meta charset="utf-8">

	
	
  </head>
  <body>
  <div id="site">
  <?php include("header.php"); ?>
  <header id="header">
   <?php include("menu.php"); ?>
  </header>
   <div id="content">
   </div>
   <div id="contact">
   <form action="send_form.php" method="post" id="contact">
		
    <ol>
      <li>
        <label for="inputname">Name</label>
  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
      </li>
	  <li>
         <label for="inputcountry">Country</label>
  <input required type="text" name="country" class="form-control" id="inputcountry" value="<?php echo isset($_SESSION['inputs']['country'])? $_SESSION['inputs']['country'] : ''; ?>">
      </li>
      <li>
        <label for="inputemail">Your email</label>
  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
      </li>
		<li>
		<label for="inputmessage">Message</label>
  <textarea rows="4" cols="16" required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
	  
		<P><input type="submit" value="Send">
		<input type="reset" value="Clear"></p>
	  </li>
	</ol>
	</form>
	<?php
unset($_SESSION['inputs']); 
  unset($_SESSION['success']);
  unset($_SESSION['errors']);

?>
   </div>
   
  <footer>
  </footer>
   </div>
  </body>
  
</html>
