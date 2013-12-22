<?php
include_once 'meekrodb.php';
session_start();

class Core
{
	protected static $CONFIG;
	public $MaintenanceValue;
	
	public function __construct($CONFIG)
	{
		DB::$user = $CONFIG['DB']['USER'];
		DB::$password = $CONFIG['DB']['PASS'];
		DB::$dbName = $CONFIG['DB']['NAME'];
		DB::$host = $CONFIG['DB']['HOST']; 
		
		self::$CONFIG = $CONFIG;
		
		$this->Maintenance();
	}
	
	private function Maintenance()
	{
		if(file_exists('content/maintenance.txt'))
		{
			$boolean = file_get_contents('content/maintenance.txt');
			
			if($boolean == 'true')
			{
				$this->MaintenanceValue = true;
			}
		}
			
	}
	
	public function Status($key)
	{
		$query = DB::Query('SELECT * FROM server_status');
		return $query[0][$key];
	}
	
	public function IPaddr()
	{
		if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			return $_SERVER['REMOTE_ADDR'];
		}
	}
	

	public function SetLoggedinValue()
	{
		@$_SESSION['loggedin'] == false;
	}
	
	
	public function GetArticles()
	{
		$Articles = DB::Query('SELECT * FROM cms_news  ORDER BY `id` ASC LIMIT 7');
		return $Articles;
	}
	
	public function GetCopyright()
	{
		if(file_exists('copyright.txt'))
		{
			return file_get_contents('copyright.txt');
		}
		else
		{
			return 'Error: copyright.txt not found in root folder!';
		}
	}
	
	public function GetArticle($id)
	{
		$longstory = DB::Query('SELECT * FROM cms_news WHERE id=%s', $id);
		return $longstory[0];
	}
	
	public function HotCampaigns()
	{
		$Campaign = DB::Query('SELECT * FROM site_hotcampaigns ORDER BY `id` ASC LIMIT 14');
		return $Campaign;
	}

}