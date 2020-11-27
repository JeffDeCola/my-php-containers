<!-- DYNAMIC ITEMS CONTAINER -->

<link rel="stylesheet" type="text/css" href="building-blocks/dynamic_items_container/css/dynamic_items_container.css">

<div id="dynamic_items_container_wrapper">

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> EXAMPLE 1 </h3>
        <p> Navigation Bar using Classes <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->

    <div id="example_1_dynamic_items_container" class="dynamic_items_container">

        <div id="example_1_dynamic_items_width" class="dynamic_items_items_container">

            <!-- ITEM **************************************************************** -->
            <div class="example_1_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div class="example_1_dynamic_item_item">

                    <?php if ($_GET['page'] == "") {?>
                        HOME
                    <?php } else {?>
                        <a href="http://www.jeffdecola.com/my-php-containers">
                            HOME
                        </a>
                    <?php } ?>

                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div class="example_1_dynamic_item_item_background">
                </div>

            </div>

            <!-- ITEM **************************************************************** -->
            <div class="example_1_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div class="example_1_dynamic_item_item">
                    <?php if ($_GET['page'] == "404") {?>
                        JEFFS TINY URL CONTAINER
                    <?php } else {?>
                        <a href="http://www.jeffdecola.com/my-php-containers/index.php?page=jeffs_tiny_url_container">
                            JEFFS TINY URL CONTAINER
                        </a>
                    <?php } ?>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div class="example_1_dynamic_item_item_background">
                </div>

            </div>

            <!-- ITEM **************************************************************** -->
            <div class="example_1_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div class="example_1_dynamic_item_item">
                    <?php if ($_GET['page'] == "500") {?>
                        VIDEO CONTAINER
                    <?php } else {?>
                        <a href="http://www.jeffdecola.com/my-php-containers/index.php?page=video_container">
                            VIDEO CONTAINER
                        </a>
                    <?php } ?>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div class="example_1_dynamic_item_item_background">
                </div>

            </div>

            <!-- ITEM **************************************************************** -->
            <div class="example_1_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div class="example_1_dynamic_item_item">
                    <?php if ($_GET['page'] == "403") {?>
                        GITHUB
                    <?php } else {?>
                        <a href="https://github.com/JeffDeCola/my-php-containers">
                            GITHUB
                        </a>
                    <?php } ?>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div class="example_1_dynamic_item_item_background">
                </div>

            </div>

        </div>

    </div>
    <!-- END OF example_1_dynamic_items_container -->

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> EXAMPLE 2 </h3>
        <p> A group of four items (middle aligned) <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->

    <div id="example_2_dynamic_items_container" class="dynamic_items_container">

        <div id="example_2_dynamic_items_width" class="dynamic_items_items_container">

            <!-- ITEM **************************************************************** -->
            <div class="example_2_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_2_dynamic_item1">
                    <p> This is the text in item1 </p>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div id="example_2_dynamic_item1_background">
                </div>

            </div>

            <!-- ITEM **************************************************************** -->
            <div class="example_2_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_2_dynamic_item2">
                    <p> This is the text in item2 </p>
                    <br />
                    <p> This is more of the text in item2 </p>
                    <br />
                    <p> This is even more of the text in item2 </p>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div id="example_2_dynamic_item2_background">
                </div>

            </div>

            <!-- ITEM **************************************************************** -->
            <div class="example_2_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_2_dynamic_item3">
                    <p> This is the text in item3 </p>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div id="example_2_dynamic_item3_background">
                </div>

            </div>

            <!-- ITEM **************************************************************** -->
            <div class="example_2_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_2_dynamic_item4a">
                    <p> This is the text in item4a </p>
                </div>

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_2_dynamic_item4b">
                    <p> This is the text in item4b </p>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div id="example_2_dynamic_item4_background">
                </div>

            </div>

        </div>

    </div>
    <!-- END OF example_2_dynamic_items_container -->

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> EXAMPLE 3 </h3>
        <p> Two groups of items (top and bottom aligned) <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->

    <div id="example_3_dynamic_items_container" class="dynamic_items_container">

        <div id="example_3_dynamic_items_width" class="dynamic_items_items_container">

            <div class="dynamic_items_item_middle">

                <div id="example_3_left_dynamic_items_container" class="dynamic_items_container">

                    <div id="example_3_left_dynamic_items_width" class="dynamic_items_items_container">

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_left_dynamic_item dynamic_items_item_middle">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_left_dynamic_item1">
                                <p> GROUP1 - text in item1 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_left_dynamic_item1_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_left_dynamic_item dynamic_items_item_top">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_left_dynamic_item2">
                                <p> GROUP1 - text in item2 </p>
                                <br />
                                <p> This is more of the text in item2 </p>
                                <br />
                                <p> This is more more of the text in item2 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_left_dynamic_item2_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_left_dynamic_item dynamic_items_item_top">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_left_dynamic_item3">
                                <p> GROUP1 - text in item3 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_left_dynamic_item3_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_left_dynamic_item dynamic_items_item_top">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_left_dynamic_item4a">
                                <p> GROUP1 - text in item4a </p>
                            </div>

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_left_dynamic_item4b">
                                <p> GROUP1 - text in item4b </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_left_dynamic_item4_background">
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="dynamic_items_item_middle">

                <div id="example_3_right_dynamic_items_container" class="dynamic_items_container">

                    <div id="example_3_right_dynamic_items_width" class="dynamic_items_items_container">

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_right_dynamic_item dynamic_items_item_bottom">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_right_dynamic_item1">
                                <p> GROUP2 - text in item1 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_right_dynamic_item1_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_right_dynamic_item dynamic_items_item_bottom">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_right_dynamic_item2">
                                <p> GROUP2 - text in item2 </p>
                                <br />
                                <p> This is more of the text in item2 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_right_dynamic_item2_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_right_dynamic_item dynamic_items_item_bottom">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_right_dynamic_item3">
                                <p> GROUP2 - text in item3 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_right_dynamic_item3_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_right_dynamic_item dynamic_items_item_bottom">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_right_dynamic_item4a">
                                <p> GROUP2 - text in item4a </p>
                            </div>

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_right_dynamic_item4b">
                                <p> GROUP2 - text in item4b </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_right_dynamic_item4_background">
                            </div>

                        </div>

                        <!-- ITEM **************************************************************** -->
                        <div class="example_3_right_dynamic_item dynamic_items_item_bottom">

                            <!-- THIS DEFINES THE HEIGHT -->
                            <div id="example_3_right_dynamic_item5">
                                <p> GROUP2 - text in item5 </p>
                                <p> This is even more text in item5 </p>
                            </div>

                            <!-- BACKGROUND - THIS WILL SCALE -->
                            <div id="example_3_right_dynamic_item5_background">
                            </div>

                        </div>

                    </div>

                </div>

            </div>

         </div>

    </div>
    <!-- END OF example_3_dynamic_items_container -->

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> EXAMPLE 4 </h3>
        <p> Pictures <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->

    <div id="example_4_dynamic_items_container" class="dynamic_items_container">

        <div id="example_4_dynamic_items_width" class="dynamic_items_items_container">

            <!-- ITEM **************************************************************** -->
            <div class="example_4_dynamic_item dynamic_items_item_middle">

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_4_dynamic_item1a">
                    <img id="picture1_image"
                    src="building-blocks/dynamic_items_container/images/Sunflower-Green-Field-in-Mountain-Pics-low.jpg"
                    alt="Sunflower-Green-Field-in-Mountain-Pics-low" />
                </div>

                <!-- THIS DEFINES THE HEIGHT -->
                <div id="example_4_dynamic_item1b">
                    <p> Also can be used to display images </p>
                </div>

                <!-- BACKGROUND - THIS WILL SCALE -->
                <div id="example_4_dynamic_item1_background">
                </div>

            </div>

         </div>

    </div>
    <!-- END OF example_4_dynamic_items_container -->

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="example_header_container">

        <h3> HOW IT WORKS </h3>
        <p> Screen width is in red <p>

    </div>
    <!-- ------------------------------------------------------------------------------------------------------- -->

    <div id="wrapper_box_container">

        <div class="box_container">

            <p> box_container </p>

            <div class="box_items_container">

                <p> box_items_container </p>

                <div class="box_item">
                    <p> box_item 1 </p>
                </div>

                <div class="box_item">
                    <p> box_item 2 </p>
                </div>

                <div class="box_item">
                    <p> box_item 3 </p>
                </div>

                <br/>
                <br/>
                <br/>

            </div>
            <br/>

        </div>

    </div>

    <br />
    <br />
    
    <p> HTML</p>

    <div class="code_container">

        <pre class="prettyprint lang-html">
            
            &lt;div class=&quot;box_container&quot;&gt;

                &lt;div class=&quot;box_items_container&quot;&gt;

                    &lt;div class=&quot;box_item&quot;&gt;
                        &lt;p&gt; box_item 1 &lt;/p&gt;
                    &lt;/div&gt;

                    &lt;div class=&quot;box_item&quot;&gt;
                        &lt;p&gt; box_item 2 &lt;/p&gt;
                    &lt;/div&gt;

                    &lt;div class=&quot;box_item&quot;&gt;
                        &lt;p&gt; box_item 3 &lt;/p&gt;
                    &lt;/div&gt;

                &lt;/div&gt;

            &lt;/div&gt;
            
        </pre>

    </div>

    <br />
    
    <p> CSS </p>

    <div class="code_container">

        <pre class="prettyprint lang-css">
            
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
        
        </pre>

    </div>

</div>
<!-- END OF dynamic_items_container -->
