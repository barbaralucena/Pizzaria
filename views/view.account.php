<?php
    require("layout/view.header.php");
?>
<h2>As suas informações:</h2>
<div> 
    <ul>
<?php
                if(isset($_SESSION["user"])){
 echo '
     <li> Nome: '.$_SESSION["user"]["name"].'
     </li>
    
     <li> Email: '.$_SESSION["user"]["email"].'
     </li>
   <li> Contacto telefónico: '.$_SESSION["user"]["phone_number"].'
     </li><li> Rua: '.$_SESSION["user"]["street"].'
     </li>
     <li> Código postal: '.$_SESSION["user"]["postal_code"].'
     </li>
     <li> Cidade: '.$_SESSION["user"]["city"].'
     </li>
 '; 
                }
?>
     </ul>

</div>
<div>
    <a href="/logout">Faça logout</a>
</div>

<?php require("layout/view.footer.php")?>