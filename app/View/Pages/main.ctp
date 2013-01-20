<?php
    echo $this->Js->buffer($this->Js->request(array('controller'=>'pages','cv'), array(
        'before'=>$this->Js->get('#loading')->effect('fadeIn').$this->Js->get('#viewer')->effect('fadeOut'),
        'success'=>$this->Js->get('#viewer')->effect('fadeIn').$this->Js->get('#loading')->effect('fadeOut'),
        'update'=>'#viewer'
    )),true);
?>

<div class="posts form">
    <div id="loading" style="display: none;" class="message">Loading....</div>

    <div id="viewer"  style="display: none">


    </div>
</div>
<div class="actions">
    <h3><?php echo __('Pages'); ?></h3>
    <ul>

        <li><?php echo $this->Js->link('CV', array('controller'=>'pages','cv'), array(
            'before'=>$this->Js->get('#loading')->effect('fadeIn').$this->Js->get('#viewer')->effect('fadeOut'),
            'success'=>$this->Js->get('#viewer')->effect('fadeIn').$this->Js->get('#loading')->effect('fadeOut'),
            'update'=>'#viewer'
        )); ?></li>
    </ul>
</div>