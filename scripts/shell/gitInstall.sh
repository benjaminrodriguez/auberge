#! /bin/bash

# ------------------------------------------------
# Benjamin Rodriguez
# Contact : rodriguez@intechinfo.fr
# Date : 22/05/2019
# Version : 1.0
# ------------------------------------------------

# ------------------------------------------------
# INSTALLATION GIT
# ------------------------------------------------

`apt install -y git`
 
read -p "Veuillez donner le lien de votre dépot GIT : " gitRepository

`git clone $gitRepository`
