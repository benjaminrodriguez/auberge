<?php ob_start(); ?>
<a href="?page=gestion"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Retour</button></a><br><br>
<div class="well">
  <form action="" method="POST" class="form-example">
  Les élèves disponibles pour le projet<br>
       
        <?php
        if (isset($eleve[0])) {
            
        
        $x = 0;
        foreach ($eleve as $key => $value) {
            $x++;
            ?>
            <input type="checkbox" name="eleve<?php echo $x; ?>" value="<?php echo $eleve[$key]['id']; ?>"> <?php echo $eleve[$key]['nom']." ".$eleve[$key]['prenom']; ?><br>
                    
            
            <?php
        $eleve = shell_exec('adduser.sh');
        }
    } else {
        echo "Il n'y a pas d'élèves libre.";
    }
        ?>
        
    </select>
       
        <br><button class="btn-save btn btn-danger btn-sm">Save</button>
  </form>
</div>


<?php $content = ob_get_clean(); ?>