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
				<div class="h_title">Nieuws Toevoegen</div>
				<?php
			if(isset($_POST['Title']) && isset($_POST['ShortStory']) && isset($_POST['Image']) && isset($_POST['LongStory']))
			{
				echo $management->PlaceNews($_POST['Title'], $_POST['ShortStory'], $_POST['LongStory'], $_SESSION['username'], $_POST['Image']);
			}
			?>
				<form action="" method="post">
					<div class="element">
						<label for="name">Titel </label>
						<input id="name" name="Title" class="text" />
					</div>
					
					<div class="element">
						<label for="shortstory">ShortStory </label>
						<input id="name" name="ShortStory" class="text" />
					</div>
					
					<div class="element">
						<label for="Image">Plaatje</label>
						<select name="Image" class="">
							<?php 
							foreach(glob('../web-gallery/promo/*') as $image)
							{
								$image = str_replace('../web-gallery/promo/', '', $image);
								echo '<option value="'.$image.'">'.$image.'</option>';
							}
							?>
						
						</select>
					</div>
				
				
					<div class="element">
						<label for="content">Bericht <span>(required)</span></label>
						<textarea name="LongStory" class="textarea" rows="10"></textarea>
					</div>
					<div class="entry">
						<button type="submit" class="add">Plaats</button>
						<a type="submit" href="newsmgr.php" class="add" >Nieuws Paneel</a>
					</div>
				</form>
			</div>
			
			
			</div>

	<div id="footer">
		<div class="left">
			<p>TyphoonCMS  | Used for <?php echo $CONFIG['TPL']['NAME']; ?> hotel</a></p>
		</div>
		<div class="right">
			© 2013 - VIS000DEVELOPMENT
		</div>
	</div>
</div>

</body>
</html>
