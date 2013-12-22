<?php /* Smarty version Smarty-3.1.14, created on 2013-12-14 17:34:51
         compiled from "tpl\Habbo\news.html" */ ?>
<?php /*%%SmartyHeaderCode:515852ac81723e3a26-86378568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2b51abb898c0bee2581d1044bf3c7fcae56c23' => 
    array (
      0 => 'tpl\\Habbo\\news.html',
      1 => 1387038266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '515852ac81723e3a26-86378568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ac8172478686_50261218',
  'variables' => 
  array (
    'url' => 0,
    'CurrentUser' => 0,
    'Housekeeping' => 0,
    'users_online' => 0,
    'hotelname' => 0,
    'Articles' => 0,
    'artcl' => 0,
    'Article' => 0,
    'Copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8172478686_50261218')) {function content_52ac8172478686_50261218($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Habbo Hotel: Nieuws  - Lieve Sint, ik wil graag...</title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo Hotel: RSS" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/articles/rss.xml" />
<meta name="csrf-token" content="c4c1ea77e1"/>
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
    HabboClient.windowName = "85ba694b8a14119513157782cd5183722a8b3745";
    HabboClient.maximizeWindow = true;
}


</script>

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<meta property="fb:app_id" content="162105803517" />


<meta name="description" content="Maak vrienden, doe mee en val op!" />
<meta name="keywords" content="habbo hotel, virtueel, wereld, sociaal netwerk, gratis, community, avatar, chat, online, tiener, roleplaying, doe mee, sociaal, groepen, forums, veilig, speel, games, online, vrienden, tieners, zeldzaams, zeldzame meubi, verzamelen, maak, verzamel, kom in contact, meubi, meubeks, huisdieren, kamer inrichten, delen, uitdrukking, badges, hangout, muziek, beroemdheid, HC-visits, celebs, mmo, mmorpgs, massive multiplayer" />



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
<meta name="build" content="63-BUILD2591 - 18.11.2013 11:10 - nl" />
</head>
<body id="news" class=" ">
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
/account/logout?token=c4c1ea77e1" method="post">
                    <button type="submit" id="signout" class="link"><span>Log uit</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" class="new-button green-button" target="85ba694b8a14119513157782cd5183722a8b3745" onclick="HabboClient.openOrFocus(this); return false;"><b>Naar Hotel</b><i></i></a>
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
        <li class="metab">
<a href="/me">
<?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>
 
</a>
<span></span>
</li>
		<li>
			<a href="/community">Community</a>
			<span></span>
		</li>
		<li class="selected">
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
				<a>Nieuws</a>
			</li>
	</ul>
    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
    <div id="column1" class="column">
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix default ">
	
							<h2 class="title">Nieuws
							</h2>
						<div id="article-archive">



<ul>
	
	<?php  $_smarty_tpl->tpl_vars['artcl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artcl']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['Articles']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artcl']->key => $_smarty_tpl->tpl_vars['artcl']->value){
$_smarty_tpl->tpl_vars['artcl']->_loop = true;
?>
       <li>		
		<a href="/news?id=<?php echo $_smarty_tpl->tpl_vars['artcl']->value['id'];?>
" class="article-2324"><?php echo $_smarty_tpl->tpl_vars['artcl']->value['title'];?>
 &nbsp;&raquo;</a>
	</li>
     <?php } ?>
	 
	

</ul>

</div>

						
					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<div id="column2" class="column">
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix notitle ">
	
							
						<div id="article-wrapper">
	<h2><?php echo $_smarty_tpl->tpl_vars['Article']->value['title'];?>
</h2>
	<div class="article-meta"><?php echo $_smarty_tpl->tpl_vars['Article']->value['published'];?>

		
	
			
	<p class="summary"><?php echo $_smarty_tpl->tpl_vars['Article']->value['shortstory'];?>
</p>
	
	<div class="article-body">
	
	<?php echo nl2br($_smarty_tpl->tpl_vars['Article']->value['longstory']);?>

	
	<div class="article-images clearfix">
	</div>

	    <div class="article-body"><!-- LIKE + SEND -->






<!-- LIKE + SEND -->







<!-- Facebook Like, Send and Comments code BEGIN -->

<!--     <fb:comments href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/articles/2332-lieve-sint-ik-wil-graag" num_posts="2" width="500"></fb:comments>    -->

<!-- Facebook Like, Send and Comments code END --> 





	</div>
</div>

                            
                            
                            
                            
                            
						
					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<script type="text/javascript">
HabboView.run();
</script>
<div id="column3" class="column">
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container">
<!--JavaScript Tag // Tag for network 957: Sulake // Website: HabboHotel_NL // Page: Articles // Placement: Articles_MarketingButton (2196367) // created at: Oct 19, 2009 1:06:19 PM-->

</div>

						
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
				<div class="habblet-container ">		
	
						<div class="ad-container">
<!--JavaScript Tag // Tag for network 957: Sulake // Website: HabboHotel_NL // Page: Articles // Placement: Articles_Skyscraper (2196368) // created at: Oct 8, 2009 5:18:23 PM-->

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
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>    
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


<!-- HL-15281 -->



    
        


</body>
</html>

<?php }} ?>