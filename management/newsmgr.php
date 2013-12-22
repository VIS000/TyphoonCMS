<?php include_once '../global.php';
if(!isset($_SESSION['housekeeping']))
{
	header('Location: /me');
	die('OPKANKEREN!');
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
					<li class="b1"><a class="icon view_page" href="dashboard.php">Dashboard</a></li>
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
			
			
			<div class="clear"></div>
			
			
			
			<div class="full_w">
				
						<br>
						<table>
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Titel</th>
							<th scope="col">Door</th>
							<th scope="col">Datum</th>
							<th scope="col" style="width: 65px;">Bewerk</th>
						</tr>
					</thead>
						
					<tbody>
						
						<?php
							foreach($core->GetArticles() as $Article)
							{
								echo "
								<tr>
								<td class=\"align-center\">{$Article['id']}</td>
								<td>{$Article['title']}</td>
								<td>{$Article['author']}</td>
								<td>{$Article['published']}</td>
								<td>
									<a href=\"editnews.php?newsid={$Article['id']}\" class=\"table-icon edit\" title=\"Bewerk\"></a>
									<a href=\"?removeid={$Article['id']}\" class=\"table-icon delete\" title=\"Verwijder\"></a>
								</td>
							</tr>
								";
							}
						?>
						
							
						
					</tbody>
				</table>
						<br>
			
				
			</div>
			
			
			</div>

	<div id="footer">
		<div class="left">
			<p>TyphoonCMS | Used for <?php echo $CONFIG['TPL']['NAME']; ?> hotel</a></p>
		</div>
		<div class="right">
			© 2013 - VIS000DEVELOPMENT
		</div>
	</div>
</div>

<?php
if(isset($_GET['removeid']))
{
	$management->DeleteNews($_GET['removeid']);
}
?>

</body>
</html>
