<?php
##############################################################################
#
#	Copyright notice
#
#	(c) 2014 Jérôme Schneider <mail@jeromeschneider.fr>
#	All rights reserved
#
#	http://baikal-server.com
#
#	This script is part of the Baïkal Server project. The Baïkal
#	Server project is free software; you can redistribute it
#	and/or modify it under the terms of the GNU General Public
#	License as published by the Free Software Foundation; either
#	version 2 of the License, or (at your option) any later version.
#
#	The GNU General Public License can be found at
#	http://www.gnu.org/copyleft/gpl.html.
#
#	This script is distributed in the hope that it will be useful,
#	but WITHOUT ANY WARRANTY; without even the implied warranty of
#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
#	GNU General Public License for more details.
#
#	This copyright notice MUST APPEAR in all copies of the script!
#
##############################################################################

##############################################################################
# Required configuration
# You *have* to review these settings for Baïkal to run properly
#

# Timezone of your users, if unsure, check http://en.wikipedia.org/wiki/List_of_tz_database_time_zones
define("PROJECT_TIMEZONE", 'YNH_TIMEZONE');

# CardDAV ON/OFF switch; default TRUE
define("BAIKAL_CARD_ENABLED", TRUE);

# CalDAV ON/OFF switch; default TRUE
define("BAIKAL_CAL_ENABLED", TRUE);

# WebDAV authentication type; default Digest
define("BAIKAL_DAV_AUTH_TYPE", 'LDAP-UserBind');

# Auth Backend LDAP-UserBind; LDAP URI
define("BAIKAL_DAV_LDAP_URI", 'ldap://127.0.0.1/');

# Auth Backend LDAP-UserBind; Template for userbind
# %n => username
# %u => user part of username when it is an email 
# %u => domain part of username when it is an email 
define("BAIKAL_DAV_LDAP_DN_TEMPLATE", 'uid=%n,ou=users,dc=yunohost,dc=org');

# Auth Backend LDAP-UserBind; attribute for displayname
define("BAIKAL_DAV_LDAP_DISPLAYNAME_ATTR", 'cn');

# Auth Backend LDAP-UserBind; attribute for email
define("BAIKAL_DAV_LDAP_EMAIL_ATTR", 'mail');

# Auth Backend Mail; protocol of service
define("BAIKAL_DAV_MAIL_PROTOCOL", 'imap');

# Auth Backend Mail; server host:port
define("BAIKAL_DAV_MAIL_SERVER", 'localhost:143');

# Auth Backend Mail; validate the ssl-certificate
define("BAIKAL_DAV_MAIL_CHECK_CERT", TRUE);

# Auth Backends: automatic creation of users; default yes"
define("BAIKAL_DAV_AUTO_CREATE_USER", TRUE);

# Baïkal Web Admin ON/OFF switch; default TRUE
define("BAIKAL_ADMIN_ENABLED", TRUE);

# Baïkal Web Admin autolock ON/OFF switch; default FALSE
define("BAIKAL_ADMIN_AUTOLOCKENABLED", FALSE);

# Baïkal Web admin password hash; Set via Baïkal Web Admin
define("BAIKAL_ADMIN_PASSWORDHASH", 'YNH_ADMIN_PASSWORDHASH');
