# DYNAMIC ITEMS CONTAINER

`dynamic_items_container` _will displays items (e.g. Menu) that will
center and collapse properly on smaller screens.__

[See Offsite Demo](http://www.jeffryadecola.com/my-php-containers/index.php?container_name=social_media_bar_container)

![IMAGE - dynamic_items_container - IMAGE](../docs/pics/dynamic_items_container.jpg)

## FUCTIONALITY

This container is based around the following functionailty:

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