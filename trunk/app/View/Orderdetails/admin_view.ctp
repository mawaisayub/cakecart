<div class="orderdetails view">
<h2><?php  echo __('Orderdetail'); ?></h2>
	<dl>
		<dt><?php echo __('Order Id'); ?></dt>
		<dd>
			<?php echo h($orderdetail['Orderdetail']['order_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderdetail['Product']['title'], array('controller' => 'products', 'action' => 'view', $orderdetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderdetail['Orderdetail']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orderdetail'), array('action' => 'edit', $orderdetail['Orderdetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orderdetail'), array('action' => 'delete', $orderdetail['Orderdetail']['id']), null, __('Are you sure you want to delete # %s?', $orderdetail['Orderdetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderdetails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderdetail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
