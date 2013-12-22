<?php include_once 'global.php'; ?>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo Hotel: RSS" href="<?php echo $CONFIG['TPL']['URL']; ?>/articles/rss.xml" />
<meta name="csrf-token" content="8d77c652f7"/>
<link rel="stylesheet" href="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/styles/common.css" type="text/css" />
<script src="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Medium' rel='stylesheet' type='text/css'>

<script src="/customjs/local/.nl.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo $CONFIG['TPL']['URL']; ?>/web-gallery/static/styles/common.css" type="text/css" />


		<?php
		
			$GetRanks = DB::Query("SELECT id,name FROM ranks WHERE id > 3 ORDER BY id DESC");
			
			foreach($GetRanks as $Ranks)
			{
			   echo "<div class=\"habblet-container \"><div class=\"cbb clearfix blue \"><h2 class=\"title\">{$Ranks['name']}s</h2><div style=\"padding:5px\"><p>";
			   $GetUsers = DB::Query('SELECT * FROM users WHERE rank =%s', $Ranks['id']);
					foreach($GetUsers as $Users)
					{
						if($Users['online'] == 1)
						{
							$OnlineStatus = "<font color=\"darkgreen\"><b>Online</b></font>"; 
						}
						else
						{
							$OnlineStatus = "<font color=\"darkred\"><b>Offline</b></font>";
						}
							echo  "<img src=\"http://www.habbo.nl/habbo-imaging/avatarimage?figure={$Users['look']}\"><p>Username: <strong>{$Users['username']}</strong><br>Motto: <strong>{$Users['motto']}</strong><br><small>Last Online: ".date('d/m/Y/ \o\m H:i', $Users['last_online'])."</small></p><p style=\"float:right;margin-top:-30px;margin-right:5px;\">{$OnlineStatus}</p>";
					}
				echo '</div></div></div>';
			}
		?>

