<!DOCTYPE html>
<?php
   ob_start();
   session_start();
?>
<html>
   
   <head>
      <title>login</title>
      <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
	
   <body align="center">
      <div class="box">
      <h1>Login</h1> 
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'login successful';
               }else {
                  $msg = 'invalid details';
               }
            }
         ?>
         <form role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text"name = "username" placeholder = "username">
            <input type = "password"name = "password" placeholder = "password">
            <input type = "submit" name = "login" value="Login">
            <input type = "submit" name = "logout" value="Logout" formaction="logout.php">
         </form>
       </div>
   </body>
</html>