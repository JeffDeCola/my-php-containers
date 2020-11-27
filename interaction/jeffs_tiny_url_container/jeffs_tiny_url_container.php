<!-- JEFFS TINY URL CONTAINER -->

<link rel="stylesheet" type="text/css" href="interaction/jeffs_tiny_url_container/css/jeffs_tiny_url_container.css">

<div id="jeffs_tiny_url_container">

    <p> <a href="http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/pages/jeffs_tiny_url_list_of_urls.php">
        Database List </a>
    </p>

    <!-- ARE YOU HUMAN? -->
    <?php
        $number1 = rand(1, 5);
        $number2 = rand(1, 5);
    ?>

    <form
    id="jeffs_tiny_url_form"
    action="http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/php_scripts/jeffs_tiny_url_shorten.php"
    method="post">

        <table id="jeffs_tiny_url_table">

            <!-- ENTER NAME NAME -->
            <tr>
                <td>
                    <label class="jeffs_tiny_url_label" for="t_long_url">
                        Enter Long URL: (Must contain http://)
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="t_long_url" class="jeffs_tiny_url_input" type="text" name="long_url" />
                </td>
            </tr>

            <!-- ARE YOU HUMAN? -->
            <tr>
                <td>
                    <label class="jeffs_tiny_url_label" for="t_answer_question">
                        Are you Human? What is <?php print $number1?> + <?php print $number2?>?
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="number1" value="<?php echo $number1; ?>">
                    <input type="hidden" name="number2" value="<?php echo $number2; ?>">
                    <input id="t_answer_question" class="jeffs_tiny_url_input" type="text" name="answer_question" />
                </td>
            </tr>

            <!-- SHORTEN URL BUTTON -->
            <tr>
                <td>
                    <input class="jeffs_tiny_url_button" type="submit" value="Shorten this URL" style="cursor:pointer" />
                </td>
            </tr>

        </table>

    </form>

</div>
<!-- END OF jeffs_tiny_url_container -->
