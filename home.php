<?php
  session_start();
  if(isset($_SESSION['username'])){
    echo"Sei già loggato con l'utente $_SESSION[username] vuoi sloggarti?? <a href='logout.php'>Sloggati</a>";
  } 
  else{
      echo"<form action='$_SERVER[PHP_SELF]' method='post'>
      		<input type='text' name='username'> Username<br>
      		<input type='password' name='pass'> Password<br>
      		<input type='submit' name='ok' value='Accedi!'>
      </form>";
      if(isset($_POST['ok'])){
      	
         include("config.php");
         $pass=md5($_POST['pass']);
         $query="select * from utente where username='$_POST[username]' and password='$pass';";
         $risultato=mysqli_query($conn,$query) or die("errore");

         /*$queryd="update utente set ultimo_accesso=now() where username='$_POST[username]' and password='$pass';";
         $risultatod=mysqli_query($conn,$queryd) or die("errore");
         $rigad=mysqli_fetch_array($risultatod);
         */
      	if(mysqli_num_rows($risultato)==1){
         		$_SESSION['username']=$_POST['username'];
         		header("location:pagina.php");
         }
         else
            echo"Username e/o password errate";
      }
   }
?>