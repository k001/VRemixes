<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<section id="message">
	<div class="block-border"><div class="block-content no-title dark-bg">
		<p class="mini-infos"> <?php if(!isset($message)){?>&copy; <?=date('Y')?> V-Remixes, Inc. All rights reserved.
		<br>Tiempo local <?=date('h:m A')?><?php }else echo $message;?></p>
	</div></div>
</section>

<section id="login-block">
	<div class="block-border">
		<div class="block-content">	
			<h1><?=lang('admin')?></h1>
			<div class="block-header"><?=lang('register-form')?></div>	
			
		<?php echo form_open($this->uri->uri_string(), array('class'=>'form with-margin')); ?>
			<?php if ($use_username) { ?>
			<p class="inline-small-label">
				<span class="relative">
				<?php echo form_label(lang('username'), $username['id']); ?>
				<?php echo form_input($username); ?>
				</span>
			</p>
			<?php } ?>
			<p class="inline-small-label">
				<?php echo form_label(lang('email'), $email['id']); ?>
				<?php echo form_input($email); ?>
				<td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
			</p>
			<p class="inline-small-label">
				<?php echo form_label(lang('password'), $password['id']); ?>
				<?php echo form_password($password); ?>
				<td style="color: red;"><?php echo form_error($password['name']); ?>
			</p>
			<p class="inline-small-label">
				<?php echo form_label(lang('confirm_password'), $confirm_password['id']); ?>
				<?php echo form_password($confirm_password); ?>
				<td style="color: red;"><?php echo form_error($confirm_password['name']); ?>
			</p>	
			<?php if ($captcha_registration) {
			if ($use_recaptcha) { ?>
		<p class="inline-small-label">
			<td colspan="2">
				<div id="recaptcha_image"></div>			
				<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
				<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
				<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>			
		</p>
		<p class="inline-small-label">
				<div class="recaptcha_only_if_image">Enter the words above</div>
				<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>			
			<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
			<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?>
			<?php echo $recaptcha_html; ?>
		</p>
		<?php } else { ?>
		<p class="inline-small-label">
			<td colspan="3">
				<p>Enter the code exactly as it appears:</p>
				<?php echo $captcha_html; ?>			
		</p>
		<p class="inline-small-label">
			<?php echo form_label('Confirmation Code', $captcha['id']); ?>
			<?php echo form_input($captcha); ?>
			<td style="color: red;"><?php echo form_error($captcha['name']); ?>
		</p>
		<?php }
		} ?>
				<a class="button float-left grey" href="/users/login"><?=lang('login')?></a>				
				<button type="submit" class="float-right"><?=lang('send')?></button>
				<?php echo form_close(); ?>
			<p>&nbsp;</p>
		</div>
	</div>
</section>