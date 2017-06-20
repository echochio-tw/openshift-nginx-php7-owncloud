<?php
define("DIRECTORY",$_SERVER['OPENSHIFT_DATA_DIR']. 'www' );
define("DBNAME",$_SERVER['OPENSHIFT_APP_NAME'] );
define("DBTYPE",'mysql' );
define("DBUSER",$_SERVER['OPENSHIFT_MYSQL_DB_USERNAME'] );
define("DBPASS",$_SERVER['OPENSHIFT_MYSQL_DB_PASSWORD'] );
define("DBHOST",$_SERVER['OPENSHIFT_MYSQL_DB_HOST'] . ':' . $_SERVER['OPENSHIFT_MYSQL_DB_PORT'] );
$AUTOCONFIG = array(
     'installed' => false,
     'dbtype' => DBTYPE,
     'dbtableprefix' => 'oc_',
     'adminlogin' => 'admin',
     'adminpass' => 'admin',
     'directory' => DIRECTORY,
     'dbname' => DBNAME,
     'dbuser' => DBUSER,
     'dbpass' => DBPASS,
     'dbhost' => DBHOST,
  );
?>
