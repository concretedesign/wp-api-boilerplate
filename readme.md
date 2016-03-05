### Setup

Get http://wp-cli.org/

in a folder:
- wp core download (or use this repo)
- wp core config --dbname=wp_playground --dbuser=username --dbpass=password
- wp core install --title="WP Playground" --url=http://localhost:8000 --admin_user=admin —admin_password=password --admin_email=email@concrete.ca

#### Install plugins
These plugins are distributed with the repo so no need to do this if cloning
- wp plugin install wp-api (make sure you're using > 2.0)
- wp plugin install pods

- Active 'API' theme


TODO
— Customize WP admin
— Disable comments everywhere
- Disable page/post preview everywhere
