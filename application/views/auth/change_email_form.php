<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<section id="login-block">
	<div class="block-border">
		<div class="block-content">	
			<h1><?=lang('admin')?></h1>
			<div class="block-header"><?=lang('register-form')?></div>				
				<?php echo form_open($this->uri->uri_string(), array('class'=>'form with-margin')); ?>
				<p class="inline-small-label">
					<?php echo form_label('Password', $password['id']); ?></td>
					<?php echo form_password($password); ?></td>
					<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
				</p>
				<p class="inline-small-label">
					<?php echo form_label('New email address', $email['id']); ?>
					<?php echo form_input($email); ?>
					<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
				</p>
	<button type="submit" class="float-right"><?=lang('send')?></button>
<?php echo form_close(); ?>
		</div>
	</div>
</section>