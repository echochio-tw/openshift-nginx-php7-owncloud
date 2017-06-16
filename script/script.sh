#!/bin/bash
if [ ! -f $OPENSHIFT_DATA_DIR/last_run ]; then
  touch $OPENSHIFT_DATA_DIR/last_run
fi
if [[ $(find $OPENSHIFT_DATA_DIR/last_run -mmin +14) ]]; then #run every 5 mins
  rm -f $OPENSHIFT_DATA_DIR/last_run
  touch $OPENSHIFT_DATA_DIR/last_run
  $OPENSHIFT_PHP_DIR/usr/bin/php $OPENSHIFT_REPO_DIR/www/cron.php
fi
