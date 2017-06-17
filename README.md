# OpenShift Nginx PHP 7 owncloud 10.0.2 Cartridge
Nginx 1.9 with PHP 7.0 owncloud  on OpenShift.

* Nginx: 1.11.6
* PHP: 7.0.13
* Composer: 1.2.4
* owncloud: 10.0.2

## Installation

### Web Console
<a href="https://openshift.redhat.com/app/console/application_type/custom?cartridges%5B%5D=http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7&amp;name=php"><img alt="Run+PHP+7+on+OpenShift" src="https://launch-shifter.rhcloud.com/launch/light/Run%20PHP%207%20on.svg" /></a>

Alternatively, you can use this [cartridge definition](http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7) on application creation page.


### Base : 
```
https://github.com/pinodex/openshift-cartridge-nginx-php7
```

### Create 
```
# rhc app create owncloud10 mysql-5.5 cron http://cartreflect-claytondev.rhcloud.com/github/chio-nzgft/openshift-nginx-php7-owncloud
```
### get DB info
```
# rhc ssh owncloud10 'env |grep DB'
OPENSHIFT_MYSQL_DB_PORT=3306
OPENSHIFT_MYSQL_DB_HOST=127.12.146.131
OPENSHIFT_MYSQL_DB_PASSWORD=Q_6HkqQ52cv6
OPENSHIFT_MYSQL_DB_USERNAME=adminTaMNlPX
OPENSHIFT_MYSQL_DB_SOCKET=/var/lib/openshift/59448c947628e16a810000e9/mysql//socket/mysql.sock
OPENSHIFT_MYSQL_DB_URL=mysql://adminTaMNlPX:Q_6HkqQ52cv6@127.12.146.131:3306/
SSH_ORIGINAL_COMMAND=env |grep DB
OPENSHIFT_MYSQL_DB_LOG_DIR=/var/lib/openshift/59448c947628e16a810000e9/app-root/logs/

```
### web http://owncloud10-XXXXX.rhcloud.com set info


### web http://owncloud10-XXXXX.rhcloud.com login


