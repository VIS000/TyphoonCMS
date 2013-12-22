<?php
//INDEX
include_once 'allowedpages.php';
include_once 'global.php';

if($core->MaintenanceValue == true)
{
	$tpl->display('maintenance.html');
	die();
}

if(isset($_GET['url']))
{	
	if(in_array($_GET['url'], $AllowedPages) and isset($_SESSION['username']))
	{
		$tpl->display($_GET['url'].'.html');
	}
	
	elseif($_GET['url'] == 'index' or $_GET['url'] == 'register')
	{
		$tpl->display($_GET['url'].'.html');
	}
	
	else
	{
		header('Location: /');
		die();
	}
}


elseif(isset($_SESSION['username']))
{
	$tpl->display('me.html');
}
else
{
	$tpl->display('index.html');
}
?>