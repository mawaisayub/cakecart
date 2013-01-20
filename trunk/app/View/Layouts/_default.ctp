<?php

echo $this->Js->buffer($this->Js->request(array('controller'=>'users','action'=>'back'), array(
    'before'=>$this->Js->get('#loading')->effect('fadeIn'),
    'success'=>$this->Js->get('#con')->effect('fadeIn').$this->Js->get('#loading')->effect('fadeOut'),
    'update'=>'#con'
)),true);

/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
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
		echo $this->Html->meta('icon');


    echo $this->Html->script('main');
    echo $this->Html->css('main');

    echo $this->Html->script('jquery');

    echo $this->Html->script('jqueryui');
    echo $this->Html->script('application');
    echo $this->Html->css('search');
   // echo $this->Html->css('home');
    echo $this->Html->css('responsive');
    //echo $this->Html->css('dropkick');
    echo $this->Html->css('autocomplete');
    echo $this->Html->css('admin');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body id="con">
<?php  echo $this->Js->writeBuffer();?>
<!--<div id="loading" style="display: none;" class="message">Loading Comments</div>-->
<header>
    <div id="topHeader">
        <div class="container">
            <div class="sixteen columns">

                <ul id="topNav">
                    <li><?php echo $this->Html->link(h('Home'),array('controller' => 'products', 'action' => 'index','admin'=>false));?></li>
                    <li><?php echo $this->Html->link(h('Admin Panel'),array('controller' => 'users', 'action' => 'index','admin'=>true));?></li>
                    <li><?php echo $this->Html->link(h('User Login'),array('controller' => 'users', 'action' => 'login','admin'=>false,'1'));?></li>
                    <li><?php echo $this->Html->link(h('Wish List'),array('controller' => 'products', 'action' => 'wishlist','admin'=>false));?></a></li>
                    <li><?php echo $this->Html->link(h('My Account'),array('controller' => 'users', 'action' => 'acount','admin'=>false));?></li>
                    <li><?php echo $this->Html->link(h('Shopping cart'),array('controller' => 'products', 'action' => 'cart','admin'=>false));?></li>
                    <li><?php echo $this->Html->link(h('Checkout'),array('controller' => 'products', 'action' => 'checkout','admin'=>false));?></a></li>
                    <li><?php echo $this->Html->link(h('Logout'),array('controller' => 'users', 'action' => 'logout','admin'=>false));?></a></li>
                </ul>
                <?php
                if(isset($authrized))
                    if($authrized){?>
                        <h3>Welcome : <?php echo $this->Html->link(__($name['username']),array('controller'=>'users','action'=>'view',$name['id']));?></h3>
                        <?php }?>
            </div><!--end sixteen-->
        </div><!--end container-->
    </div><!--end topHeader-->
    <div id="middleHeader">
        <div class="container">

                <div id="logo">
                    <h1><a href="#">logo</a></h1>
                </div>

            <div>
                <!--end logo-->

                <?php  echo $this->Form->create(null, array('id' => 'search','type'=>'get','url' => array('controller'=>'products','action'=>'search')));?>
                <label>
                    <?php echo $this->Form->input(' ',array('id'=>'searcher','name'=>'q','placeholder' => 'Search..','size' => '40'));?>
                </label>
                <?php echo $this->Form->end();?><!--end form-->

            </div><!--end sixteen-->
        </div><!--end container-->
    </div><!--end middleHeader-->
    </header>
	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
