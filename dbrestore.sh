#!/bin/bash
vagrant ssh -c '
USER="wordpress"
PASS="vagrantpassword"
DB="wordpress"
mysql -u $USER -p$PASS $DB < /vagrant/content/db-dump/dbbackup.sql
'