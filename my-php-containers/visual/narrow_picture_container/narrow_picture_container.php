<!-- NARROW PICTURE CONTAINER -->

<link rel="stylesheet" type="text/css" href="visual/narrow_picture_container/css/narrow_picture_container.css">

<div id="narrow_picture_container_wrapper">

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> EXAMPLE 1 </h3>
        <p> What it does <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->
    
    <div id="example_1_narrow_picture_container" class="narrow_picture_container">

        <figure>
            <img src="visual/narrow_picture_container/images/antartica-low.jpg" alt="narrow image picture"/>
        </figure>

    </div>
    <!-- END OF example_1_narrow_picture_container -->

    <br />

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> EXAMPLE 2 </h3>
        <p> Another pic <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->
    
    <div id="example_2_narrow_picture_container" class="narrow_picture_container">

        <figure>
            <img src="visual/narrow_picture_container/images/Sunflower-Green-Field-in-Mountain-Pics-low.jpg" alt="narrow image picture"/>
        </figure>

    </div>
    <!-- END OF example_2_narrow_picture_container -->

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> HOW IT WORKS </h3>
        <p> Sreen width is in red </p>
        
    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->
 
    <br />
    
    <div id="wrapper_box_picture_container">

        <p> box_picture_container </p>

        <div class="box_picture_container">

            <img src="visual/narrow_picture_container/images/antartica-low.jpg" alt="narrow image picture"/>

        </div>

        <br />

    </div>

    <br />
    <br />
    <p> HTML </p>

    <div class="code_container">

        <pre class="prettyprint lang-html">
    
            &lt;div class="narrow_picture_container"&gt;

                &lt;img src="yourpicturelink.jpg" alt="your note"/&gt;

            &lt;/div&gt;
            
        </pre>

    </div>

    <br />
    <p> CSS </p>

    <div class="code_container">

        <pre class="prettyprint lang-css">
        
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
    
        </pre>

    </div>

</div>
<!-- END OF narrow_picture_container_wrapper -->