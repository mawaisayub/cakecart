<div id="mainNav" class="clearfix">
    <nav>
        <ul>
<li class="clearfix">
							<div class="slide_img">
								<?php echo $this->Html->image( h($product['Product']['picture']) );?>
							</div>
							<div class="flex-caption">
								<h5><?php echo __('Now its available');?><br><span><?php echo h($product['Product']['title']); ?></span></h5>
                                <p><?php echo __('Weight');?></p></br>
                                <p><?php echo h($product['Product']['weight']); ?></p>
								<p>
									<?php echo h($product['Product']['detail']); ?>
								</p>
								<a href="#"><span><?php echo __('View Item');?></span><span class="shadow"><?php echo h($product['Product']['price']); ?></span></a>
							</div>
</li>
