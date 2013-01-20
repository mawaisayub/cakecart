<div class="container">
    <div class="sixteen columns">

        <div id="pageName">
            <div class="name_tag">
                <p>
                    You're Here :: Home :: Login Or Create a New Account
                </p>
                <div class="shapLeft"></div>
                <div class="shapRight"></div>
            </div>
        </div><!--end pageName-->

    </div>
</div><!-- container -->



<!-- strat the main content area -->

<div class="container">

<div id="user_log" class="clearfix">

<div class="nine columns">
    <div class="register">
        <div class="box_head">
            <h3>Create Account</h3>
        </div><!--end box_head -->

        <h6>Already have account, Login on right side.</h6>

        <form>
            <ol>
                <li class="row clearfix">
                    <label class="input_tag" for="firstName">First Name <em>*</em></label>
                    <div class="inputOuter">
                        <input id="firstName" type="text" name="" value="" placeholder="John">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="secondName">Second Name <em>*</em></label>
                    <div class="inputOuter">
                        <input id="secondName" type="text" name="" value="" placeholder="Smith">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="email">Your E-Mail <em>*</em></label>
                    <div class="inputOuter">
                        <input id="email" type="text" name="" value="" placeholder="example@example.com">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="tele">Telephone <em>*</em></label>
                    <div class="inputOuter">
                        <input id="tele" type="text" name="" value="" placeholder="0126598745 or 555-987-456">
                    </div>
                </li>
            </ol>

            <ol>
                <li class="row clearfix">
                    <label class="input_tag" for="company">company</label>
                    <div class="inputOuter">
                        <input id="company" type="text" name="" value="" placeholder="Optional">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="companyId">company ID</label>
                    <div class="inputOuter">
                        <input id="companyId" type="text" name="" value="" placeholder="Optional">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="firstAddress">First Address <em>*</em></label>
                    <div class="inputOuter">
                        <input id="firstAddress" type="text" name="" value="" placeholder="2st, abd-elhahim, Shoubra, Cairo">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="secondAddress">second Address</label>
                    <div class="inputOuter">
                        <input id="secondAddress" type="text" name="" value="" placeholder="Optional">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="city">city <em>*</em></label>
                    <div class="inputOuter">
                        <input id="city" type="text" name="" value="" placeholder="Cairo">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="postCode">Post Code <em>*</em></label>
                    <div class="inputOuter">
                        <input id="postCode" type="text" name="" value="" placeholder="12345">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="contury">contury <em>*</em></label>
                    <div class="inputOuter">
                        <select id="contury" name="contury" class="default" tabindex="1">
                            <option value="">-- Your Country --</option>
                            <option value="sometext1">sometext1</option>
                            <option value="sometext2">sometext2</option>
                            <option value="sometext3">sometext3</option>
                        </select>
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="region">Region/Stats <em>*</em></label>
                    <div class="inputOuter">
                        <select id="region" name="state" class="default" tabindex="1">
                            <option value="">-- Your Regoin --</option>
                            <option value="text1">text1</option>
                            <option value="text2">text2</option>
                            <option value="text3">text3</option>
                        </select>
                    </div>
                </li>
            </ol>

            <ol>
                <li class="row clearfix">
                    <label class="input_tag" for="chPass">Chosse Password <em>*</em></label>
                    <div class="inputOuter">
                        <input id="chPass" type="password" name="pass" value="" placeholder="********************">
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="coPass">Confirm Password <em>*</em></label>
                    <div class="inputOuter">
                        <input id="coPass" type="password" name="con_pass" value="" placeholder="********************">
                    </div>
                </li>
            </ol>

            <ol>
                <li class="row clearfix">
                    <label class="input_tag" for="checkbox1">Privacy Policy <em>*</em></label>
                    <div class="inputOuter">
                        <input type="checkbox" name="agress" value="1" id="checkbox1">
                        <label for="checkbox1">I Readed it</label><br><br>
                        <a href="#">Read and Know Privacy Policy</a>
                    </div>
                </li>
            </ol>

            <ol>
                <li class="row clearfix">
                    <label class="input_tag" for="firstName">&nbsp;</label>
                    <div class="inputOuter button">
                        <?php echo $this->Html->link(__('Create Acount'), array('action' => 'add'),array('class'=>'red_btn')); ?>
                    </div>
                </li>
            </ol>
        </form>

    </div>
</div><!--end nine-->



<div class="seven columns">
    <div class="login">
        <div class="box_head">
            <h3>Login</h3>
        </div><!--end box_head -->

        <h6>Don't have account, register on left side.</h6>
        <?php echo $this->Form->create('User',array('type'=>'get')); ?>
            <ol>
                <li class="row clearfix">
                    <label class="input_tag">E-Mail/Username <em>*</em></label>
                    <div class="inputOuter">
                        <?php
                echo $this->Form->input('username',array('id'=>'mail','placeholder'=>'example@example.com'));
                        ?>
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag">Password <em>*</em></label>
                    <div class="inputOuter">
                        <?php
                        echo $this->Form->input('password',array('id'=>'pass','placeholder'=>'**********','type'=>'password'));
                        ?>
                        <small><a href="#">Forget your Password?</a></small>
                    </div>
                </li>
                <li class="row clearfix">
                    <label class="input_tag" for="firstName">&nbsp;</label>
                    <div class="inputOuter button">
                        <?php
                        echo $this->Form->submit('Sign In',array('class'=>'red_btn'));
                        echo $this->Form->end(); ?>
                    </div>
                </li>
            </ol>
        </form>

    </div><!--end login-->


    <div class="account_list">

        <div class="box_head">
            <h3>Account</h3>
        </div><!--end box_head -->

        <ul>
            <li><a href="#">Account</a></li>
            <li><a href="#">Edit Account</a></li>
            <li><a href="#">Password</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">DownLoads</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Transactions</a></li>
            <li><a href="#">Newslatter</a></li>
            <li><a href="#">Logout</a></li>
        </ul>

    </div><!--end account_list-->

</div><!--end seven-->

</div><!--end user_log-->

</div><!--end container-->
<!-- end the main content area -->

