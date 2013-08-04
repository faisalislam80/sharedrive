<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
        'required' => 'required',
        'placeholder' => 'type your username',
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
    'required' => true,
    'placeholder' => 'type your email address',
);
$password = array(
    'type'  => 'password',
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'required' => true,
    'placeholder' => '******',
);
$confirm_password = array(
    'type'  => 'password',
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'required' => true,
    'data-validation-matches-match' => "password",
    'data-validation-matches-message' =>"Must match email address entered above",
    'placeholder' => '******',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<div class="admin-form">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
                <!-- Widget starts -->
                <div class="widget">
                    <!-- Widget head -->
                    <div class="widget-head">
                        <i class="icon-lock"></i> Register
                    </div>

                    <div class="widget-content">
                        <div class="padd">

                            <!-- Form area -->

                            <?php echo form_open($this->uri->uri_string(),array('class' => 'form-horizontal')); ?>

                                <?php if ($use_username) { ?>
                                    <!-- Name -->
                                    <div class="control-group">
                                        <?php echo form_label('Username', $username['id'],array('class'=>'control-label')); ?>
                                        <div class="controls">
                                            <?php echo form_input($username); ?>
                                        </div>
                                        <div class="alert-danger">
                                            <?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
                                        </div>
                                    </div>

                                <?php } ?>

                                    <!-- Email -->
                                    <div class="control-group">
                                        <?php echo form_label('Email Address', $email['id'],array('class'=>'control-label')); ?>
                                        <div class="controls">
                                            <?php echo form_input($email); ?>
                                        </div>
                                        <div class="alert-danger">
                                            <?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="control-group">
                                        <?php echo form_label('Password', $password['id'],array('class'=>'control-label')); ?>
                                        <div class="controls">
                                            <?php echo form_input($password); ?>
                                        </div>
                                        <div class="alert-danger">
                                            <?php echo form_error($password['name']); ?>
                                        </div>
                                    </div>


                                    <!-- Password -->
                                    <div class="control-group">
                                        <?php echo form_label('Confirm Password', $confirm_password['id'],array('class'=>'control-label')); ?>
                                        <div class="controls">
                                            <?php echo form_input($confirm_password); ?>
                                        </div>
                                        <div class="alert-danger">
                                            <?php echo form_error($confirm_password['name']); ?>
                                        </div>
                                    </div>

                                    <!-- Register Button -->
                                    <div class="control-group">
                                        <div class="controls">
                                            <?php
                                                echo form_submit(array(
                                                    'name'  => 'register',
                                                    'class'  => 'btn btn-success',
                                                ), 'Register');
                                            ?>
                                            <input type="reset" class="btn" value="Reset">
                                        </div>
                                    </div>

                                    <!-- Already registered ? -->
                                    <div class="control-group">
                                        <div class="controls">
                                            <?php echo anchor('/auth/login/', 'Already registered?' ); ?>
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