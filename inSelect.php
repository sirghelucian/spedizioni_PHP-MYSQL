<html>
  <head>
    <script language="javascript">
          function tendina(n){
             s="<select name='"+n+"'>";
               for(i=1;i<=5;i++){
                 s+="<option value='"+i+"'>"+i+"</option>";
               }
             s+="</select>";
             return s;
          }
    </script>
  </head>
  <body>
    <?php
      
      echo "
        <form method='post' action='$_SERVER[PHP_SELF]'>
          <table>
            <tr><th>Aggiunta spedizione</th></tr>
            <tr><td>ID spedizione:</td>
            <td><input type='text' name='IDsped'></td></tr>
            <tr><td>Dati destinatario:</td>
            <td><input type='text' name='dest'></td></tr>
            <tr><td>Stato spedizione:</td><td>";
    ?>
    <script language="javascript">
      document.write(tendina("stato"));
    </script>
    <?php
      echo"</td></tr>
          <tr><td>Dati mittente:</td>
          <td><input type='text' name='mitt'></td></tr>
          <tr><td>Data accettazione (aaaa-mm-gg):</td>
          <td><input type='text' name='data'></td></tr>
          <tr><td colspan=2 align=right>
          <input type='submit' name='ok' value='Aggiungi'></td></tr>
        </table>
      </form>
      ";

      if(isset($_POST['ok'])){
        include("config.php");
        $queryA="
         insert into spedizione values
           ('$_POST[IDsped]','$_POST[dest]',$_POST[stato],'$_POST[mitt]','$_POST[data]');
        ";

        mysqli_query($conn,$queryA) or die(mysqli_error($conn));
      }

      echo "<a href='pagina.php'>Torna all'Area Persoanle</a>";

    ?>
  </body>
</html>