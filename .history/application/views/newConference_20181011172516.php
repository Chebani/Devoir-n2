<?php ?>
  <br>
  <input type="text" value='Numero de la conference' disabled><input type="text" value="<?php echo ($numeroConf[0]->idConf)+1 ?>">
  <input type="text" value="Titre de la conférence" disabled><input type="text" value=""><br>
  <input type="text" value='Contenu' disabled><input type="text" value="">
  <input type="text" value="Choix du niveau" disabled>
  <select name="niveaux">
  <?php foreach($lesNiveaux as $unNiveau){ ?>
    <option value="<?php echo $unService->idService?>"><?php echo $unService->nomService?></option>       
                                <?php } ?>
                                </select><option value="<?php echo $unService->idService?>"><?php echo $unService->nomService?></option>       
                                <?php } ?>
    </select>
