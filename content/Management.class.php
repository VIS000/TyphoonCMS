<?php
include_once 'Core.class.php';

class Management extends Core
{
	public function __construct($CONFIG)
	{
		parent::__construct($CONFIG);
	}
	
	public function HK_Login($email, $password)
	{
		if(isset($_SESSION['housekeeping']))
		{
			header('Location: /management/dashboard.php');
		}
		
		if(isset($email) and isset($password))
		{
			$Rank = DB::Query('SELECT * FROM users WHERE mail=%s', $email);
					
			if($Rank[0]['rank'] <= 3)
			{
				echo '<center>Jij bent helaas geen manager van dit hotel!</center>';
				$this->Logger($_SESSION['username'], $this->IPaddr(), 'Failed login attempt(Ranked=false)');
			}
			else
			{
				DB::Query('SELECT * FROM users WHERE mail=%s AND password=%s', $email, md5($password));
				if(DB::count() == 1)
				{
					$_SESSION['housekeeping'] = 'imaygetin123lolllzz';
					header('Location: /management/dashboard.php');
					$this->Logger($_SESSION['username'], $this->IPaddr(), 'User logged in ');
				}
				else
				{
					echo '<center>Kan niet inloggen, check de opgegeven gegevens</center>';
					$this->Logger($_SESSION['username'], $this->IPaddr(), 'Failed login attempt(Ranked=true)');
				}
			}
		}
	}
	
	private function Logger($username, $ip ,$action)
	{
		$logfilelocation = '../logs/housekeeping.txt';
		if(file_exists($logfilelocation) and is_writable($logfilelocation))
		{
			$logfile = fopen($logfilelocation, 'a');
			
			$String = $action.'USERNAME:'.$username.' AT IP: '.$ip.' AT TIME: '.date('l jS \of F Y h:i:s A').PHP_EOL;
			
			fwrite($logfile, $String);
			
			fclose($logfile);
		}
		else
		{
			die('Logfile is not loaded!');
		}
	}
	
	public function Rooms()
	{
		DB::Query('SELECT * FROM rooms');
		return DB::Count();
	}
	
	public function Articles()
	{
		DB::Query('SELECT * FROM cms_news');
		return DB::Count();
	}
	
	public function PlaceNews($title, $shortstory, $text, $username, $image)
	{
		DB::Insert('cms_news', array(
		'title'     => $title,
		'shortstory'=> $shortstory,
		'longstory' => $text,
		'image'     => '/web-gallery/promo/'.$image,
		'published' => date('d-M'),
		'author'    => $_SESSION['username']
		));
		
		return '<div class="n_ok"><p>Bericht geplaatst.</p></div>';
	}
	
	public function EditNews($title, $shortstory, $text, $username, $image)
	{
		DB::update('cms_news', array(
		'title'     => $title,
		'shortstory' => $shortstory,
		'longstory' => $text,
		'image'     => '/web-gallery/promo/'.$image,
		'published' => date('d-M-Y'),
		'author'    => $_SESSION['username']
		));
		
		return '<div class="n_ok"><p>Bericht Bijgewerkt.</p></div>';
	}
	
	public function PlaceCampaign($caption, $descr, $url, $image)
	{
		DB::Insert('site_hotcampaigns', array(
		'caption' => $caption,
		'descr'   => $descr,
		'url'	  => $url,
		'image_url'   => $image
		));
	}
	
	public function DeleteNews($id)
	{
		DB::Query('DELETE FROM cms_news WHERE id=%s', $id);
	}
	
	public function BanUser($bantype, $value, $reason)
	{
		DB::Insert('bans', array(
		'bantype' => $bantype,
		'value'   => $value,
		'reason'  => $reason,
		'added_by'=> $_SESSION['username']
		));
		
		return '<div class="n_ok"><p>Die gast is weg :).</p></div>';
	}
	
	public function SetMaintenance($boolean)
	{
		if($boolean == true)
		{
			file_put_contents('content/maintenance.txt', 'true');
		}
		else
		{
			file_put_contents('content/maintenance.txt', 'false');
		}
	}
}