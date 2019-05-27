#! /bin/bash

# ------------------------------------------------
# Benjamin Rodriguez
# Contact : rodriguez@intechinfo.fr
# Date : 22/05/2019
# Version : 1.0
# ------------------------------------------------


# ------------------------------------------------
# INSTALLATION Lets Encrypt
# ------------------------------------------------


# ------------------------------------------------
# INSTALLATION CERTBOT
# ------------------------------------------------

`wget https://dl.eff.org/certbot-auto`
`chmod a+x certbot-auto`

# ------------------------------------------------

`./certbot-auto`
`./certbot-auto certonly --webroot --webroot-path /srv/www/domain.tld/ --domain domain.tld --domain www.domain.tld --email rodriguez@intechinfo.fr`

# ------------------------------------------------
# VERIFICATION DE LA CONFIG DU VHOST
# ------------------------------------------------

`apachectl configtest`
`service apache2 restart`

# ------------------------------------------------
# RENOUVELER UN CERTIFICAT LETS ENCRYPT
# ------------------------------------------------

`./certbot-auto renew`
`./certbot-auto renew --rsa-key-size 4096 --force-renewal`

# ------------------------------------------------
# REVOQUER UN CERTIFICAT LETS ENCRYPT
# ------------------------------------------------

`./certbot-auto revoke --domain domain.tld --cert-path /etc/letsencrypt/live/domain.tld --key-path /etc/letsencrypt/live/domain.tld`
`rm -rf /etc/letsencrypt/live/domain.tld/ && rm -rf /etc/letsencrypt/archive/domain.tld/ && rm /etc/letsencrypt/renewal/domain.tld.conf`
