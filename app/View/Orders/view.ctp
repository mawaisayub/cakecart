<div class="orders view">
<h2><?php  echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['username'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipto'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipprovince'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipprovince']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipcountry'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipcountry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shippostalcode'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shippostalcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderdetails'), array('controller' => 'orderdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderdetail'), array('controller' => 'orderdetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orderdetails'); ?></h3>
	<?php if (!empty($order['Orderdetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($order['Orderdetail'] as $orderdetail): ?>
		<tr>
			<td><?php echo $orderdetail['order_id']; ?></td>
			<td><?php echo $orderdetail['product_id']; ?></td>
			<td><?php echo $orderdetail['id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orderdetails', 'action' => 'view', $orderdetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orderdetails', 'action' => 'edit', $orderdetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orderdetails', 'action' => 'delete', $orderdetail['id']), null, __('Are you sure you want to delete # %s?', $orderdetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Orderdetail'), array('controller' => 'orderdetails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
