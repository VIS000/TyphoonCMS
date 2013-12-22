<?php /* Smarty version Smarty-3.1.14, created on 2013-12-21 19:25:05
         compiled from "tpl\Habbo\me.html" */ ?>
<?php /*%%SmartyHeaderCode:1143552ac8014ad1789-27759108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4255bdb79062a91abb7d4c8256652dab759906d' => 
    array (
      0 => 'tpl\\Habbo\\me.html',
      1 => 1387647211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1143552ac8014ad1789-27759108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ac8014bbdfb2_29926869',
  'variables' => 
  array (
    'hotelname' => 0,
    'url' => 0,
    'CurrentUser' => 0,
    'Housekeeping' => 0,
    'users_online' => 0,
    'look' => 0,
    'Motto' => 0,
    'LastOnline' => 0,
    'Articles' => 0,
    'news' => 0,
    'Campaigns' => 0,
    'camp' => 0,
    'Copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8014bbdfb2_29926869')) {function content_52ac8014bbdfb2_29926869($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 Hotel: Home </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo Hotel: RSS" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/articles/rss.xml" />
<meta name="csrf-token" content="3607f1f0f7"/>
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

<script src="/customjs/local/.nl.js" type="text/javascript"></script>

<script type="text/javascript">
var ad_keywords = "gender%3Am,age%3A15";
var ad_key_value = "kvage=15;kvgender=m;kvtags=";
</script>
<script type="text/javascript">
document.habboLoggedIn = true;
var habboName = "<?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>
";
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
    HabboClient.windowName = "48f3b9a20d89906eb00938c8749dc9373601d900";
    HabboClient.maximizeWindow = true;
}


</script>

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<meta property="fb:app_id" content="162105803517" />

<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 Hotel" />
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 Hotel: Home" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="nl_NL" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/lightweightmepage.css" type="text/css" />

<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/js/lightweightmepage.js" type="text/javascript"></script>

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
<body id="home" class=" ">
<div id="overlay"></div>

<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/"></a></h1>


<div id="subnavi" class=wide>
    <div id="subnavi-search">
        <div id="subnavi-search-upper">
        <ul id="subnavi-search-links">
                <li><a href="/feedback" target="_blank">Stuur een idee in</a></li>
                <li><a href="https://help.habbo.nl/home" target="habbohelp" >Habbo Help Tool</a></li>
            <li>
                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/logout.php" method="post">
                    <button type="submit" id="signout" class="link"><span>Log uit</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" class="new-button green-button" target="48f3b9a20d89906eb00938c8749dc9373601d900" onclick="HabboClient.openOrFocus(this); return false;"><b>Naar Hotel</b><i></i></a>
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
<strong>
<?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>

</strong>
<span></span>
</li>
		<li>
			<a href="/community">Community</a>
			<span></span>
		</li>
		
		<li>
			<a href="/news">Nieuws</a>
			<span></span>
		</li>
		
		<?php echo $_smarty_tpl->tpl_vars['Housekeeping']->value;?>

</ul>


            <div id="habbos-online"><div class="rounded"><span><?php echo $_smarty_tpl->tpl_vars['users_online']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
's in het hotel</span></div></div>
	</div>
</div>

<div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="selected">
				Home
				
			</li>
    		
    		<li class="">
				<a href="/settings">Instellingen</a>
    		</li>
    	
	</ul>
    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="wide-personal-info">

    <div id="habbo-plate">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/settings">
            <img alt="<?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>
" src="https://www.habbo.nl/habbo-imaging/avatarimage?&figure=<?php echo $_smarty_tpl->tpl_vars['look']->value;?>

"/>
        </a>
    </div>

    <div id="name-box" class="info-box">
        <div class="label">Naam:</div>
        <div class="content"><?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>
</div>
    </div>
    <div id="motto-box" class="info-box">
        <div class="label">Missie:</div>
        <div class="content"><?php echo $_smarty_tpl->tpl_vars['Motto']->value;?>
</div>
    </div>
    <div id="last-logged-in-box" class="info-box">
        <div class="label">Laatste bezoek:</div>
        <div class="content"><?php echo $_smarty_tpl->tpl_vars['LastOnline']->value;?>
</div>
    </div>

<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" target="48f3b9a20d89906eb00938c8749dc9373601d900" onclick="HabboClient.openOrFocus(this); return false;">Naar <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 Hotel<i></i></a>
        <b></b>
    </div>
</div>

</div>


<div id="promo-box">

    <div id="promo-bullets"></div>
	
	<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = array_reverse($_smarty_tpl->tpl_vars['Articles']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
        <div class="promo-container" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['image'];?>
)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</div>
                    <div class="body"><?php echo $_smarty_tpl->tpl_vars['news']->value['shortstory'];?>
</div>
                </div>
            </div>
            <div class="promo-link-container">
                    <div class="enter-hotel-btn">
                        <div class="open enter-btn">
                            <a style="padding: 0 8px 0 19px;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/news?id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">Lees meer</a><b></b>
                        </div>
						
                    </div>
					<br><br>
					<a href="http://facebook.com/"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/icon_fb.png"></a>
					<a href="http://twitter.com/HotelSyko"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/icon_twitter.png"></a>
            </div>
			
        </div>
     <?php } ?>
	 
        
        

</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
</script>


<div id="column1" class="column">
	
	<div class="habblet-container ">		
<div class="cb clearfix red "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3"> 

<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(228, 129, 129);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(217, 78, 78);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(217, 78, 78);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(228, 129, 129);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(217, 78, 78);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div></div><h2 class="title rounded-done">Nu in <?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
</h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(217, 78, 78);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(228, 129, 129);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(217, 78, 78);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(228, 129, 129);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(217, 78, 78);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(214, 66, 66);"></div></div></div></div></div></div> 

<div id="hotcampaigns-habblet-list-container"> 

<ul id="hotcampaigns-habblet-list"> 
<?php  $_smarty_tpl->tpl_vars['camp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['camp']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = array_reverse($_smarty_tpl->tpl_vars['Campaigns']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['camp']->key => $_smarty_tpl->tpl_vars['camp']->value){
$_smarty_tpl->tpl_vars['camp']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['camp']->key;
?>
<li class="even"> 
            <div class="hotcampaign-container"> 
                <a href="<?php echo $_smarty_tpl->tpl_vars['camp']->value['url'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/banners/hot/<?php echo $_smarty_tpl->tpl_vars['camp']->value['image_url'];?>
" align="left" alt="<?php echo $_smarty_tpl->tpl_vars['camp']->value['caption'];?>
"></a> 
                <h3><?php echo $_smarty_tpl->tpl_vars['camp']->value['caption'];?>
</h3> 
                <p><?php echo $_smarty_tpl->tpl_vars['camp']->value['descr'];?>
</p> 
                <p class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['camp']->value['url'];?>
">Ga erheen »</a></p> 
            </div> 
        </li><?php } ?>
		 </ul>

</div>
</div></div></div><div class="bb"><div></div></div></div>
</div>
<script type="text/javascript">
                                HabboView.add(function() {
                                    L10N.put("personal_info.motto_editor.spamming", "Don\'t spam me, bro!");
                                    PersonalInfo.init("");
                                });
                            </script>
			     		
				
        
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 
<div class="cbb clearfix light orange ">								
<h2 class="title">Track van de week
</h2>
						<div>
<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/120584058&amp;color=ffdb00&amp;auto_play=false&amp;show_artwork=true"></iframe>

                        </div>

</div>
</div>


<div id="column2" class="column">
<div class="cbb clearfix light orange ">								
<h2 class="title">SlamFM (Tijdelijk)
</h2>
						<div><center><br>
<OBJECT ID="MediaPlayer1" CLASSID="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95"  TYPE="application/x-oleobject" width="280" height="46">
    <param name="fileName" value="http://www.slamfm.nl/slamplayer/SLAMFM_MEDIAPLAYER.asx">
    <param name="animationatStart" value="true">
    <param name="transparentatStart" value="true">
    <param name="autoStart" value="true">
    <param name="showControls" value="true">
    <param name="Volume" value="-300">
    <embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" src="http://www.slamfm.nl/slamplayer/SLAMFM_MEDIAPLAYER.asx" name="MediaPlayer1" width=280 height=46 autostart=1 showcontrols=1 volume=-300>
</OBJECT></center>
                        </div>

</div>

<div class="cbb clearfix light blue ">								
<h2 class="title">Poll
</h2>
						<div>
Pollscript Hier!
                        </div>

</div>

<div class="cbb clearfix green ">								
<h2 class="title">Twitter
</h2>
Doe hier je twitter code!
</div>
<script type="text/javascript">
HabboView.run();
</script>
<div id="column3" class="column">
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container">

<br>


<p><br>



</div>

						
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
				<div class="habblet-container ">		
	
						<div class="ad-container">


        
</div>

						
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>
<div id="footer">
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['Copyright']->value;?>
</p>
</div></div>

</div>




    <script type="text/javascript">

function onClientOpen() {
    var openHotelLinks = $("enter-hotel").select("a");
    if (openHotelLinks.length == 1) {
        if (timeoutID != null) {
            clearTimeout(timeoutID);
        }
        HabboClient.openOrFocus(openHotelLinks[0]);
    }
    return false;
}
</script>

        


</body>
</html>
<?php }} ?>