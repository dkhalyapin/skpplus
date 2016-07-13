#!/bin/bash
vagrant ssh -c '
USER="wordpress"
PASS="vagrantpassword"
DB="wordpress"
mysqldump -u $USER -p$PASS $DB --add-drop-table > /vagrant/content/dbbackup.sql
'