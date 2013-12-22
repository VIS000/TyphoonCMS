<?php /* Smarty version Smarty-3.1.14, created on 2013-12-14 17:09:50
         compiled from "tpl\Habbo\client.html" */ ?>
<?php /*%%SmartyHeaderCode:2913552ac82ce75c752-51253016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90043833dc48200c95751df356eea3ef40527996' => 
    array (
      0 => 'tpl\\Habbo\\client.html',
      1 => 1386851797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2913552ac82ce75c752-51253016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CurrentUser' => 0,
    'url' => 0,
    'Client' => 0,
    'SSOTicket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ac82ce81f022_16713213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac82ce81f022_16713213')) {function content_52ac82ce81f022_16713213($_smarty_tpl) {?>	<script type="text/javascript"> 
		var habboName = "<?php echo $_smarty_tpl->tpl_vars['CurrentUser']->value;?>
";
		var habboReqPath = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
		var habboStaticFilePath = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery";
		var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client";
		window.name = "ClientWndw";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
	</script> 

<link rel="alternate" type="application/rss+xml" title="Habbo Hotel - RSS" href="http://www.habbo.com/articles/rss.xml" /> 
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/js/libs2.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/js/visual.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/js/libs.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/js/common.js" type="text/javascript"></script> 
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/common.css" type="text/css" /> 
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/habboflashclient.css" type="text/css" /> 
 
 
<noscript> 
    <meta http-equiv="refresh" content="0;url=/client/nojs" />
</noscript> 
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/static/styles/client.css" type="text/css" /> 
<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/js/habboflashclient.js" type="text/javascript"></script>

<script type="text/javascript"> 
    FlashExternalInterface.loginLogEnabled = false;
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }
    var flashvars =  { 
            "client.allow.cross.domain" : "0", 
            "client.notify.cross.domain" : "1", 
            "connection.info.host" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['IPADDRES'];?>
", 
            "connection.info.port" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['SERVPORT'];?>
", 
            "site.url" : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/", 
            "url.prefix" : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/", 
            "client.reload.url" : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client", 
            "client.fatal.error.url" : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/disconnected", 
            "client.connection.failed.url" : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/disconnected", 
            "external.variables.txt" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['EXT_VARS'];?>
", 
            "external.texts.txt" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['EXT_TXTS'];?>
", 
            "productdata.load.url" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['PRODUDAT'];?>
", 
            "furnidata.load.url" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['FURNIDAT'];?>
", 
            "use.sso.ticket" : "1",
            "sso.ticket" : "<?php echo $_smarty_tpl->tpl_vars['SSOTicket']->value;?>
", 
            "processlog.enabled" : "0", 
            "account_id" : "1", 
            "client.starting" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['LOAD_TXT'];?>
", 
            "flash.client.url" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['BASE_DIR'];?>
/", 
            "has.identity" : "0", 
            "flash.client.origin" : "popup",
     } ;
    var params =  { 
        "base" : "<?php echo $_smarty_tpl->tpl_vars['Client']->value['BASE_DIR'];?>
/",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    
	};
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }
    
    var clientUrl = "<?php echo $_smarty_tpl->tpl_vars['Client']->value['BASE_DIR'];?>
/<?php echo $_smarty_tpl->tpl_vars['Client']->value['HABBOSWF'];?>
";

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-gallery/flash/expressInstall.swf", flashvars, params);
	
    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
</script>

<body id="client" class="flashclient">
<div id="overlay"></div>
<img src="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">

<div class="cbb clearfix">
    <h2 class="title">Please update your Flash Player to the latest version.</h2>
    <div class="box-content">
            <p>You can install and download Adobe Flash Player here: <a href="http://get.adobe.com/flashplayer/">Install flash player</a>. More instructions for installation can be found here: <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">More information</a></p>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/images/client/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
</div>

        </div>
        <script type="text/javascript">
            $('content').show();
        </script>
        <noscript>
            <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                <p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p>
            </div>
        </noscript>
    </div>
    </div>
         
</div>
    <div style="display: none">

<div id="habboCountUpdateTarget">
{status}
</div>
	<script language="JavaScript" type="text/javascript">
		setTimeout(function() {
			HabboCounter.init(600);
		}, 20000);
	</script>
    </div>
    <script type="text/javascript">
        RightClick.init("flash-wrapper", "flash-container");
        if (window.opener && window.opener != window && typeof window.opener.location.href != "undefined") {
            window.opener.location.replace(window.opener.location.href);
        }
        $(document.body).addClassName("js");
       	HabboClient.startPingListener();
    </script>

<script type="text/javascript">
    HabboView.run();
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15697942-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><?php }} ?>