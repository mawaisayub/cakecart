

<div class="container">
    <div class="sixteen columns">

        <div id="pageName">
            <div class="name_tag">
                <p>
                    You're Here :: <a href="#">home</a> :: Checkout
                </p>
                <div class="shapLeft"></div>
                <div class="shapRight"></div>
            </div>
        </div><!--end pageName-->

    </div>
</div><!-- container -->



<!-- strat the main content area -->

<div class="container">
    <div class="sixteen columns">

        <div class="box_head">
            <h3>Checkout</h3>
        </div><!--end box_head -->

        <div class="checkout_outer">
            <h2>Step 1 : <span>Checkout Options</span></h2>
            <div class="checkout_content checkout_option clearfix">
                <div class="not_register">
                    <h6>If you don’t have account, Register for free</h6>
                    <p>
                        If you register yourself on this site, you will be able to get many items at really good price. Providing quality is our moto. Please risgter yourself.
                                            </p>
                    <a class="gray_btn" href="#">register Now</a>
                </div>
                <?php echo $this->Form->create('User'); ?>
                <h6>If You alredy have an account, Please Login</h6>
                    <label>
                        <strong>Your E-Mail <em>*</em></strong>
                        <?php
                        echo $this->Form->input('',array('id'=>'mail','placeholder'=>'example@example.com','type'=>'text'));
                        ?>
                    </label>
                    <label>
                        <strong>PassWord <em>*</em></strong>
                        <?php
                        echo $this->Form->input('',array('id'=>'pass','placeholder'=>'**********','type'=>'password'));
                        ?>
                    </label>
                    <div class="submit">
                        <?php
                        echo $this->Form->submit('Sign In',array('class'=>'red_btn'));
                        ?>
                    </div>
                <?php  echo $this->Form->end(); ?>
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->

        <div class="checkout_outer">
            <h2>Step 2 : <span>Account &amp; Billing Details</span></h2>
            <div class="checkout_content billing_account clearfix">
                <form action="#" method="#">
                    <table>
                        <tr>
                            <td>
                                <strong>First Name <em>*</em></strong>
                            </td>
                            <td class="input">
                                <input type="text" name="#" value="" placeholder="John">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Last Name <em>*</em></strong>
                            </td>
                            <td class="input">
                                <input type="text" name="#" value="" placeholder="Doe">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>First Address <em>*</em></strong>
                            </td>
                            <td class="input">
                                <input type="text" name="#" value="" placeholder="2st, abd-elhahim, Shoubra, Cairo">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Secondry Address</strong>
                            </td>
                            <td class="input">
                                <input type="text" name="#" value="" placeholder="2st, abd-elhahim, Shoubra, Cairo">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>City <em>*</em></strong>
                            </td>
                            <td class="input">
                                <input type="text" name="#" value="" placeholder="Cario">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Post Code <em>*</em></strong>
                            </td>
                            <td class="input">
                                <input type="text" name="#" value="" placeholder="12345">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Contury <em>*</em></strong>
                            </td>
                            <td class="input">
                                <select class="default" tabindex="1">
                                    <option value="">Your Country</option>
                                    <option value="sometext1">sometext1</option>
                                    <option value="sometext2">sometext2</option>
                                    <option value="sometext3">sometext3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Region/Stats <em>*</em></strong>
                            </td>
                            <td class="input">
                                <select name="state" class="default" tabindex="1">
                                    <option value="">Your Regoin</option>
                                    <option value="text1">text1</option>
                                    <option value="text2">text2</option>
                                    <option value="text3">text3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="red_btn" type="submit" name="submit" value="Contiune"></td>
                        </tr>
                    </table>
                </form>
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->

        <div class="checkout_outer">
            <h2>Step 3 : <span>Delivery Details</span></h2>
            <div class="checkout_content clearfix">
                <!--content here-->
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->

        <div class="checkout_outer">
            <h2>Step 4 : <span>Delivery Method</span></h2>
            <div class="checkout_content clearfix">
                <!--content here-->
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->

        <div class="checkout_outer">
            <h2>Step 5 : <span>Payment Method</span></h2>
            <div class="checkout_content clearfix">
                <!--content here-->
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->

        <div class="checkout_outer">
            <h2>Step 6 : <span>Order Notes</span></h2>
            <div class="checkout_content clearfix">
                <!--content here-->
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->

        <div class="checkout_outer">
            <h2>Step 7 : <span>Confirm Order</span></h2>
            <div class="checkout_content clearfix">
                <!--content here-->
            </div><!--end checkout_content-->
        </div><!--end checkout_outer-->


    </div><!--end sixteen-->
</div><!--end container-->
<!-- end the main content area -->
