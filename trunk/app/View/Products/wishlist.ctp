
<div class="container">
    <div class="sixteen columns">

        <div id="pageName">
            <div class="name_tag">
                <p>
                    You're Here :: <a href="#">home</a> :: My Wish List
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
            <h3>My Wish List</h3>
        </div><!--end box_head -->
        <?php  if(isset($wishlist)){?>
        <table class="cart_table">
            <thead>
            <tr>
                <th class="first_td"><h4>The Product</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>AVAILABILITY</h4></th>
                <th><h4>Action</h4></th>
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
                    <td>
                        <h5><?php __('$'.$wishes['Products']['price'])?></h5>
                    </td>
                    <td>
                        <p>In Stock</p>
                    </td>
                    <td>
                        <a class="add_item" href="#">cart</a>
                        <a class="delete_item" href="#">delete</a>
                    </td>
                </tr>
                    <?php }?>
            </thead>
            <tbody>

            </tbody>
        </table><!--end cart_table-->
    <?php } else {?>
    <div class="box_head" id="errorList">
        <h3 >Your List is empty</h3>
    </div><!--end box_head -->
    <?php }?>

    </div><!--end sixteen-->

</div>