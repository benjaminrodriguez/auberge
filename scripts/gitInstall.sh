#! /bin/bash

# ------------------------------------------------
# INSTALLATION GIT
# ------------------------------------------------

`apt install -y git`
 
read -p "Veuillez donner le lien de votre dépot GIT" gitRepository

`git clone $gitRepository`
