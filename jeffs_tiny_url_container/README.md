# TINY URL CONTAINER CONTAINER

`tiny_url_container` _will Shorten long URLs to tiny ones._

[(See Offsite Demo)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=jeffs_tiny_url_container)

## CREATE A MYSQL DATABASE

Create a MySQL databsae and enter the user and password into
`/php_scripts/jeffs_tiny_url_shorten.php`

## SHORTEN URL

Enter a long url into the form. Submit shalll send
the long URL using POST to `/php_scripts/jeffs_tiny_url_shorten.php`

This script will make sure you are human, creates a random number
and send the following to a MySQL database.

* date _The date_
* long_url_escape _The Long URL_
* Random Number _a Random number_

## USING THE SMALL URL

When someone wnats to use the short URL, place the following into
an `.htaccess` file.  When the folder is entered, it will point to the
`jeffs_tiny_url_decoder.php` to automatically link to the long URL.

```bash
RewriteRule ^([\w\d]{4})$ php_scripts/jeffs_tiny_url_decoder.php?decode=$1 [L]
```