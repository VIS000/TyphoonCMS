<?php /* Smarty version Smarty-3.1.14, created on 2013-12-14 20:21:48
         compiled from "tpl\Habbo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2592652ac80f19a7ec6-30617080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e6516fdb46d57d6c37328d87acac737bf0f139' => 
    array (
      0 => 'tpl\\Habbo\\index.html',
      1 => 1387048896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592652ac80f19a7ec6-30617080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ac80f1bef922_23535195',
  'variables' => 
  array (
    'LoginSystem' => 0,
    'hotelname' => 0,
    'users_online' => 0,
    'RegError' => 0,
    'Copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac80f1bef922_23535195')) {function content_52ac80f1bef922_23535195($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['LoginSystem']->value;?>

<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/rocketscript"></script>
		<title><?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 - Waar het altijd leuk is!</title>
		<link rel="stylesheet" type="text/css" href="layout/css.css">
		
	</head>
	
	<body>
		<div class="maincontainer">
		<p style="font-size:15px;font-family:Arial;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['users_online']->value;?>
 speler(s) online!</p>
		<img src="layout/logo.png">
	
	
		<center>
					<?php if (isset($_smarty_tpl->tpl_vars['RegError']->value)){?>
		<div class="error"><?php echo $_smarty_tpl->tpl_vars['RegError']->value;?>
</div>
		<?php }else{ ?>
		<br>
		<?php }?>
		<br>
		<div class="button">
		   <a href="/register">Registreren</a>
		   </div>
		<br>
		</center>
		<form name="input" action="#" method="post">
		<div class="form"><input type="textbox" name="username" class="user" value="" placeholder="  Gebruikersnaam"></div>
		 <br>
		 <div class="form"><input type="password" name="password" class="user" value="" placeholder="  Wachtwoord"></div>
		<br>
		<button href="#" id="confirm" class="loginbutton"  onclick="document.forms[0].submit();return false;" >Inloggen</button>
		<p class="footer"><?php echo $_smarty_tpl->tpl_vars['Copyright']->value;?>
</p>
		</form>
		</div>
		<script type="text/rocketscript">
		 $.fx.speeds.xslow = 1000;
		 $('.maincontainer').hide().fadeIn('xslow');
		</script>
	</body>
</html><?php }} ?>