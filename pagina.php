<?php
	include("config.php");
	session_start();
	if(isset($_SESSION['username'])){
		$query="select * from utente where username='$_SESSION[username]';";
        $risultato=mysqli_query($conn,$query) or die("errore");
        $riga=mysqli_fetch_array($risultato);
        
		echo"Buongiorno $riga[username], riepilogo i tuoi dati:<br> 
		$riga[username]<br>
		$riga[ultimo_accesso]<br><br>
		Seleziona la tua scelta:
				<table>
					<tr><td>
						<a href='spedizione.php'>Visualizza le tue spedizioni</a><br>
						<a href='aggiunta.php'>Aggiungi spedizione</a><br>
						<a href='inSelect.php'>Inserisci con select</a><br>
						<a href='visualizzaTB.php'>Visualizza le tabelle</a><br>
						<a href='visualizzaST.php'>Visualizza spedizioni di un certo stato</a><br>
						<a href='logout.php'>Logout</a><br>
					</td></tr>
				</table>
		";
	}
	else{
		//insulti
	}
?>