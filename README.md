# my-php-containers

[![Maintainability](https://api.codeclimate.com/v1/badges/a7fd79cc4717b3da27d6/maintainability)](https://codeclimate.com/github/JeffDeCola/my-php-containers/maintainability)
[![Issue Count](https://codeclimate.com/github/JeffDeCola/my-php-containers/badges/issue_count.svg)](https://codeclimate.com/github/JeffDeCola/my-php-containers/issues)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://jeffdecola.mit-license.org)

`my-php-containers` _is a place to keep my php container examples.
Designed for Dynamic Screen Widths._

These examples also contain info I gathered from other sources.

View my entire list of php examples on
[my-php-containers GitHub Webpage](https://jeffdecola.github.io/my-php-containers/)

## PHP CONTAINERS

_All sections in alphabetical order._

* [contact_form_container](https://github.com/JeffDeCola/my-php-containers/tree/master/contact_form_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=contact_form_container)

   _An online contact form that is sent to an email._

* [dynamic_items_container](https://github.com/JeffDeCola/my-php-containers/tree/master/dynamic_items_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=dynamic_items_container)

   _Displays items (e.g. Menu) that will center and collapse properly on
   smaller screens._

* [jeffs_simple_chat_container](https://github.com/JeffDeCola/my-php-containers/tree/master/jeffs_simple_chat_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=jeffs_simple_chat_container)

   _Coming Soon._

* [jeffs_tiny_url_container](https://github.com/JeffDeCola/my-php-containers/tree/master/jeffs_tiny_url_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=jeffs_tiny_url_container)

   _Shorten Long URLs to Tiny URLs._

* [narrow_picture_container](https://github.com/JeffDeCola/my-php-containers/tree/master/narrow_picture_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=narrow_picture_container)

   _Allow a picture to scale and display across the screen._

* [social_media_bar_container](https://github.com/JeffDeCola/my-php-containers/tree/master/social_media_bar_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=social_media_bar_container)

   _Provide links to social media, built with Dynamic Items Container._

* [video_container](https://github.com/JeffDeCola/my-php-containers/tree/master/video_container)
[(_see offsite demo_)](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=video_container)

   _For Youtube or Vimeo with optional background._

## MY GITHUB WEBPAGE IS UPDATED USING CONCOURSE

For fun, I use concourse to update
[my-php-containers GitHub Webpage](https://jeffdecola.github.io/my-php-containers/)
and alert me of the changes via repo status and slack.

The github webpage update is accomplished this by copying and editing
this `README.md` file to `/docs/_includes/README.md`.
You can see the concourse task (a shell script)
[here](https://github.com/JeffDeCola/my-php-containers/tree/master/ci/scripts/readme-github-pages.sh).

A pipeline file [pipeline.yml](https://github.com/JeffDeCola/my-php-containers/tree/master/ci/pipeline.yml)
shows the entire ci flow. Visually, it looks like,

![IMAGE - my-php-containers concourse ci pipeline - IMAGE](docs/pics/my-php-containers-pipeline.jpg)

For more information on using concourse for continuous integration,
refer to my cheat sheet on [concourse](https://github.com/JeffDeCola/my-cheat-sheets/tree/master/operations-tools/continuous-integration-continuous-deployment/concourse-cheat-sheet).
