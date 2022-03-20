<?php
  include("config.php");
  $query="
       create table if not exists stato_spedizione(
         ID_stato_spedizione varchar(20) primary key,
         descrizione varchar(50)
       );
  ";
  $query3="
       create table if not exists livello(
         ID_livello int(5) primary key,
         nome_livello varchar(20)
       );
  ";
  $query4="
       create table if not exists utente(
         username varchar(20) primary key,
         password varchar(50),
         nome_cognome varchar(20),
         indirizzo varchar(50),
         ultimo_accesso datetime,
         livello_accesso int(5),
         foreign key (livello_accesso) references livello(ID_livello) on update cascade on delete cascade
       );
  ";
  $query2="
     create table if not exists spedizione(
       ID_spedizione varchar(10) primary key,
       dati_destinatario varchar(20),
       stato_spedizione varchar(20),
       dati_mittente varchar(20),
       data_ora_Accettazione datetime,
       foreign key (stato_spedizione) references stato_spedizione(ID_stato_spedizione) on update cascade on delete cascade,
       foreign key (dati_mittente) references utente(username) on update cascade on delete cascade
     );
  ";
  
  
  
  mysqli_query($conn,$query) or die("Errore creazione tabella".mysqli_error($conn));  
  echo"tabella STATO_SPEDIZIONE creata correttamente!!";
   mysqli_query($conn,$query3) or die("Errore creazione tabella".mysqli_error($conn));  
  echo"tabella LIVELLO creata correttamente!!";
  mysqli_query($conn,$query4) or die("Errore creazione tabella".mysqli_error($conn));  
  echo"tabella SPEDIZIONE creata correttamente!!";
 
  mysqli_query($conn,$query2) or die("Errore creazione tabella".mysqli_error($conn));  
  echo"tabella UTENTE creata correttamente!!";
  mysqli_close($conn);
?>