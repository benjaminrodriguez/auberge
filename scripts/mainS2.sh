#! /bin/bash

# ------------------------------------------------
#
# --------------- FICHIER PRINCIPAL --------------
#
# ------------------------------------------------

#read -p "Etes vous connectez en tant que root" root


`apt-get -y update`
`apt-get -y upgrade`
`apt-get -y dist-upgrade`


# ------------------------------------------------
# INSTALL CURL
# ------------------------------------------------

source curlInstall.sh 

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
# INSTALL PHP
# ------------------------------------------------

source phpInstall.sh


read "1. Apache"
read "2. NGINX"
read -p "Quel serveur HTTP voulez vous installer ? " serveurHTTP 

if [ $serveurHTTP == "apache" -o $serveurHTTP == "1" ]
then

    # ------------------------------------------------
    # INSTALL APACHE
    #-------------------------------------------------

    source apacheInstall.sh

elif [ $serveurHTTP == "nginx" -o $serveurHTTP == "2" ]
then

    # ------------------------------------------------
    # INSTALL NGINX
    # ------------------------------------------------

    source nginxInstall.sh
else
    read "Veuillez séléctionne 1 ou 2"

fi
# ------------------------------------------------
# INSTALL LETS ECRYPT
# ------------------------------------------------

source letsEncryptInstall.sh


# ------------------------------------------------
# AFFECTATION IP VM
# ------------------------------------------------

#source ipVM.sh
