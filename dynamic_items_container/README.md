# DYNAMIC ITEMS CONTAINER

_Displays items (e.g. A menu or picture) that will center and collapse properly on
smaller screens._

[See Offsite Demo](http://www.jeffdecola.com/my-php-containers/index.php?page=dynamic_items_container)

![IMAGE - dynamic_items_container - IMAGE](../docs/pics/dynamic_items_container.jpg)

## FUCTIONALITY

This container is based around the following functionailty.
The red box represents the width of the screen.

![IMAGE - dynamic_items_container - IMAGE](../docs/pics/dynamic_items_container_wireimage.jpg)

PHP

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

CSS

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

* Copy and paste the code into your php code
* Configure as desired
