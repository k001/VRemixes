<?php
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<section id="message">
	<div class="block-border"><div class="block-content no-title dark-bg">
		<p class="mini-infos"> 
		<?php if(!isset($message))
		{?>&copy; <?=date('Y')?> V-Remixes, Inc. All rights reserved.
		<br>Tiempo local <?=date('h:m A')?><?php 
		}
		else echo $message;?></p>
	</div></div>
</section>
<section id="login-block">
	<div class="block-border"><div class="block-content">
		<h1><?=lang('admin')?></h1>
		<div class="block-header"><?=lang('re-send-email')?></div>
<?php echo form_open($this->uri->uri_string(), array('class' => 'form')); ?>
	<p>
		<?php echo form_label(lang('email'), $email['id']); ?>
		<?php echo form_input($email); ?>
		<?php if(isset($errors[$email['name']])): ?>
		<p class="message error"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></p>
		<?php endif; ?>
	</p>
	<button type="submit"><?=lang('send')?></button>
<?php echo form_close(); ?>
	</div></div>
</section>