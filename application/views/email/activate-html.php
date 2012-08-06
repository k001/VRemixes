<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title><?=lang('auth_subject_welcome_1')?> <?php echo $site_name; ?>!</title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"><?=lang('auth_subject_welcome_1')?> <?php echo $site_name; ?>!</h2>
Gracias por ingresar a <?php echo $site_name; ?>. A continuacion listamos tus datos de acceso, manten segura esta informacion.<br />
Para verificar tu correo electronico, por favor has click en el siguiente enlace:<br />
<br />
<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('/users/activate/'.$user_id.'/'.$new_email_key); ?>" style="color: #3366cc;">Finalizar registro</a></b></big><br />
<br />
Si el enlace no funciona, copia el siguiente enlace a tu navegador web:<br />
<nobr><a href="<?php echo base_url('/users/activate/'.$user_id.'/'.$new_email_key); ?>" style="color: #3366cc;"><?php echo site_url('/users/activate/'.$user_id.'/'.$new_email_key); ?></a></nobr><br />
<br />
Por favor verifica tu cuenta antes de <?php echo $activation_period; ?> horas, de otra manera tu registro ser&aacute; invalido y necesitar&aacute;s registrarte de nuevo.<br />
<br />
<br />
<?php if (strlen($username) > 0) { ?>Tu usuario: <?php echo $username; ?><br /><?php } ?>
Tu cuenta de <?=lang('email')?>: <?php echo $email; ?><br />
<?php if (isset($password)) { /* ?>Tu <?=lang('password')?>: <?php echo $password; ?><br /><?php */ } ?>
<br />
<br />
Diviertete y disfruta de nuestros videos!<br />
El equipo de <?php echo $site_name; ?>.
</td>
</tr>
</table>
</div>
</body>
</html>