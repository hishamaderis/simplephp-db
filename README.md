# simplephp-db
simple php with mariadb

# Clone

# Launch php:apache container
docker run -dit -v "$PWD":/var/www/html -p 8080:80 --name myphp php:apache

# Check by browsing localhost:8080

# Install mysqli if not available in php:apache container
docker exec -it myphp bash
install mysqli: docker-php-ext-install mysqli
apachectl restart

# Launch mysql container
docker run -dit -v "$PWD":/mnt --env-file mariadb-env --name mydb mariadb

# Import data 
docker exec -it mydb bash
ip a
mysql -u spuser -p spdb ip.add.re.ss < data.sql

# Change index.php to use index.php.withdb
mv index.php index.php.0
mv index.php.withdb index.php

# Test by browsing localhost:8080, page should now showing data from db
