<?php
include_once 'Core.class.php';

class Habbo extends Core
{
	public $RegError;
	
	public function construct($CONFIG)
	{		
		parent::__construct($CONFIG);
	}
	
	public function LoginSystem($POSTS)
	{
		
		if(isset($POSTS['username']) && isset($POSTS['password']))
		{
			$username = trim($POSTS['username']);
			$password = md5($POSTS['password']);
			
			DB::Query('SELECT * FROM users WHERE password=%s AND username=%s', $password, $username);
			if(DB::count() == 1)
			{
				DB::Query('SELECT * FROM bans WHERE value=%s', $username);
				if(DB::count() == 1)
				{
					$this->RegError = 'Oeps, je bent verbannen!';
				}
				else
				{
					$_SESSION['username'] = $username;
					$_SESSION['loggedin'] = true;
					$_SESSION['mail']     = $this->SelectFromUsername($username, 'mail');
					Header('Location: '.self::$CONFIG['TPL']['URL'].'/me');
				}
			}
			else
			{
				$this->RegError = 'Inloggen mislukt!';
			}
		}
	}
	
	public function SelectFromUsername($username, $column)
	{
		$query = DB::Query('SELECT * FROM users WHERE username=%s', $username);
		return $query[0][$column];
	}
	
	public function UpdateMotto($motto, $username)
	{
		if(isset($motto))
		{
			DB::Query('UPDATE users SET motto=%s WHERE username=%s', $motto, $username);
		}
	}
	
	public function SSOTicketGenerator($username)
	{
		if(@$_GET['url'] == 'client')
		{
			$SSOTicket = 'MuDKiP/'.md5(time()).'/'.(rand(0, 9999)).'/'.rand(0,9999).'/lolzooi';
			
			DB::Query('UPDATE users SET auth_ticket=%s WHERE username=%s', $SSOTicket, $username);
			DB::Query('UPDATE users SET ip_last=%s WHERE username=%s', $this->IPaddr(), $username);
			return $SSOTicket;
		}
		else
		{
			return null;
		}
	}
	
	public function UserSettings($POSTS, $username)
	{
		if(isset($POSTS['acc_motto']))
		{
			DB::Query('UPDATE users SET motto=%s WHERE username=%s', $POSTS['acc_motto'], $username);
			$this->RegError = 'Gegevens bijgewerkt :)';
		}
		
		if(isset($POSTS['acc_email']))
		{
			DB::Query('UPDATE users SET mail=%s WHERE username=%s', $POSTS['acc_email'], $username);
			$this->RegError = 'Gegevens bijgewerkt :)';
		}
		
		if(isset($POSTS['showOnlineStatus']))
		{
			DB::Query('UPDATE users SET hide_online=%s WHERE username=%s', $POSTS['showOnlineStatus'], $username);
			$this->RegError = 'Gegevens bijgewerkt :)';
		}
		
		if(isset($POSTS['AcceptTrading']))
		{
			DB::Query('UPDATE users SET accept_trading=%s WHERE username=%s', $POSTS['AcceptTrading'], $username);
			$this->RegError = 'Gegevens bijgewerkt :)';
		}
		
		if(isset($POSTS['pw_old']) && isset($POSTS['pw_new']) && strlen($POSTS['pw_old']) > 3)
		{
			DB::Query('SELECT null FROM users WHERE username=%s AND password=%s', $_SESSION['username'], md5($POSTS['pw_old']));
			if(DB::Count() == 1)
			{
				DB::Query('UPDATE users SET password=%s WHERE username=%s', md5($POSTS['pw_new']), $_SESSION['username']);
				$this->RegError = 'Gegevens bijgewerkt :)';
			}
			else
			{
				echo '<script>alert(\'Wachtwoord is verkeerd\')</script>';
			}
		}
		
	}
	
	public function RegisterUser($POSTS)
	{
		if(isset($POSTS['reg_username']) and isset($POSTS['reg_email']) and isset($POSTS['reg_password']) and isset($POSTS['reg_bday']))
		{

				DB::Query('SELECT * FROM users WHERE username=%s', $POSTS['reg_username']);
				if(DB::count() != 0)
				{
					$this->RegError = 'Gebruikersnaam bestaat al';
				}
				else
				{
				
					if (!preg_match('/@/', $POSTS['reg_email']))
					{
						$this->RegError = 'Ongeldige Email!';
					}
					else
					{
						if(strlen($POSTS['reg_username']) > 32 or strlen($POSTS['reg_username']) < 4)
						{
							$this->RegError = 'Je naam is te lang / te kort';
						}
						else
						{
							if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $POSTS['reg_username']))
							{
								$this->RegError = 'Je naam bevat niet toegestaande tekens';
							}
							else
							{
								DB::Query('SELECT * FROM users WHERE mail=%s', $POSTS['reg_email']);
								
								if(DB::Count() == 1)
								{
									$this->RegError = 'Email is al geregistreerd';
								}
								else
								{
									DB::Insert('users', array(
									'username' 			=> trim($POSTS['reg_username']),
									'password' 			=> md5($POSTS['reg_password']),
									'mail'	   			=> $POSTS['reg_email'],
									'rank'     			=> 1,
									'credits'  			=> self::$CONFIG['USERS']['credits'],
									'motto'    			=> self::$CONFIG['USERS']['motto'],
									'look'     			=> self::$CONFIG['USERS']['look'],
									'activity_points'	=> self::$CONFIG['USERS']['pixels'],
									'gender' 			=> 'M',
									'ip_reg'			=> $this->IPaddr(),
									'ip_last'			=> $this->IPaddr(),
									'account_created'   => time(),
									'last_online'		=> time()
									));
									
									$_SESSION['username'] = $POSTS['reg_username'];
									$_SESSION['loggedin'] = true;
									$_SESSION['mail']     = $POSTS['reg_email'];
									Header('Location: '.self::$CONFIG['TPL']['URL'].'/me');
								}
							}
						}
					}
			}
		
	  }
	  
	}
	
}