<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($product['Product']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Subcategory']['title'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($product['Product']['review']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo $product['Product']['detail']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo $this->Html->image($product['Product']['picture'],array('alt'=>$product['Product']['picture'])); ?>
            <?php echo __('Product picture on your right move mouse over it to zoom');?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['unit']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h2><?php echo __('Actions'); ?></h2>
	<ul>
<?php if($authrized){?>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'admin_edit', $product['Product']['id']),array('class'=>'red_btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']),array('class'=>'red_btn'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index'),array('class'=>'red_btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add'),array('class'=>'red_btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index'),array('class'=>'red_btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add'),array('class'=>'red_btn')); ?> </li>
<?php }?>
<li><?php echo $this->Html->link('Add to Wishlist', array('controller'=>'carts','action'=>'add',$product['Product']['id'],true), array(
                            'class'=>'link'));
                            ?>
                           </li>
<li> <?php echo $this->Html->link(h('_Add to Cart_'), array('controller'=>'carts','action'=>'add',$product['Product']['id'],false), array(
                            'class'=>'cart'));
                            ?></li>
	</ul>
</div>
