<?php
   ob_start();
   session_start();
?>

<html lang = "en">

   </head>
	
   <body>
      
      <h2>Wpisz nazwę użytkownika i hasło</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'test') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'Zalogowano!';
               }else {
                  $msg = 'Zła nazwa użytkownika bądź hasło';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "nazwa uzytkownika" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "haslo" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
      
   </body>
