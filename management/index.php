<?php
include_once '../global.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title><?php echo $CONFIG['TPL']['NAME']; ?> -> Housekeeping</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="" method="post">
					<label for="login">E-mail:</label>
					<input id="login" name="hk_mail" value="<?php echo $_SESSION['mail']; ?>" class="text" />
					<label for="pass">Wachtwoord:</label>
					<input id="pass" name="hk_password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" class="ok">Login</button> 
				</form>
			</div>
			<div class="footer"><a href="TyphoonCMS ASE</div>
		</div>
	</div>
</div>

</body>
</html>

<?php
@$management->HK_Login($_POST['hk_mail'], $_POST['hk_password']);
?>