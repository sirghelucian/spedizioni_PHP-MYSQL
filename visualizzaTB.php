<?php
  
  //echo"<pre>";print_r($_COOKIE);echo"</pre>";
	/*if(isset($_COOKIE['dato'])){
		echo"il contenuto del cookie dato è $_COOKIE[dato]";
	}
	else{
		echo"Nessun cookie scritto";
	}*/
	include("config.php");
	session_start();
	if(isset($_SESSION['username'])){

        $queryS="select * from stato_spedizione p join spedizione s on p.ID_stato_sped=s.stato_sped;";
        $risultatoS=mysqli_query($conn,$queryS) or die("errore");
        $rigaS=mysqli_fetch_array($risultatoS);
        //$num=mysqli_num_rows($risultatoS);

        //$i=0;
        while($rigaS=mysqli_fetch_array($risultatoS)){
			echo"
				Dati spedizione:<br>
				$rigaS[ID_spedizione]<br>
				$rigaS[dati_dest]<br>
				$rigaS[descrizione]<br>
				$rigaS[dati_mitt]<br><br>
			";
		}

		echo "<a href='home.php'>Vai al menu</a>";
	}
	else{
		//insulti
	}
?>