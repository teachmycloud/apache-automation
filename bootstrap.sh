#!/bin/bash
sudo yum -y update
sudo yum install -y httpd php git
sudo systemctl enable httpd.service
sudo service httpd start
cd
sudo git clone https://github.com/AventureCloud/centos-website-install
sudo cp ./centos-website-install/* /var/www/html
sudo mv /var/www/html/htaccess /var/www/html/.htaccess

