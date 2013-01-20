<script>
    $(document).ready(function(){
        backgroundChange('menu_bg');
    });
</script>
        <div class="eighteen columns">

    <div class="admin_dashboard">
        <h2>Your DashBoard</h2>
        <ul>
            <li><?php echo $this->Html->link(h('Dashboard'),array('controller' => 'users', 'action' => 'admin_index'));?></li>
            <li ><?php echo $this->Html->link(h('All Users'),array('controller' => 'users', 'action' => 'index','admin'=>false));?></li>
            <li ><?php echo $this->Html->link(h('All Products'),array('controller' => 'products', 'action' => 'index','admin'=>true));?></li>
            <li><?php echo $this->Html->link(h('All Orders'),array('controller' => 'orders', 'action' => 'index','admin'=>true));?></li>
            <li><?php echo $this->Html->link(h('About Site'),array('controller' => 'users', 'action' => 'about','admin'=>true));?></li>
            <li><?php echo $this->Html->link(h('LogOut'),array('controller' => 'users', 'action' => 'logout','admin'=>true));?></li>
        </ul>

    </div>
    </div>

