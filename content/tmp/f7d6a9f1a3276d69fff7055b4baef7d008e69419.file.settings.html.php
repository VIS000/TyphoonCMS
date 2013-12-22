<?php /* Smarty version Smarty-3.1.14, created on 2013-12-14 21:35:42
         compiled from "tpl\Habbo\settings.html" */ ?>
<?php /*%%SmartyHeaderCode:35052acc11e085832-55337873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7d6a9f1a3276d69fff7055b4baef7d008e69419' => 
    array (
      0 => 'tpl\\Habbo\\settings.html',
      1 => 1385396163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35052acc11e085832-55337873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SettingUpdateSystem' => 0,
    'hotelname' => 0,
    'url' => 0,
    'CurrentUser' => 0,
    'Housekeeping' => 0,
    'users_online' => 0,
    'RegError' => 0,
    'Motto' => 0,
    'sonlinestatus' => 0,
    'saccepttrading' => 0,
    'Copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52acc11e1d1647_54782534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52acc11e1d1647_54782534')) {function content_52acc11e1d1647_54782534($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['SettingUpdateSystem']->value;?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 Hotel: Mijn gegevens </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo Hotel: RSS" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/articles/rss.xml" />
<meta name="csrf-token" content="34de966fc7"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/common.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Medium' rel='stylesheet' type='text/css'>

<script src="/customjs/local/.secure.nl.js" type="text/javascript"></script>

<script type="text/javascript">
var ad_keywords = "gender%3Am,age%3A15";
var ad_key_value = "kvage=15;kvgender=m;kvtags=";
</script>
<script type="text/javascript">
document.habboLoggedIn = true;
var habboName = "EdwardPHP";
var habboId = 17824197;
var facebookUser = false;
var habboReqPath = "";
var habboStaticFilePath = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery";
var habboImagerUrl = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "0d56e1b31b1e95c78225fab5466ca6a7dc2f6075";
    HabboClient.maximizeWindow = true;
}


</script>

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<meta property="fb:app_id" content="162105803517" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo Hotel: Mijn gegevens" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="nl_NL" />

<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/settings.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/settings.css" type="text/css" />

<meta name="description" content="Maak vrienden, doe mee en val op!" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 hotel, virtueel, wereld, sociaal netwerk, gratis, community, avatar, chat, online, tiener, roleplaying, doe mee, sociaal, groepen, forums, veilig, speel, games, online, vrienden, tieners, zeldzaams, zeldzame meubi, verzamelen, maak, verzamel, kom in contact, meubi, meubeks, huisdieren, kamer inrichten, delen, uitdrukking, badges, hangout, muziek, beroemdheid, HC-visits, celebs, mmo, mmorpgs, massive multiplayer" />



<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/ie6.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD2571 - 06.11.2013 23:11 - nl" />
</head>
<body id="profile" class=" ">
<div id="overlay"></div>

<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/"></a></h1>


<div id="subnavi" class=wide>
    <div id="subnavi-search">
        <div id="subnavi-search-upper">
        <ul id="subnavi-search-links">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/feedback" target="_blank">Stuur een idee in</a></li>
                <li><a href="https://help.habbo.nl/home" target="habbohelp" >Habbo Help Tool</a></li>
            <li>
                <form action="https://www.habbo.nl/account/logout?token=34de966fc7" method="post">
                    <button type="submit" id="signout" class="link"><span>Log uit</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" class="new-button green-button" target="0d56e1b31b1e95c78225fab5466ca6a7dc2f6075" onclick="HabboClient.openOrFocus(this); return false;"><b>Naar Hotel</b><i></i></a>
    </div>
</div>
<script type="text/javascript">
L10N.put("purchase.group.title", "Maak/koop een Groep");
document.observe("dom:loaded", function() {
    $("signout").observe("click", function() {
        HabboClient.close();
    });
});
</script><ul id="navi">
        <li class="metab selected">
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/me">
<?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>

</a>
<span></span>
</li>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/community">Community</a>
			<span></span>
		</li>
		
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/news">Nieuws</a>
			<span></span>
		</li>
		
		<?php echo $_smarty_tpl->tpl_vars['Housekeeping']->value;?>

</ul>


            <div id="habbos-online"><div class="rounded"><span><?php echo $_smarty_tpl->tpl_vars['users_online']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
's  in het hotel</span></div></div>
	</div>
</div>

<div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="">
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/me">Home</a>
			</li>
  
    		<li class="selected">
				Instellingen
				
    		</li>
			
			
    		
	</ul>
    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div>

<div class="content">
<div class="habblet-container" style="float:left; width:210px;">
<div class="cbb settings">

<h2 class="title">Instellingen</h2>
<div class="box-content">
            <div id="settingsNavigation">
            <ul>

                <li class="selected">Mijn voorkeuren
                </li>

                  
            </ul>
            </div>
</div></div>
</div>
    <div class="habblet-container " style="float:left; width: 560px;">
        <div class="cbb clearfix settings">

            <h2 class="title">Mijn voorkeuren</h2>
            <div class="box-content">
       
<?php if (isset($_smarty_tpl->tpl_vars['RegError']->value)){?>
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 4px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(108, 190, 64);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div class="rounded-green rounded-done">
		Jeuh! Gegevens bijgewerkt!<br>
	</div><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(108, 190, 64);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div><div style="margin: 0px 4px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div></div></div></div>

<?php }else{ ?> 
  
<?php }?>      

<form action="#" method="post" id="profileForm">
    <input type="hidden" name="__app_key" value="34de966fc7" />
    <input type="hidden" name="urlToken" value="adb32e606b269bd0b27881948f979505ecdf5e50"/>
<input type="hidden" name="tab" value="2" />


<h3>Je <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 status</h3>

<p>
Andere <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
's zien je status op je <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 Home en in het hotel.
</p>

<p>
<label>Status:
<input type="text" name="acc_motto" size="32" maxlength="32" value="<?php echo $_smarty_tpl->tpl_vars['Motto']->value;?>
" id="avatarmotto" /></label>
</p>


<h3>Online status</h3>
<p>
Wie mag zien of je online bent:<br />
<label><input type="radio" name="showOnlineStatus" value="1" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sonlinestatus']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>checked=""<?php }?> />Niemand</label>
<label><input type="radio" name="showOnlineStatus" value="0" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sonlinestatus']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=1){?>checked=""<?php }?> />Iedereen</label>
</p>


<h3>Ruilen</h3>
<p>
Mogen spelers met je ruilen?:<br />
<label><input type="radio" name="AcceptTrading" value="0" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['saccepttrading']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=1){?>checked=""<?php }?> />Nee</label>
<label><input type="radio" name="AcceptTrading" value="1"  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['saccepttrading']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==1){?>checked=""<?php }?> />Ja</label>
</p>

<h3>Wachtwoord veranderen</h3>

<p>
<label>Oud Wachtwoord:
<input type="password" name="pw_old" size="32" maxlength="32"  id="avatarmotto" /></label>
</p>

<p>
<label>Nieuw Wachtwoord:
<input type="password" name="pw_new" size="32" maxlength="32"  id="avatarmotto" /></label>
</p>

<div class="settings-buttons">
<a href="#" class="new-button" style="display: none" id="profileForm-submit"><b>Opslaan</b><i></i></a>
<noscript><input type="submit" value="Opslaan" name="save" class="submit" /></noscript>
</div>



</form>

<script type="text/javascript">
$("profileForm-submit").observe("click", function(e) { e.stop(); $("profileForm").submit(); });
$("profileForm-submit").show();
</script>

</div>
</div>
</div>
</div>
</div>
    </div>
<div id="footer">
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['Copyright']->value;?>
</p>
</div>

</div>

<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>    
    

    



</body>
</html>
<?php }} ?>