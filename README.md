# my-php-containers

[![Maintainability](https://api.codeclimate.com/v1/badges/a7fd79cc4717b3da27d6/maintainability)](https://codeclimate.com/github/JeffDeCola/my-php-containers/maintainability)
[![Issue Count](https://codeclimate.com/github/JeffDeCola/my-php-containers/badges/issue_count.svg)](https://codeclimate.com/github/JeffDeCola/my-php-containers/issues)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://jeffdecola.mit-license.org)

_A place to keep my php containers.
All containers designed for dynamic screen widths._

These containers also contain info I gathered from other sources.

Table of Contents,

* [BUILDING BLOCKS](https://github.com/JeffDeCola/my-php-containers#building-blocks)
* [INTERACTION](https://github.com/JeffDeCola/my-php-containers#interaction)
* [VISUAL](https://github.com/JeffDeCola/my-php-containers#visual)

Documentation and reference,

* [php-cheat-sheet](https://github.com/JeffDeCola/my-cheat-sheets/tree/master/software/development/languages/php-cheat-sheet)
* [See offsite demos](http://www.jeffdecola.com/my-php-containers/index.php)

[GitHub Webpage](https://jeffdecola.github.io/my-php-containers/)

## PHP CONTAINERS

_All sections in alphabetical order._

### BUILDING BLOCKS

* [dynamic_items_container](https://github.com/JeffDeCola/my-php-containers/tree/master/building-blocks/dynamic_items_container)

  _Displays items (e.g. menu or picture) that will center and collapse properly on
  smaller screens._

### INTERACTION

* [contact_form_container](https://github.com/JeffDeCola/my-php-containers/tree/master/interaction/contact_form_container)

  _An online contact form that is sent to an email._

* [jeffs_tiny_url_container](https://github.com/JeffDeCola/my-php-containers/tree/master/interaction/jeffs_tiny_url_container)

  _Shorten Long URLs to Tiny URLs. Information stored in a mySQLi database._

### VISUAL

* [narrow_picture_container](https://github.com/JeffDeCola/my-php-containers/tree/master/visual/narrow_picture_container)

  _Allow a picture to scale and display across the screen._

* [video_container](https://github.com/JeffDeCola/my-php-containers/tree/master/visual/video_container)

  _For Youtube or Vimeo with optional background._

## UPDATE GITHUB WEBPAGE USING CONCOURSE (OPTIONAL)

For fun, I use concourse to update
[my-php-containers GitHub Webpage](https://jeffdecola.github.io/my-php-containers/)
and alert me of the changes via repo status and slack.

A pipeline file [pipeline.yml](https://github.com/JeffDeCola/my-php-containers/tree/master/ci/pipeline.yml)
shows the entire ci flow. Visually, it looks like,

![IMAGE - my-php-containers concourse ci pipeline - IMAGE](docs/pics/my-php-containers-pipeline.jpg)

The `jobs` and `tasks` are,

* `job-readme-github-pages` runs task
  [readme-github-pages.sh](https://github.com/JeffDeCola/my-php-containers/tree/master/ci/scripts/readme-github-pages.sh).

The concourse `resources types` are,

* `my-php-containers` uses a resource type
  [docker-image](https://hub.docker.com/r/concourse/git-resource/)
  to PULL a repo from github.
* `resource-slack-alert` uses a resource type
  [docker image](https://hub.docker.com/r/cfcommunity/slack-notification-resource)
  that will notify slack on your progress.
* `resource-repo-status` uses a resource type
  [docker image](https://hub.docker.com/r/dpb587/github-status-resource)
  that will update your git status for that particular commit.

For more information on using concourse for continuous integration,
refer to my cheat sheet on [concourse](https://github.com/JeffDeCola/my-cheat-sheets/tree/master/software/operations-tools/continuous-integration-continuous-deployment/concourse-cheat-sheet).
