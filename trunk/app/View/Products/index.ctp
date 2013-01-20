
<div class="container">
    <div class="sixteen columns">
        <div id="slide_outer">
        <div class="mainslide">

    <div class="pagers center">
        <a class="prev slide_prev" href="#prev">Prev</a>
        <a class="nxt slide_nxt" href="#nxt">Next</a>
    </div>

    <ul class="cycle-slideshow clearfix"
        data-cycle-fx="scrollHorz"
        data-cycle-timeout="2000"
        data-cycle-slides="> li"
        data-cycle-pause-on-hover="true"
        data-cycle-prev="div.pagers a.slide_prev"
        data-cycle-next="div.pagers a.slide_nxt"
        >
            <?php
                $i = 0;
                foreach($products as $prod){?>
<li class="clearfix">
    <div class="slide_img">
        <div id="imgWrapper" >
            <div id="imgContainer"  >
        <?php echo $this->Html->image( $prod['Product']['picture'] ,array('id'=>'mainImg'));?>
                </div>
            </div>
    </div>
    <div class="flex-caption">
        <h5><?php echo __('Now its available');?><br><span><?php echo h($prod['Product']['title']); ?></span></h5>
        <p><?php echo __('Weight:  ').h($prod['Product']['weight']);?></p>
        <p>
            <?php echo __('Review:  ').$prod['Product']['review']; ?>
        </p>
   <span><?php echo $this->Html->link(__('   View:  '.'$'.h($prod['Product']['price']).'   '), array('action' => 'view', $prod['Product']['id'])); ?></span>
    <?php
                    for($i=0;$i<5;$i++){
                        echo '</br>';
                    }?>

    </div>
</li>
    <?php
                if($i == 2)
                    break;
                }
            ?>
    </ul>
        </div>
            <div class="shadow_left"></div>
            <div class="shadow_right"></div>
        </div>

    </div>
</div>

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
                <?php foreach($products as $productsDisplay){?>
                <li>
                    <div class="img">
                        <div class="hover_over">
                            <?php echo $this->Html->link('Add to Wishlist', array('controller'=>'carts','action'=>'add',$productsDisplay['Product']['id'],true), array(
                            'class'=>'link'));
                            ?>
                            <?php echo $this->Html->link('Add to Cart', array('controller'=>'carts','action'=>'add',$productsDisplay['Product']['id'],false), array(
                            'class'=>'cart'));
                            ?>
                        </div>
                        <a href="#">

                            <?php
                            echo $this->Html->image( h($productsDisplay['Product']['picture']) ,array('alt'=>'product'));?>
                        </a>
                    </div>


                    <h6> <?php echo $this->Html->link(h($productsDisplay['Product']['title']), array('action' => 'view', $productsDisplay['Product']['id'])); ?></h6>

                    <h5><?php echo '$'.h($productsDisplay['Product']['price']); ?></h5>
                </li>

                    <?php }?>
            </ul>
        </div>
    </div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
        <div id='res'></div>
    </ul>
</div>
