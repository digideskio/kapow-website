# Init script for Kapow Website
# -----------------------------------------------------------------------------

# Begin set-up
# -------------------------------------
echo "Commencing Kapow Website Setup"

# Make a database, unless we already
# have one set-up
# -------------------------------------
echo "Creating Kapow Website database (if it's not already there)"
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS kapow_website"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON kapow_website.* TO wp@localhost IDENTIFIED BY 'wp';"

# Download WordPress
# -------------------------------------
if [ ! -d build/wp-admin ]
then
	echo "Installing WordPress using WP CLI"
	cd build
  mv wp-config.php wp-config-bak.php
  cd wordpress
  wp core config --dbname="kapow_website" --dbuser=wp --dbpass=wp --allow-root
	wp core install --url="kapow-website.dev" --title="Kapow Website" --admin_user=admin --admin_password=password --admin_email="hello@kapow-website.com" --allow-root
  rm wp-config.php
  cd ..
  mv wp-config-bak.php wp-config.php
	cd ..
fi

# The Vagrant site setup script will
# restart Nginx for us
# -------------------------------------
echo "Kapow Website site now installed";
