#!/bin/bash
# ------------------------------------------------
#Version 1.00 Date: 27/05/2019
#Auteur : Erwan contact : erwan.hacques@gmail.com
#Titre : ADD USER
# ------------------------------------------------

if [ $(id -u) -eq 0 ]; 
	then
	read -p "Enter nom du projet : " username
	read -s -p "Enter password : " password
	egrep "^$username" /etc/passwd >/dev/null
	if [ $? -eq 0 ]; then
		echo "$username exists!"
		exit 1
	else
		pass=$(perl -e 'print crypt($ARGV[0], " P@55w0rd")' $password)
		useradd -m -p $pass $username
		[ $? -eq 0 ] && echo "L'utilisateur a été ajouté au système!" || echo "Impossible d'ajouter un utilisateur!"
	fi
else
	echo "Seul root peut ajouter un utilisateur au système"
	exit 2
fi