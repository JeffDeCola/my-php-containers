<!-- CONTACT FORM CONTAINER -->

<link rel="stylesheet" type="text/css" href="interaction/contact_form_container/css/contact_form_container.css">

<div id="contact_form_container">

    <p> I'll get back to you ASAP </p>

    <!-- ARE YOU HUMAN? -->
    <?php
        $number1 = rand(1, 5);
        $number2 = rand(1, 5);
    ?>

    <form id="contact_form"
    action="http://www.jeffdecola.com/my-php-containers/interaction/contact_form_container/php_scripts/contact_form.php" method="post">

        <table id="contact_table">

            <!-- ENTER NAME NAME -->
            <tr>
                <td>
                    <label class="contact_label" for="t_name">
                        Name
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="t_name" class="contact_input" type="text" name="fullname" />
                </td>
            </tr>

            <!-- ENTER EMAIL ADDRESS -->
            <tr>
                <td>
                    <label class="contact_label" for="t_email">
                        Email address
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="t_email" class="contact_input" type="text" name="email" />
                </td>
            </tr>

            <!-- ENTER PHONE NUMBER -->
            <tr>
                <td>
                    <label class="contact_label" for="t_phonenumber">
                        (Optional) Phone Number
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="t_phonenumber" class="contact_input" type="text" name="phonenumber" />
                </td>
            </tr>

            <!-- ENTER COMMENT -->
            <tr>
                <td>
                    <label class="contact_label" for="t_comments">
                        Comment
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea id="t_comments" class="contact_input" name="comments" rows="6" > </textarea>
                </td>
            </tr>

            <!-- ARE YOU HUMAN? -->
            <tr>
                <td>
                    <label class="contact_label" for="t_answer">
                        Are you Human? What is <?php print $number1?> + <?php print $number2?>?
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="number1" value="<?php echo $number1; ?>">
                    <input type="hidden" name="number2" value="<?php echo $number2; ?>">
                    <input id="t_answer" class="contact_input" type="text" name="answer" />
                </td>
            </tr>

            <!-- SEND FEEDBACK BUTTON -->
            <tr>
                <td>
                    <input class="contact_button" type="submit" value="Send" style="cursor:pointer" />
                </td>
            </tr>

        </table>

    </form>

</div>
<!-- END OF contact_form_container -->