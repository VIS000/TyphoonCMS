<?php include_once '../global.php';
if(!isset($_SESSION['housekeeping']))
{
	header('Location: /me');
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title><?php echo $CONFIG['TPL']['NAME']; ?> -> Housekeeping</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welkom, <strong><?php echo $_SESSION['username']; ?></strong>  </p>
			</div>
			<div class="right">
				<div class="align-right">
					<p>Laatst Ingelogd: <strong><?php echo date('d-M-Y \o\m\  H:i', $habbo->SelectFromUsername($_SESSION['username'], 'last_online'));?></strong></p>
				</div>
			</div>
		</div>

	</div>
	<br>
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Site</div>
				<ul id="home">
					<li class="b1"><a class="icon view_page" href="<?php echo $CONFIG['TPL']['URL']; ?>">Naar site</a></li>
					<li class="b2"><a class="icon report" href="news.php">Plaats nieuws</a></li>
					<li class="b2"><a class="icon report" href="campaign.php">Plaats campaign</a></li>
					 

				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Spelers</div>
				<ul>
					 
					<li class="b1"><a class="icon block_users" href="ban.php">Ban een speler</a></li>
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Info</div>
				<ul>
					<li class="b2"><a class="icon php" href="php.php">PHP info</a></li>
	 
					<li class="b2"><a class="icon page" href="logs.php">Logs</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			<div class="half_w half_left">
				<div class="h_title">Ik</div>
				<br>
					<center>Naam:<?php echo $_SESSION['username']; ?><br>
					 <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $habbo->SelectFromUsername($_SESSION['username'], 'look'); ?>&head_direction=3&direction=2&gesture=sml&action=wlk&size=b"> </img><br></center>
			</div>
			<div class="half_w half_right">
				<div class="h_title">Satistieken</div>
				<div class="stats">
					<div class="today">
						<h3>Hotel</h3>
						<p class="count"><?php echo $core->Status('users_online'); ?></p>
						<p class="type">Spelers Online</p>
						<p class="count"><?php echo $management->Rooms(); ?></p>
						<p class="type">Kamers</p>
						<p class="count"><?php echo $management->Articles() ?></p>
						<p class="type">Nieuwsberichten</p>
					</div>
					
					<div class="week">
						<h3>Server</h3>
					
						
						<p class="count"><?php echo phpversion(); ?></p>
						<p class="type">PHP Versie</p>
					</div>
					
				</div>
			</div>
			
			<div class="clear"></div>
			
		
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div class="left">
			<p>TyphoonCMS  | Used for <?php echo $CONFIG['TPL']['NAME']; ?> hotel</a></p>
		</div>
		
	</div>
</div>

</body>
</html>
