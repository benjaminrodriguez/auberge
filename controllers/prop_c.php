<?php

    $auteur= "moi";
    $descr= "fzneiobnenfzipppppppppppppppppppeznifpezfipeznfipeznfipeznfipeznfipeznfipeznfipeznfipezfeznipppppppppppppppppppppppppppppppppppppppppppppppppppzefffffffffff";
    $titre= "TEST TITRE";

    if (isset($_POST['semestre']) && isset($_GET['projet']) && $_POST['semestre'] !== 'error') {

        affecter_projet($_GET['projet'], $_POST['semestre']);
        header('Location: index.php?page=home');
        exit();
        
    } else if (isset($_GET['projet'])) {
        //RECUP LES INFOS DANS LA BDD SUR LA PROPOSITION 
        $projet = voirdispoid($_GET['projet']);
    }
    require(dirname(__FILE__).'/../views/prop_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>