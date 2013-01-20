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

                <form action="/shop/users/register" method="post">
                    <ol>
                        <li class="row clearfix">
                            <label class="input_tag" for="email">Your E-Mail <em>*</em></label>
                            <div class="inputOuter">
                                <input id="email" type="text" name="data[User][email]" value="" placeholder="example@example.com">
                            </div>
                        </li>
                        <li class="row clearfix">
                            <label class="input_tag" for="firstName">Username<em>*</em></label>
                            <div class="inputOuter">
                                <input id="firstName" type="text" name="data[User][username]" value="" placeholder="John">
                            </div>
                        </li>
                        <li class="row clearfix">
                            <label class="input_tag" for="tele">Password<em>*</em></label>
                            <div class="inputOuter">
                                <input id="tele" type="password" name="data[User][password]" value="" placeholder="***********">
                            </div>
                        </li>
                    </ol>
                    <ol>
                        <li class="row clearfix">
                            <label class="input_tag" for="firstName">&nbsp;</label>
                            <div class="inputOuter button">
                                <input type="submit" class="red_btn" value="Sign Up"/>
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
                <?php echo $this->Form->create(' '); ?>
                <ol>
                    <li class="row clearfix">
                        <label class="input_tag">E-Mail/Username <em>*</em></label>
                        <div class="inputOuter">
                            <?php
                            echo $this->Form->input('',array('id'=>'mail','placeholder'=>'example@example.com','name'=>'data[User][username]','type'=>'text'));
                            ?>
                        </div>
                    </li>
                    <li class="row clearfix">
                        <label class="input_tag">Password <em>*</em></label>
                        <div class="inputOuter">
                            <?php
                            echo $this->Form->input('',array('id'=>'pass','placeholder'=>'**********','name'=>'data[User][password]','type'=>'password'));
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

