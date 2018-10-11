<?php ?>
  <br>
  <input type="text" value='Numero de la conference' disabled><input type="text" value="<?php echo ($numeroConf[0]->idConf)+1 ?>">
  <input type="text" value="Titre de la conférence" disabled><input type="text" value=""><br>
  <input type="text" value='Contenu' disabled><input type="text" value="">
  <input type="text" value="Choix du niveau" disabled>
  <select name="niveaux">
  <?php foreach($lesNiveaux as $unNiveau){ ?>
    <option value="<?php echo $unNiveau->NIVEAU?>"><?php echo $unNiveau->NIVEAU?></option>       
  <?php } ?>
    </select><br>

  <select name="themes">  
  <input type="text" value="Choix du theme" disabled>
  <?php foreach($lesThemes as $unTheme){ ?>
    <option value="<?php echo $unTheme->LIBELLETHEME?>"><?php echo $unTheme->LIBELLETHEME?></option>       
  <?php } ?>
    </select>
