#! /bin/bash

# ------------------------------------------------
# Benjamin Rodriguez
# Contact : benjamin-rodriguez@outlook.fr
# Date : 22/05/2019
# Version : 1.0
# ------------------------------------------------

# ------------------------------------------------
#
# --------------- FICHIER PRINCIPAL --------------
#
# ------------------------------------------------
source auberge.sh

echo ""
echo "Verification du statut de l'utilisateur ..."
echo ""

 statut=$('whoami')

    if [ $statut != root ]
    then
        echo ""
        echo "Vous n'avez pas les droits nécéssaires, contactez votre administrateur .."
        echo ""
        sleep 2
        exit
    elif [ $statut = root ]
    then
        echo ""
        echo "Vous avez les droits nécessaires, bienvenue dans la configuration"
        echo ""
    


        `apt-get -y update`
        `apt-get -y upgrade`
        `apt-get -y dist-upgrade`


        # ------------------------------------------------
        # INSTALL CURL
        # ------------------------------------------------

        source ./curlInstall.sh

        # ------------------------------------------------
        # INSTALL GIT
        # ------------------------------------------------

        source gitInstall.sh

        # ------------------------------------------------
        # INSTALL VIM
        # ------------------------------------------------

        source vimInstall.sh

        # ------------------------------------------------
        # INSTALL SSH
        # ------------------------------------------------

        source sshInstall.sh

        # ------------------------------------------------
        # INSTALL NodeJS
        # ------------------------------------------------

        source nodeJSInstall.sh

        # ------------------------------------------------
        # AFFECTATION IP VM
        # ------------------------------------------------

        #source ipVM.sh
fi