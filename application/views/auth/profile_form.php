<?php print_r($profile);?>

<div class="block-border">
	<div class="block-content">	
		<div class="block-header"><?=lang('my-profile')?></div>	
		
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
			<a class="button float-left grey" href="/users/login"><?=lang('login')?></a>				
			<button type="submit" class="float-right"><?=lang('send')?></button>
			<?php echo form_close(); ?>
		<p>&nbsp;</p>
	</div>
</div>