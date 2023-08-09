#!/bin/bash
sudo apt-get update
sudo apt-get install -y apache2 php git
sudo systemctl enable apache2.service
sudo service apache2 start
sudo git clone https://github.com/teachmycloud/apache-automation
sudo cp ./apache-automation/* /var/www/html
sudo mv /var/www/html/htaccess /var/www/html/.htaccess
sed -i '19iDirectoryIndex index.php /html/index.php' /etc/apache2/sites-available/000-default.conf 
sudo service apache2 restart

