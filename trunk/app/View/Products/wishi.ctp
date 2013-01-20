<?php if(isset($wishlist))
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