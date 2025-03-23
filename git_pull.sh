#!/bin/bash
cd /var/www/nublog
git pull origin master
sudo systemctl restart nginx
exit 0