
# PHP CONTAINERS

_All containers in alphabetical order._

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

## UPDATE GITHUB WEBPAGE USING CONCOURSE (OPTIONAL)

For fun, I use concourse to update
[my-php-containers GitHub Webpage](https://jeffdecola.github.io/my-php-containers/)
and alert me of the changes via repo status and slack.

A pipeline file [pipeline.yml](https://github.com/JeffDeCola/my-php-containers/tree/master/ci/pipeline.yml)
shows the entire ci flow. Visually, it looks like,

![IMAGE - my-php-containers concourse ci pipeline - IMAGE](pics/my-php-containers-pipeline.jpg)

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
