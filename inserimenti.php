<?php
  include("config.php");
  $query="
    insert into stato_spedizione values
       ('1','Consegnato'),
       ('2','In preparazione'),
       ('3','In restituzione'),
       ('4','In consegna'),
       ('5','In giacenza');
  ";
  mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
  $query3="
          insert into livello values
            (1,'Amministratore'),
            (2,'Dirigente'),
            (3,'Tecnico'),
            (4,'Commerciale'),
            (5,'Utente');
          ";
  mysqli_query($conn,$query3)or die ("Errore negli inserimenti".mysqli_error());
  $query4="
          insert into utente (username,password,nome_cognome,indirizzo,livello_accesso) values
            ('Luca Babbo',md5('luca'),'Luca Babbo','Isorella Via san Carlo 5','1'),
            ('Stefano Magalli',md5('stefano'),'Stefano Magalli','Calvisano Via Trento 35','2'),
            ('Andrea Ciro',md5('andrea'),'Andrea Ciro','Remedello Via san Paolo 67','5'),
            ('Marco Savastano',md5('marco'),'Marco Savastano','Visano Via san Lorenzo 32','3'),
            ('Giulio di Marzio',md5('giulio'),'Giulio di Marzio','Casalmoro Via san Giuseppe 34','4');
          ";
  mysqli_query($conn,$query4)or die ("Errore negli inserimenti".mysqli_error());
  $query2="
    insert into spedizione values
       ('AAA123','Andrea Ciro','1','Stefano Magalli','2019-11-25'),
       ('BBB123','Luca Babbo','4','Giulio di Marzio','2019-08-01'),
       ('CCC123','Stefano Magalli','3','Marco Savastano','2019-12-04'),
       ('DDD123','Marco Savastano','1','Luca Babbo','2019-09-13'),
       ('EEE123','Giulio di Marzio','5','Andrea Ciro','2019-02-25');
  ";
  mysqli_query($conn,$query2)or die ("Errore negli inserimenti".mysqli_error());
  
  
  
  
?>