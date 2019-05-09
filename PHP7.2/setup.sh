git clone https://github.com/chinaliukun/CI-CDPractice.git 
mv CI-CDPractice/* /var/www/html/
rm -rf CI-CDPractice setup.sh
chown -R www-data:www-data /var/www/html