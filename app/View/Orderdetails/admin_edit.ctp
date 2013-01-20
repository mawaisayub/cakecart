<div class="orderdetails form">
<?php echo $this->Form->create('Orderdetail'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Orderdetail'); ?></legend>
	<?php
		echo $this->Form->input('order_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Orderdetail.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Orderdetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orderdetails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
