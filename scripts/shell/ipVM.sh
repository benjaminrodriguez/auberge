#! /bin/bash

# ------------------------------------------------
#Version 1.00 Date: 27/05/2019
#Auteur : Erwan contact : erwan.hacques@gmail.com
#Titre : INSERT IP 
# ------------------------------------------------

# ------------------------------------------------
# AFFECTATION IP VM
# ------------------------------------------------

#requete sql pour prendre ip

 MY_USER=auberge
sqlplus <root>/<> @file-with-sql-IP.sql $MY_USER

#transmissin de IP 
auto eth0
iface eth0 inet static
address $MY_USER > /etc/network/interfaces

#Etat de l'IP 
sqlplus <root>/<> @file-with-sql-IPUPDATE.sql

