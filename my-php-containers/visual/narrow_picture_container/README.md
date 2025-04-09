# NARROW PICTURE CONTAINER

[![jeffdecola.com](https://img.shields.io/badge/website-jeffdecola.com-blue)](https://jeffdecola.com)
[![MIT License](https://img.shields.io/:license-mit-blue.svg)](https://jeffdecola.mit-license.org)

_Allow a picture to scale and display across the screen._

Table of Contents

* [EXAMPLE](https://github.com/JeffDeCola/my-php-containers/tree/master/my-php-containers/visual/narrow_picture_container#example)
* [OVERVIEW](https://github.com/JeffDeCola/my-php-containers/tree/master/my-php-containers/visual/narrow_picture_container#overview)
* [TO USE](https://github.com/JeffDeCola/my-php-containers/tree/master/my-php-containers/visual/narrow_picture_container#to-use)

Documentation and Reference

* [offsite demo](http://www.jeffdecola.com/my-php-containers/index.php?page=narrow_picture_container)

## EXAMPLE

![IMAGE - narrow_picture_container - IMAGE](../../../docs/pics/narrow_picture_container.jpg)

## OVERVIEW

The image will scale to the size of the screen while keeping the
vertical height centered.

## TO USE

It is really easy.

Create a div as follows,

```php
    <div class="narrow_picture_container>

        <img src="yourpicturelink.jpg" alt="your note"/>

    </div>
```

Use this .css code,

```css
    .narrow_picture_container {
        text-align:center;
        height: 300px;
        position: relative;
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
    }

    .narrow_picture_container img {
        position: absolute;
        margin: auto;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
```
