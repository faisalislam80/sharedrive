<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
    'required'=>'required',
    'placeholder' => 'type username / email'
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or login';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'required' => 'required',
    'placeholder' => '******'
);
$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
);
?>
<!-- Form area -->
<div class="admin-form">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- Widget starts -->
                <div class="widget">
                    <!-- Widget head -->
                    <div class="widget-head">
                        <i class="icon-lock"></i> Login
                    </div>

                    <div class="widget-content">
                        <div class="padd">
                            <!-- Login form -->
                            <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal')); ?>
                            <!-- Email -->
                            <div class="control-group">
                                <label class="control-label" for="login">Email / Username</label>

                                <div class="controls">
                                    <?php echo form_input($login); ?>
                                </div>
                                <div class="alert-danger">
                                    <?php echo form_error($login['name']); ?>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="control-group">
                                <label class="control-label" for="password">Password</label>

                                <div class="controls">
                                    <?php echo form_password($password); ?>
                                </div>
                                <div class="alert-danger">
                                    <?php echo form_error($password['name']); ?>
                                </div>

                            </div>
                            <!-- Remember me checkbox and sign in button -->
                            <div class="control-group">
                                <div class="controls">
                                    <label class="checkbox">
                                        <?php echo form_checkbox($remember); ?> Remember me
                                    </label>
                                    <br>
                                    <?php echo form_submit(array('type'=>'submit','class'=>'btn btn-success'), 'Sign in'); ?>
                                    <input type="reset" class="btn" value="Reset">
                                </div>
                            </div>
                            <!-- Forgot password -->
                            <div class="control-group">
                                <label class="control-label" for="password"></label>
                                <div class="controls">
                                    <?php echo anchor('/auth/forgot_password/', 'Forgot password?'); ?>
                                </div>
                            </div>
                            <!-- Register Links -->
                            <div class="control-group">
                                <label class="control-label" for="password"></label>
                                <div class="controls">
                                    <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Don\'t have an account ?' ); ?>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="widget-foot">
                            <!-- Footer goes here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>