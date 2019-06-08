<?php ob_start(); ?>

<div class="well">
  <form action="" method="POST" class="form-example">
  Les élèves disponibles pour le projet<br>
       
            <?php
            $x = 0;
            foreach ($eleve as $key => $value) {
                $x++;
                ?>
                <input type="checkbox" name="eleve<?php echo $x; ?>" value="<?php echo $eleve[$key]['id']; ?>"> <?php echo $eleve[$key]['nom']." ".$eleve[$key]['prenom']; ?><br>
                <?php
            }
            ?>
            
        </select>
       
        <br><button class="btn-save btn btn-danger btn-sm">Save</button>
  </form>
</div>


<?php $content = ob_get_clean(); ?>