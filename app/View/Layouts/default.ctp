<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://shopphp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://shopfoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://shopfoundation.org)
 * @link          http://shopphp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakeCart: Shop at your home.');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    
	
	<?php
		//echo $this->Html->meta('icon');
    //echo $this->Html->css('app');
        echo $this->Html->script('jquery');
        echo $this->Html->script('jqueryui');
		echo $this->Html->css('zcake.generic');
		echo $this->Html->css('responsive');
		echo $this->Html->css('dropkick');
        echo $this->Html->css('autocomplete.css');

		echo $this->Html->script('dropKick/jquery.dropkick-1.0.0');
		echo $this->Html->script('jquery.tweet');
		echo $this->Html->script('jquery.cycle2.min');
		echo $this->Html->script('jquery.cycle2.tile.min');
		echo $this->Html->script('jquery.fancybox-1.3.4.pack');
		echo $this->Html->script('jquery.etalage.min');
		//echo $this->Html->script('jquery.cookie');
		echo $this->Html->script('main');
        echo $this->Html->script('application');

		echo $this->Html->script('jcarousellite_1.0.1.min');
        echo $this->Html->css('jquery.fancybox-1.3.4');
		echo $this->Html->css('user_log');
        echo $this->Html->css('wish_list');
    echo $this->Html->css('account');
    echo $this->Html->css('cart');
    echo $this->Html->css('contact');
    echo $this->Html->css('checkout');
    echo $this->Html->css('main');
echo $this->Html->css('about');


		echo $this->Html->css('search');
		echo $this->Html->css('home');
		echo $this->fetch('meta');
    echo $this->fetch('script');
		echo $this->fetch('css');

	?>
</head>
<body>
<header>
        <div id="topHeader">
			<div class="container">
				<div class="sixteen columns">
					<ul id="topNav">
                        <?php
                        if(isset($authrized))
                            if($authrized){?>
                                <li><?php echo $this->Html->link(h('Admin Panel'),array('controller' => 'users', 'action' => 'index','admin'=>true));?></li>
	                        <?php }
                            if(!isset($logined) || !$logined){?>
                                <li><?php echo $this->Html->link(h('User Login'),array('controller' => 'users', 'action' => 'login','admin'=>false,'1'));?></li>
                            <?php } ?>
						<li><?php echo $this->Html->link(h('Wish List'),array('controller' => 'carts', 'action' => 'index',true));?></a></li>
						<li><?php echo $this->Html->link(h('My Account'),array('controller' => 'users', 'action' => 'acount'));?></li>
						<li><?php echo $this->Html->link(h('Shopping cart'),array('controller' => 'carts', 'action' => 'index',false));?></li>
                        <li><?php echo $this->Html->link(h('Checkout'),array('controller' => 'products', 'action' => 'checkout'));?></a></li>
                        <?php
                        if(isset($logined))
                            if($logined){ ?>
                                <li><?php echo $this->Html->link(h('Logout'),array('controller' => 'users', 'action' => 'logout'));?></a></li>
                            <?php } ?>
                    </ul>
                    <?php
                    if(isset($logined))
                    if($logined){?>
                    <h3>Welcome : <?php echo $this->Html->link(__($name['username']),array('controller'=>'users','action'=>'view',$name['id']));?></h3>
                    <?php }?>

				</div><!--end sixteen-->
			</div><!--end container-->
		</div><!--end topHeader-->
		<div id="middleHeader">
			<div class="container">
				<div class="sixteen columns">
					<div id="logo">
						<h1><a href="index.html">logo</a></h1>
					</div><!--end logo-->
                    
                  <?php  echo $this->Form->create(null, array('id' => 'search','type'=>'get','url' => array('controller'=>'products','action'=>'search')));?>
                     <label>
                     <?php echo $this->Form->input(' ',array('id'=>'searcher','name'=>'q','placeholder' => 'Search..','size' => '40'));?>
                     </label>
                     <?php echo $this->Form->end();?><!--end form-->

				</div><!--end sixteen-->
			</div><!--end container-->
		</div><!--end middleHeader-->
    <div class="container">
        <div class="sixteen columns">
				<div id="mainNav" class="clearfix">
					<nav>
						<ul>
							<li>
                                <?php echo $this->Html->link(h('Home'),array('controller'=>'products','action'=>'index'),array('class'=>'laptops'));?>
							</li>
                            <li><?php echo $this->Html->link(h('Categories'),array('controller'=>'categories','action'=>'index'),array('class'=>'hasdropmenu'));?>
                            <ul class="submenu">
                            <?php
                            foreach($allcategories as $category)
                            {
                               ?>
                                <li>
                                    <?php echo $this->Html->link($category['Category']['title'],array('controller'=>'categories','action'=>'index'),array('class'=>'submenu'));

                               ?>
                                <ul class="submenu" id="subsubmenu" style="display: none">
                                    <?php
                                    foreach($category['Subcategory'] as $sub)
                                {?>
                                    <li>
                                        <?php echo $this->Html->link($sub['title'],array('controller'=>'subcategories','action'=>'index'));?>
                                    </li>



                              <?php  }?>

                                </ul>



                                </li>

                                <?php    }?>
                            </ul>
                            </li>


						</ul>

					</nav><!--end nav-->
					
					<div id="cart">
						<a class="cart_dropdown" href="javascript:void(0);"><?php echo $this->Html->image('../img/cart_icon.png',array('alt'=>'product image'));?> <?php
                            $totals=0;
                            $count=0;
                            foreach($cart_dropdown as $mywish){
                                $totals+=$mywish['Product']['price'];
                                $count++;

                            }
                            echo 'Items: '.$count.'  $'.$totals;
                            ?>
                        </a>
						<div class="cart_content">
							<b class="cart_content_arrow"></b>
							<ul>

                                <?php
                                if(isset($cart_dropdown))
                                {

                                if(sizeof($cart_dropdown)>0){?>
                                <?php  foreach($cart_dropdown as $wishes){
                                ?>
								<li class="clearfix">
									<div class="cart_product_name">
                                        <?php echo $this->Html->image($wishes['Product']['picture'],array('alt'=>'product image'));?>
										<span>
											<strong><?php echo $this->Html->link(h($wishes['Product']['title']),
                                                array('controller'=>'products','action'=>'view',$wishes['Product']['id']));?></strong><br>
											Weight: <?php __($wishes['Product']['weight'].' '.$wishes['Product']['unit'])?><br>
								</span>
									</div>
									<div class="cart_product_price">
										<span>
											<strong><?php __('$'.$wishes['Product']['price'])?></strong><br>
                                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wishes['Cart']['id']),array('class'=>'remove_item'), __('Are you sure you want to delete # %s?', $wishes['Cart']['id'])); ?>
										</span>
									</div>
									<div class="clear"></div>
								</li>
                                <?php }?>
                                <div class="dropdown_cart_info clearfix">
                                    <div class="cart_buttons">
                                            <?php echo $this->Html->link(h('View Cart'),array('controller' => 'carts', 'action' => 'index',false),array('class'=>'gray_btn'));?></br>
                                            <?php echo $this->Html->link(h('Checkout'),array('controller' => 'orders', 'action' => 'checkout','admin'=>false),array('class'=>'gray_btn'));?>
                                    </div><!--end cart buttons-->

                                    <div class="cart_total_price">
									<span>
										<?php $total=0;
                                foreach($cart_dropdown as $mywish){
                                    $total+=$mywish['Product']['price'];
                                
                                }?>
										<strong>TOTAL : <?php echo $total?></strong>
									</span>
                                    </div><!--end cart buttons-->
                                </div><!--end dropdown_cart_info-->
<?php } else {?>
    <li class='dropdowncart'>
        <h3 >Your List is empty</h3>
    </li>
                                <?php }
                        }
            else{?>
                <li class='dropdowncart'>
                    <h3 >Please <?php echo $this->Html->link(h('Login'),array('controller' => 'users', 'action' => 'login','admin'=>false,'1'),array('id'=>'me'));?> to see this feature</h3>
                </li>
          <?php  }?>
							</ul><!--end ul-->



						</div><!--end cart_content-->
					</div><!--end cart-->

				</div><!--end main-->
			</div><!--end sixteen-->
        </div>
            </header>
	<!--end header-->

            <div id="container">
		<div id="header">
			<h1>&nbsp;</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
            <div class="container">
			<?php echo $this->fetch('content'); ?>
            </div>
		</div>
        <div id="sideWidget">
		<div class="bgPatterns">
			<h4>Wooden</h4>
			<a href="#" style="background:#fff">white</a>
            <a onclick="backgroundChange('light_back');" style="background:url('/shop/img/light_back.png') repeat">light_back</a>
            <a onclick="backgroundChange('blackwood');" style="background:url('/shop/img/blackwood.png') repeat">blackwood</a>

            <br><br>

			<h4>Body Patterns</h4>
			<a onclick="backgroundChange('white_carbon');" style="background:url('/shop/img/white_carbon.png') repeat">white_carbon</a>

			<a onclick="backgroundChange('circles');" style="background:url('/shop/img/circles.png') repeat;">circles</a>

			<a onclick="backgroundChange('cubes');" style="background:url('/shop/img/cubes.png') repeat;">cubes</a>

			<a onclick="backgroundChange('exclusive_paper');" style="background:url('/shop/exclusive_paper.png') repeat;">exclusive_paper</a>

			<a onclick="backgroundChange('gplaypattern');" style="background:url('/shop/img/gplaypattern.png') repeat">gplaypattern</a>

			<a onclick="backgroundChange('large_leather');" style="background:url(/shop/img/large_leather.png)">large_leather</a>

			<a onclick="backgroundChange('lghtmesh');" style="background:url(/shop/img/lghtmesh.png) repeat;">lghtmesh</a>

			<a onclick="backgroundChange('light_wool');" style="background:url(/shop/img/light_wool.png) repeat;">light_wool</a>

			<a onclick="backgroundChange('lil_fiber');" style="background:url('/shop/img/lil_fiber.png') repeat;">lil_fiber</a>

			<a onclick="backgroundChange('snow');" style="background:url('/shop/img/snow.png') repeat;">snow</a>

			<a onclick="backgroundChange('soft_wallpaper');" style="background:url('/shop/img/soft_wallpaper.png') repeat;">soft_wallpaper</a>

			<a onclick="backgroundChange('weave');" style="background:url('/shop/img/weave.png') repeat;">weave</a>

			<a onclick="backgroundChange('white_brick_wall');" style="background:url(/shop/img/extra_clean_paper.png) repeat">white_brick_wall</a>

			<a onclick="backgroundChange('white_paperboard');" style="background:url('/shop/img/white_paperboard.png') repeat;">white_paperboard</a>

			<a onclick="backgroundChange('white_tiles');" style="background:url('/shop/img/white_tiles.png') repeat;">white_tiles</a>

			<a onclick="backgroundChange('wall4');" style="background:url('/shop/img/wall4.png') repeat;">wall4</a>

			<a onclick="backgroundChange('furley_bg');" style="background:url('/shop/img/furley_bg.png') repeat;">furley_bg</a>

			<a onclick="backgroundChange('extra_clean_paper');" style="background:url(/shop/img/extra_clean_paper.png) repeat;">extra_clean_paper</a>

		</div>
		<a class="WidgetLink" onclick="widgetClick();">+</a>
	</div>
                <?php echo $this->Html->script('jquery.nicescroll');
                echo $this->fetch('script');?>
	<!-- End Sidebar Widget-->
	</div>


<!-- start the footer area-->
<footer>
    <div class="container">
        <div class="three columns">
            <div id="info">
                <h3>Informations</h3>
                <ul>
                    <li><?php echo $this->Html->link(h('About Us'),array('controller' => 'users', 'action' => 'about'));?></li>
                    <li><a href="#">Delivery Informations</a></li>
                    <li><a href="#">privecy Policey</a></li>
                    <li><a href="#">Terms &amp; Condations</a></li>
                </ul>
            </div>
        </div><!--end three-->

        <div class="three columns">
            <div id="customer_serices">
                <h3>Customer Servies</h3>
                <ul>
                    <li><?php echo $this->Html->link(h('Contact Us'),array('controller'=>'users','action'=>'contact'));?></li>
                </ul>
            </div>
        </div><!--end three-->

        <div class="three columns">
            <div id="my_account">
                <h3>My Account</h3>
                <ul>
                    <li><?php echo $this->Html->link(h('Login Area'),array('controller' => 'users', 'action' => 'login','1'));?></li>
                    <li><a href="#">Order History</a></li>
                    <li><?php echo $this->Html->link(h('Wish List'),array('controller' => 'products', 'action' => 'wishlist'));?></a></li>
                </ul>
            </div>
        </div><!--end three-->

        <div class="four columns">
            <div id="delivery" class="clearfix">
                <h3>Delivery Info</h3>
                <ul>
                    <li class="f_call">Call Us On: 555-555-555</li>
                    <li class="f_mail">example@example.com</li>
                    <li class="f_mail">cakecart@cakecart.com</li>
                </ul>
            </div>
        </div><!--end four-->

    </div><!--end container-->


    <div class="tweets">
    </div><!--end tweets-->


    <div class="container">
        <div class="sixteen">
            <p class="copyright">
                Copyright 2012 for <a href="#">CakeCart.com</a><br>
                Powered By: <a href="#">Plaxma Tech.</a>
            </p>
            <ul class="socials">
                <li><a class="twitter" href="#sfds">twitter</a></li>
                <li><a class="facebook" href="#">face</a></li>
                <li><a class="googlep" href="#">google+</a></li>
                <li><a class="vimeo" href="#">vimeo</a></li>
                <li><a class="skype" href="#">skype</a></li>
                <li><a class="linked" href="#">linked</a></li>
            </ul>
        </div><!--end sixteen-->
    </div><!--end container-->
</footer>
<!--end the footer area -->




<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
