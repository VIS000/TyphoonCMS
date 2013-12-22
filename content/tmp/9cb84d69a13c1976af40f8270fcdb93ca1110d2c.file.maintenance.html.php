<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 18:13:58
         compiled from "tpl\Habbo\maintenance.html" */ ?>
<?php /*%%SmartyHeaderCode:2407852b085e66cf517-47428237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb84d69a13c1976af40f8270fcdb93ca1110d2c' => 
    array (
      0 => 'tpl\\Habbo\\maintenance.html',
      1 => 1387300435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2407852b085e66cf517-47428237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b085e897df60_10425906',
  'variables' => 
  array (
    'hotelname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b085e897df60_10425906')) {function content_52b085e897df60_10425906($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
</title>

<link href="./static/style.css" type="text/css" rel="stylesheet" />

<!--[if IE]>
<link href="./static/ie-all.css" type="text/css" rel="stylesheet" />
<![endif]-->
<!--[if lt IE 7]>
<link href="./static/ie6.css" type="text/css" rel="stylesheet" />
<![endif]-->

<script language="JavaScript" type="text/javascript" src="http://images.habbohotel.co.uk/web/web-2.1.0_b9/js/habbo.js"></script>

</head>
<body>

<!-- GraphiX Services, Copyright (c) 2007. All rights - except Habbo and related trademarks, companies, etc - reserved. -->
<!-- * NOTE: Google AdScripts and Nielsen//NETRATINGS script removed. No hidden counters.
     * NOTE: Some parts of this HTML have been modified for custom use.
     * LEGAL: We are not affliated with Sulake, Habbo, Habbo Hotel, related trademarks, images, or whatever related to them at all. -->

<div id="page-container">
	<div id="header-container">
	</div>
	<div id="maintenance-container">
		<div id="content-container">
			<div id="inner-container">

			<div id="left_col">

			<!-- bubble -->
			<div class="bubble">
				<div class="bubble-body">
					<img src="./static/alert_triangle.gif" width="30" height="29" alt="" border="0" align="left" class="triangle" />
					<b>Help! waar is <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 gebleven?</b>
					<div class="clear"></div>
				</div>
			</div>
			<div class="bubble-bottom">
				<div class="bubble-bottom-body">
					<img src="./static/bubble_tail_left.gif" alt="" width="22" height="31" />
				</div>
			</div>
			<!-- \bubble -->

			<img src="./static/frank_habbo_down.gif" width="57" height="87" alt="" border="0" />

			</div>

			<div id="right_col">

			<!-- bubble -->
			<div class="bubble">
				<div class="bubble-body">
					Rusitig nou frank! we zijn eventjes in onderhoud! kom zo weer terug!
					<div class="clear"></div>
				</div>
			</div>
			<div class="bubble-bottom">
				<div class="bubble-bottom-body">
					<img src="./static/bubble_tail_left.gif" alt="" width="22" height="31" />
				</div>
			</div>
			<!-- \bubble -->

			<img src="./static/workman_habbo_down.gif" width="125" height="118" alt="" border="0" />

			</div>

			</div>
		</div>
	</div>
	<div id="footer-container"></div>
</div>
</body>
</html>

<?php }} ?>