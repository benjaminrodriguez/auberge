<?php

$auteur= "moi";
$descr= "fzneiobnenfzipppppppppppppppppppeznifpezfipeznfipeznfipeznfipeznfipeznfipeznfipeznfipezfeznipppppppppppppppppppppppppppppppppppppppppppppppppppzefffffffffff";
$titre= "TEST TITRE";
    if (isset($_GET['projet'])) {
        //RECUP LES INFOS DANS LA BDD SUR LA PROPOSITION
        //echo $_GET['projet'];
        $projet = voirprojet($_GET['projet']);
    
        $titre = $projet['0']['nom'];
        $auteur = $projet['0']['semestre'];


    }

    require(dirname(__FILE__).'/../views/voirprojet_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>