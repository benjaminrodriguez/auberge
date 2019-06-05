# Installation

Nécessaires

* apt install vim tree curl git
* apt install build-essential
* apt install linux-headers-...
* VBox Guest Addition CD
* apt install mate-tweak zerofree
* npm install kbd / remedial / moment / formidable / uuid

En option

* php7.0 php-xml popple-utils pdftk imagemagick unrar-free ftp

# Ménage
* suppression fichier Bureau/Images/Téléchargement ...
* ajout des répertoires autre eval_fs eval_ms exercices projet

# Paramétrage

* sudo : ajout compte eleve dans le groupe sudo (adduser eleve sudo)
* vim : .vimrc

```
syntax on
set autoindent
set shiftwidth=4
set tabstop=4
set noexpandtab
```

* bash : .bash_aliases

```
alias l='ls -lhF --group-directories-first'
alias ll='ls -lhFa --group-directories-first'
```

* jshint : .jshintrc (mettre à jour avec l'ES6, voir dans le livre)
* MATE panneau haut : Applications/Firefox/MATE Terminal/Son/Réseau/Arrêt
* firefox :
	* demander répertoire au téléchargement
	* home-page : itinet.fr/thire
	* ajouter barre de menu
	* ajouter barre perso (avec itinet.fr/thire)
	* ajout module uBlock Origin
* git :
	* ~/.gitignore
	* git config --global core.excludesfile ~/.gitignore
	* git config --global core.editor vim
	* git mail ... est configuré avec upload
	* git user ... est configuré avec upload

* ssh :
	* .ssh/id_rsa.pub   .ssh/id_rsa

### Personnalisation
* ajout commande upload et upload.pl dans /usr/local/bin/

### GIMP
* configurer panneau outil et option zoom et crop

### Remarques
* mysql n'est pas installé
* VirtualBox : penser à configurer le presse-papier partagé
* pour les possesseurs de Mac, on peut reconfigurer le clavier :
	* Aller dans System/Préférence/Matériel/Clavier ...
	* ... puis Agencement et changer modèle de clavier

### Installation LAMP : MySQL (MariaDB)

https://manjaro.site/install-lamp-server-debian-9/

#### installation MySQL (MariaDB)
apt install mysql-server
systemctl start mariadb
systemctl enable mariadb

check :
systemctl status mariadb

securise :
mysql_secure_installation

#### installation PHP
apt install php php-mysql

Check :
php --version

#### installation PHPMyAdmin

https://manjaro.site/how-to-install-phpmyadmin-on-debian-9-stretch/

apt install phpmyadmin

Check :	http://localhost/phpmyadmin

Si erreur : Access denied for user ‘root’@’localhost’
dpkg-reconfigure -plow phpmyadmin :
choisir OUI
choisir TCP/IP
choisir localhost
choisir 3306
choisir phpmyadmin
changer phpmyadmin@localhost -> root
....
Si erreur, re-executer !

# Ménage 2
vboxmanage modifymedium --compact /path/to/thedisk.vdi
vboxmanage internalcommands sethduuid /path/to/thedisk.vdi
