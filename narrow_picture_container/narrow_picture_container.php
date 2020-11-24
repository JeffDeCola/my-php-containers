<link rel="stylesheet" type="text/css" href="narrow_picture_container/css/narrow_picture_container.css"> 

<div id="foo_narrow_picture_container" class="narrow_picture_container">

	<figure>
		<img src="narrow_picture_container/images/narrow_picture_container/antartica-low.jpg" alt="narrow image picture"/>
  	</figure>
    
</div>
<!-- END OF narrow_picture_container -->

<br />

<div id="bar_narrow_picture_container" class="narrow_picture_container">
    
    <figure>
		<img src="narrow_picture_container/images/narrow_picture_container/Sunflower-Green-Field-in-Mountain-Pics-low.jpg" alt="narrow image picture"/>
  	</figure>
    
</div>
<!-- END OF foo_narrow_picture_container -->

<?php if ($container_name == "narrow_picture_container") { ?>
<br />
<br />
<h3> The main code for this container </h3>
<p> (Sreen width is in red) </h3>
<br />
<br />

<div id="wrapper_box_picture_container">
    
    <p> box_picture_container </p>

    <div class="box_picture_container">
        	
       	<img src="narrow_picture_container/images/narrow_picture_container/antartica-low.jpg" alt="narrow image picture"/>
        
    </div>
    
    <br />

</div>

<br />
<br />
<p> HTML</p>

<!-- <div class="code_container"> -->
<div class="code_container">

<!-- asdasfdfasdf -->
<pre class="prettyprint lang-html">&lt;div class="box_picture_container"&gt;
        	
    &lt;img src="YOUR IMAGE" alt="note"/&gt;
        
&lt;/div&gt;</pre>
    
</div>

<br />
<p> CSS </p>


<div class="code_container">
	
<pre class="prettyprint lang-css">.box_picture_container {
    height: 300px;
    position: relative;
    margin-left: auto;
    margin-right: auto;
    overflow: hidden;
    text-align:center;
}

.box_picture_container img {
    position: absolute;
    margin: auto;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}</pre>
    
</div>

<?php } ?>