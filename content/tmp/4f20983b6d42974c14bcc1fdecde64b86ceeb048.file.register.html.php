<?php /* Smarty version Smarty-3.1.14, created on 2013-12-14 18:56:19
         compiled from "tpl\Habbo\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1417252ac9bc301e840-61479386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f20983b6d42974c14bcc1fdecde64b86ceeb048' => 
    array (
      0 => 'tpl\\Habbo\\register.html',
      1 => 1384879620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417252ac9bc301e840-61479386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RegisterSystem' => 0,
    'hotelname' => 0,
    'url' => 0,
    'users_online' => 0,
    'RegError' => 0,
    'Copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ac9bc30baeb0_60911982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac9bc30baeb0_60911982')) {function content_52ac9bc30baeb0_60911982($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['RegisterSystem']->value;?>

<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['hotelname']->value;?>
 - Waar het altijd leuk is!</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/layout/css.css">
	</head>
	
	<body>
		<div class="maincontainer_reg">
		<p style="font-size:15px;font-family:Arial;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['users_online']->value;?>
 user(s) online!</p>
		<img src="layout/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" border="0">
		
		<center>
		<br>
		<?php if (isset($_smarty_tpl->tpl_vars['RegError']->value)){?>
		<div class="error"><?php echo $_smarty_tpl->tpl_vars['RegError']->value;?>
</div>
		<?php }else{ ?>
		<br>
		<?php }?>
		<br>
		</center>
		<form name="input" action="#" method="post">
		<div class="form"><input type="textbox" name="reg_email" class="user" value="" placeholder="  E-Mail Adress"></div>
		<br>
		<div class="form"><input type="textbox" name="reg_username" class="user" value="" placeholder="  Gebruikersnaam"></div>
		 <br>
		 <div class="form"><input type="password" name="reg_password" class="user" value="" placeholder="  Wachtwoord"></div>
		<br>
		 <label>Geboortedatum</label> <br>
			  <span id="bday-selects">  
		<select name="reg_bday" id="bean_day" class="dateselector"><option value="">Dag</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> <select name="bean.month" id="bean_month" class="dateselector"><option value="">Maand</option><option value="1">januari</option><option value="2">Februari</option><option value="3">Maart</option><option value="4">April</option><option value="5">Mei</option><option value="6">Juni</option><option value="7">Juli</option><option value="8">Augustus</option><option value="9">September</option><option value="10">Oktober</option><option value="11">November</option><option value="12">December</option></select> <select name="bean.year" id="bean_year" class="dateselector"><option value="">Jaar</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select> 			  </span>  
		<br>
		<br>
		<button href="/" id="confirm" class="loginbutton"  onclick="document.forms[0].submit();return false;" >Registreren</button>
		<br><p class="footer_reg"><?php echo $_smarty_tpl->tpl_vars['Copyright']->value;?>
</p>
		</form>
		</div>
	</body>
</html><?php }} ?>