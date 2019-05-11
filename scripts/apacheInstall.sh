#! /bin/bash

# ------------------------------------------------
# INSTALLATION APACHE
# ------------------------------------------------

`apt-get -y install mariadb-client mariadb-server`
`mysql_secure_installation`
`apt-get -y install apache2`
`apt-get -y install php7.3 libapache2-mod-php7.3`
`service apache2 restart`

# ------------------------------------------------
# INSTALLATION PHP
# ------------------------------------------------

`apt install -y php7.3`
`apt install php7.3-cli php7.3-common php7.3-curl php7.3-mbstring php7.3-mysql php7.3-xml`
