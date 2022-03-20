<?php
  
	include("config.php");
	session_start();
	if(isset($_SESSION['username'])){
		$query="select * from spedizione where dati_mittente='$_SESSION[username]';";
        $risultato=mysqli_query($conn,$query) or die("errore");
        echo"Le tue spedizioni sono:<br>";
        while($riga=mysqli_fetch_array($risultato)){
        
			echo"
			ID spedizione: $riga[ID_spedizione]<br>
			Dati destinatario: $riga[dati_destinatario]<br>
			Stato Spedizione: $riga[stato_spedizione]<br>
			Dati mittente: $riga[dati_mittente]<br>
			Ultimo Accesso: $riga[data_ora_Accettazione]<br><br>
			";
		}
		echo"<a href='pagina.php'>Torna all'Area personale</a>";
	}
	else{
		//insulti
	}
?>