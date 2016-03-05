### Setup
http://wp-cli.org/

in a folder:
- wp core download (or use this repo)
- wp core config --dbname=wp_playground --dbuser=root --dbpass=root
- wp core install --title="WP Playground" --url=http://localhost:8000 --admin_user=admin —admin_password=password --admin_email=mc@concrete.ca

#### Install plugins
These plugins are distributed with the repo so no need to do this if cloning
- wp plugin install wp-api

Scaffolding custom post types
- Custom post types must ship with a theme/plugin so create and assign a theme first
With CLI http://wp-cli.org/blog/scaffolding-custom-post-types-and-taxonomies.html

Adding wp-api support: http://v2.wp-api.org/extending/custom-content-types/

CCT tutorial w/ API: https://www.smashingmagazine.com/2015/04/extending-wordpress-custom-content-types/

TODO
— Theme that has no real front-end (see http://wordpress.stackexchange.com/questions/17969/disable-front-end-to-use-as-cms-only) — Maybe just show a splash page.  Call it ‘API theme'
— Configure to work with nginx (maybe create a server on concrete’s DO that can be cloned — use a subdomain like api.foo.com)
— Customize WP admin
— Disable comments everywhere
