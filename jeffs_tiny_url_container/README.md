# TINY URL CONTAINER

`tiny_url_container` _will Shorten long URLs to tiny ones._

[See Offsite Demo](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=jeffs_tiny_url_container)

## CREATE A MYSQL DATABASE

Create a MySQL databsae and enter the user and password into
`/php_scripts/jeffs_tiny_url_shorten.php`

## SHORTEN URL

Enter a long url into the form. Submit shalll send
the long URL using POST to `/php_scripts/jeffs_tiny_url_shorten.php`

This script will make sure you are human, creates a random number
and send the following to a MySQL database.

* Date and Time
* The Long URL
* Random Number

## USING THE SMALL URL

The short URL points to a directory that has a `.htaccess` file
with the following line:

```bash
RewriteRule ^([\w\d]{4})$ php_scripts/jeffs_tiny_url_decoder.php?decode=$1 [L]
```
It calls the php script `jeffs_tiny_url_decoder.php` to automatically
link to the long URL.
