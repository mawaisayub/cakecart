
<div class="container">
    <div class="sixteen columns">

        <div id="pageName">
            <div class="name_tag">
                <p>
                    You're Here :: <a href="#">home</a> :: Search Results
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
            <h3>Products List</h3>
        </div><!--end box_head -->
        <?php  if(sizeof($products)>0){?>
        <table class="cart_table">
            <thead>
            <tr>
                <th class="first_td"><h4>The Product</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>AVAILABILITY</h4></th>
                <th><h4>Action</h4></th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach($products as $product){?>
                <tr>
                    <td class="first_td">
                        <div class="clearfix">

                            <?php echo $this->Html->image($product['Product']['picture'],array('alt'=>'product image','class'=>'pro'));?>
                            <span>
									<strong><?php echo $this->Html->link(h($product['Product']['title']),
                                        array('controller'=>'products','action'=>'view',$product['Product']['id']));?></strong><br>
                                <ul>
                                    <li><a href="javascript:void(0);">text</a></li>
                                    <li><a href="javascript:void(0);">text</a></li>
                                    <li><a href="javascript:void(0);">text</a></li>
                                    <li><a href="javascript:void(0);">text</a></li>
                                </ul>
									Weight: <?php echo __($product['Product']['weight'].' '.$product['Product']['unit'])?><br>
								</span>
                        </div>
                    </td>
                    <td>
                        <h5><?php echo h('$'.$product['Product']['price'])?></h5>
                    </td>
                    <td>
                        <p>In Stock</p>
                    </td>
                    <td>
                        <?php echo $this->Form->postLink(__('Move to Cart'), array('controller'=>'carts','action' => 'add', $product['Product']['id'], false), array('class'=>'add_item')); ?>
                        <?php echo $this->Form->postLink(__('Add to Wishlist'), array('controller'=>'carts','action' => 'add', $product['Product']['id'], true), array('class'=>'addWish')); ?>
                    </td>
                </tr>
                    <?php }?>
            </tbody>
        </table><!--end cart_table-->
        <?php } else {?>
        <div class="box_head" id="errorList">
            <h3 >Your List is empty</h3>
        </div><!--end box_head -->
        <?php }?>

    </div><!--end sixteen-->

</div>