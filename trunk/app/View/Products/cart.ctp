
<div class="container">
    <div class="sixteen columns">

        <div id="pageName">
            <div class="name_tag">
                <p>
                    You're Here :: <a href="#">home</a> :: My Shopping Cart
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
        <h3>My Shopping Cart</h3>
    </div><!--end box_head -->
    <?php  if(isset($wishlist)){?>
    <table class="cart_table">
        <thead>
        <tr>
            <th class="first_td"><h4>The Product</h4></th>
            <th><h4>Quantity</h4></th>
            <th><h4>Uint Price</h4></th>
            <th><h4>Total Price</h4></th>
            <th><h4>Delete</h4></th>
        </tr>
        <?php
        foreach($wishlist as $wishes){?>
        <tr>
            <td class="first_td">
                <div class="clearfix">
                    <?php echo $this->Html->image($wishes['Products']['picture'],array('alt'=>'product image'));?>
                    <span>
									<strong><?php echo $this->Html->link(h($wishes['Products']['title']),
                                        array('controller'=>'products','action'=>'view',$wishes['Products']['id']));?></strong><br>
									<ul>
                                        <li><a href="javascript:void(0);">text</a></li>
                                        <li><a href="javascript:void(0);">text</a></li>
                                        <li><a href="javascript:void(0);">text</a></li>
                                        <li><a href="javascript:void(0);">text</a></li>
                                        <li><a href="javascript:void(0);">text</a></li>
                                    </ul>
									Weight: <?php __($wishes['Products']['weight'].' '.$wishes['Products']['unit'])?><br>
								</span>
                </div>
            </td>
            <td class="quantity">
                <form>
                    <label>
                        <input class="gray_btn" type="button" id="min_qty" class="qty" value="-">
                    </label>
                    <label>
                        <input type="text" maxlength="12" name="" id="" class="" value="1" size="2">
                    </label>
                    <label>
                        <input class="gray_btn" type="button" id="max_qty" class="qty" value="+">
                    </label>
                </form>
                <a href="#"><span>Edit Quantity</span></a>
            </td>
            <td class="total_price">
                <h5><?php __('$'.$wishes['Products']['price'])?></h5>
            </td>
            <td>
                <p>In Stock</p>
            </td>
            <td>
                <a class="delete_item" href="#">delete</a>
            </td>
        </tr>
            <?php }?>
        </thead>
        <tbody>

        </tbody>
    </table>



</div><!--end sixteen-->


<div class="ten columns">
    <div class="cart_tabs clearfix">

        <ul class="cart_tabs_nav">
            <li><a class="active_tab" href="#estimate">Estimate Shipping&amp;Taxes</a></li>
            <li><a href="#discount_code">Applying Discount Code</a></li>
            <li><a href="#gift_voucher">Use Gift Voucher</a></li>
        </ul><!--end cart_tabs_nav-->

        <div class="cart_tabs_content">
            <div id="estimate" class="tab">
                <p>Enter your destination to get a shipping estimate...</p>
                <form method="#" action="#">
                    <label class="clearfix">
                        <strong>You Country:</strong>
                        <select class="default" tabindex="1">
                            <option value="">-- Choise your Country --</option>
                            <option value="sometext1">sometext1</option>
                            <option value="sometext2">sometext2</option>
                            <option value="sometext3">sometext3</option>
                        </select>
                    </label>

                    <label class="clearfix">
                        <strong>State/Regoin:</strong>
                        <select name="state" class="default" tabindex="1">
                            <option value="">-- Choise your Regoin --</option>
                            <option value="text1">text1</option>
                            <option value="text2">text2</option>
                            <option value="text3">text3</option>
                        </select>
                    </label>

                    <label for="post_code" class="clearfix">
                        <strong>Post Code:</strong>
                        <input type="text" name="post_code" value="" placeholder="12345">
                    </label>

                    <div class="submit">
                        <input class="gray_btn" type="submit" name="submit" value="Get Quotes">
                    </div>
                </form>
            </div>


            <div id="discount_code" class="tab">
                <p>Enter your Discount Code Below...</p>
                <form method="#" action="#">
                    <label for="country" class="clearfix">
                        <strong>Discount Code:</strong>
                        <input type="text" name="post_code" value="" placeholder="Enter Code">
                    </label>

                    <div class="submit">
                        <input class="gray_btn" type="submit" name="submit" value="Apply Coupon">
                    </div>
                </form>
            </div>

            <div id="gift_voucher" class="tab">
                <p>Enter your gift voucher code Below...</p>
                <form method="#" action="#">
                    <label for="country" class="clearfix">
                        <strong>voucher code:</strong>
                        <input type="text" name="post_code" value="" placeholder="Enter Code">
                    </label>

                    <div class="submit">
                        <input class="gray_btn" type="submit" name="submit" value="Apply Voucher">
                    </div>
                </form>
            </div>
        </div><!--end cart_tabs_content-->

    </div><!--end cart_tabs-->
</div><!--end ten-->



<div class="six columns">

    <table class="receipt">
        <tbody>
        <tr>
            <td>Sub Total</td>
            <td>$600.00</td>
        </tr>
        <tr>
            <td>Pricing Sharge</td>
            <td>$15.00</td>
        </tr>
        <tr>
            <td>Promotion Discount</td>
            <td>0</td>
        </tr>
        <tr>
            <td>AVT</td>
            <td>$12.00</td>
        </tr>

        <tr>
            <td style="font-weight:600;font-size:16px;">TOTAL</td>
            <td style="font-weight:600;font-size:16px;">$920.00</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td class="last_td">
                <a class="gray_btn" href="#">Continue Shopping</a>
            </td>
            <td class="last_td">
                <a class="red_btn" href="#">Checkout</a>
            </td>
        </tr>
        </tfoot>


    </table>

</div><!--end six -->

    <?php } else {?>
    <div class="box_head" id="errorList">
        <h3 >Your List is empty</h3>
    </div><!--end box_head -->
    <?php }?>
</div><!--end container-->
<!-- end the main content area -->
