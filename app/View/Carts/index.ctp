<div class="carts index">
	<h2><?php echo __('Carts'); ?></h2>
	<table cellpadding="0" cellspacing="0">

	<?php
	foreach ($carts as $cart): ?>
	<tr>
		<td><?php echo h($cart['Cart']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cart['User']['username'], array('controller' => 'users', 'action' => 'view', $cart['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cart['Product']['title'], array('controller' => 'products', 'action' => 'view', $cart['Product']['id'])); ?>
		</td>
		<td><?php echo h($cart['Cart']['wished']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cart['Cart']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cart['Cart']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cart['Cart']['id']), null, __('Are you sure you want to delete # %s?', $cart['Cart']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cart'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
