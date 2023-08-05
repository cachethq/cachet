
sudo apt install -y php8.1 mysql-server make
sudo apt install -y php8.1-xml php8.1-mbstring php8.1-sqlite3 php8.1-mysqlnd
sudo apt install -y curl

curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -
sudo apt install -y nodejs yarn

sudo npm install --global cross-env

sudo apt install -y zip unzip php-zip

composer install



