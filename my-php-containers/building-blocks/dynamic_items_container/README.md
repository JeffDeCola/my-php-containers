# DYNAMIC ITEMS CONTAINER

[![jeffdecola.com](https://img.shields.io/badge/website-jeffdecola.com-blue)](https://jeffdecola.com)
[![MIT License](https://img.shields.io/:license-mit-blue.svg)](https://jeffdecola.mit-license.org)

_Displays items (e.g. menu or picture) that will center and collapse properly on
smaller screens._

Table of Contents

* [EXAMPLE](https://github.com/JeffDeCola/my-php-containers/tree/master/my-php-containers/building-blocks/dynamic_items_container#example)
* [OVERVIEW](https://github.com/JeffDeCola/my-php-containers/tree/master/my-php-containers/building-blocks/dynamic_items_container#overview)
* [TO USE](https://github.com/JeffDeCola/my-php-containers/tree/master/my-php-containers/building-blocks/dynamic_items_container#to-use)

Documentation and Reference

* [offsite demo](http://www.jeffdecola.com/my-php-containers/index.php?page=dynamic_items_container)

## EXAMPLE

![IMAGE - dynamic_items_container - IMAGE](../../../docs/pics/dynamic_items_container.jpg)

## OVERVIEW

This container is based around the following functionality.
The red box represents the width of the screen.

![IMAGE - dynamic_items_container - IMAGE](../../../docs/pics/dynamic_items_container_wireimage.jpg)

PHP,

```php
<div class="box_container">

    <div class="box_items_container">

          <div class="box_item">
              <p> box_item 1 </p>
          </div>

          <div class="box_item">
              <p> box_item 2 </p>
          </div>

          <div class="box_item">
              <p> box_item 3 </p>
          </div>

    </div>

</div>
```

CSS,

```css
.box_container {
    text-align: center;
}

.box_items_container{
    height: inherit;
    left: 50%;
    position: relative;
}

.box_item {
    display: inline-block;
    left: -50%;
    position: relative;
}
```

## TO USE

* Copy and paste the php container code
  [dynamic_items_container.php](https://github.com/JeffDeCola/my-php-containers/blob/master/my-php-containers/building-blocks/dynamic_items_container/dynamic_items_container.php)
  into your php code
* Copy the css file
  [dynamic_items_container.css](https://github.com/JeffDeCola/my-php-containers/blob/master/my-php-containers/building-blocks/dynamic_items_container/css/dynamic_items_container.css)
* Update links and configure as desired
