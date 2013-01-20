<div class="eight columns">
			<div class="latest">
				
				<div class="box_head">
					<h3>Featured Items</h3>
					<div class="pagers center">
						<a class="prev latest_prev" href="#prev">Prev</a>
						<a class="nxt latest_nxt" href="#nxt">Next</a>
					</div>
				</div><!--end box_head -->

				<div class="cycle-slideshow" 
		        data-cycle-fx="scrollHorz"
		        data-cycle-timeout=0
		        data-cycle-slides="> ul"
		        data-cycle-prev="div.pagers a.latest_prev"
		        data-cycle-next="div.pagers a.latest_nxt"
		        >

					<ul class="product_show">
						<li>
							<div class="img">
								<div class="hover_over">
									<a class="link" href="#">link</a>
									<a class="cart" href="#">cart</a>
								</div>
								<a href="#">
                                    <?php echo $this->Html->image( h($product['Product']['picture']) ,array('alt'=>'product'));?>
								</a>
							</div>
							<h6><a href="#"><?php echo h($product['Product']['title']); ?></a></h6>
							<h5><?php echo '$'.h($product['Product']['price']); ?></h5>
						</li>

                        </ul>
                    </div>
                </div>