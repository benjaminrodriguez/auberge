#! /bin/bash

# ------------------------------------------------
# Benjamin Rodriguez
# Contact : rodriguez@intechinfo.fr
# Date : 22/05/2019
# Version : 1.0
# ------------------------------------------------

# ------------------------------------------------
# INSTALLATION APACHE
# ------------------------------------------------

`apt-get -y install mariadb-client mariadb-server`
#`mysql_secure_installation`
`apt-get -y install apache2`
`apt-get -y install php7.3 libapache2-mod-php7.3`
`service apache2 restart`

# ------------------------------------------------
# INSTALLATION PHP
# ------------------------------------------------

`apt install -y php7.3`
