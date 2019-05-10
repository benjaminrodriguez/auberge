#! /bin/bash

# ------------------------------------------------
# INSTALLATION APACHE
# ------------------------------------------------

`apt-get -y install mariadb-client mariadb-server`
`mysql_secure_installation`
`apt-get -y install apache2`
`apt-get -y install php7.3 libapache2-mod-php7.3`
`service apache2 restart`
