<?php
/*
___________             .__                         _________     _____    _________
\__    ___/__.__.______ |  |__   ____   ____   ____ \_   ___ \   /     \  /   _____/
  |    | <   |  |\____ \|  |  \ /  _ \ /  _ \ /    \/    \  \/  /  \ /  \ \_____  \ 
  |    |  \___  ||  |_> >   Y  (  <_> |  <_> )   |  \     \____/    Y    \/        \
  |____|  / ____||   __/|___|  /\____/ \____/|___|  /\______  /\____|__  /_______  /
          \/     |__|        \/                   \/        \/         \/        \/ 
						    VERSION v1.2 - Private  Edition
							   Created by VIS000DEVELOPMENT
*/
$CONFIG['DB'] = array(
'HOST' => 'p:127.0.0.1',
'USER' => 'root',
'PASS' => 'lol',
'NAME' => 'phoenix'
);

$CONFIG['TPL'] = array(
'SKIN' => 'Habbo',
'URL'  => 'http://localhost/gs',
'NAME' => 'Habbo',
'SLOG' => 'Waar het leuke begint!',
'MNT'  => true,
);

$CONFIG['USERS'] = array(
'motto' 	=> 'Hello!',
'look' 		=> 'hr-105-34.lg-270-82.sh-290-62.hd-180-1.ch-210-87',
'credits' 	=> 90000,
'pixels' 	=> 250
);

$CONFIG['CLIENT'] = array(
'IPADDRES' => '127.0.0.1',
'SERVPORT' =>  30000,
'BASE_DIR' => 'http://habworld.eu/r63',
'EXT_VARS' => 'http://habworld.eu/r63/external_variables.txt',
'EXT_TXTS' => 'http://habworld.eu/r63/external_flash_texts.txt',
'FURNIDAT' => 'http://habworld.eu/r63/furnidata.txt',
'PRODUDAT' => 'http://habworld.eu/r63/productdata.txt',
'LOAD_TXT' => 'Wacht even... '.$CONFIG['TPL']['NAME'].' is aan het laden',
'HABBOSWF' => 'Habbo.swf'
);

?>