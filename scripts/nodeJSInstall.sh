#! /bin/bash

# ------------------------------------------------
# INSTALLATION NodeJS
# ------------------------------------------------

`apt install -y install mariadb-server mariadb-client`
`mysql_secure_installation`
`apt -y install apache2`
`apt -y install php7.3 libapache2-mod-php7.3`
`service apache2 restart`
`apt -y install phpmyadmin
