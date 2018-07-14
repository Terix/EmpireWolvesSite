<?php if(!isset($message)) die(); ?>
<div>
    <form method="post">
      <span>Incolla l'url dell'immagine da caricare. Il formato del file deve essere <strong>x-nome.jpg</strong><br/>
        <strong>x:</strong> un numero univoco<br/>
        <strong>nome:</strong> il nome del giocatore<br/>
      </span>
      <input type="text" name="url" placeholder="http://url/image.jpg" />
      <input name="load" type="submit" value="Carica" style="margin-top:10px">
    </form>      
</div>  
<div>
    Clicca sulla X per eliminare un avatar. <span style="color:red">NON CHIEDE CONFERMA</span>.
<table>
  <tr>
<?php
  $i=0;
  foreach ($cmdrs as $cmdr) { 
    $i++;
?>
    <td>
    <form method="post" style="margin:0">
      <span style="margin-right:10px"><?php echo $cmdr['file'];?></span>
      <input type="hidden" name="id" value="<?php echo $cmdr['file'];?>" />
      <input name="delete" type="submit" value="X">
    </form>    
  </td>
    
<?php
    if(($i%6)==0){echo '</tr><tr>';}
  }
?>    
        
</tr>
</table>  
</div>


