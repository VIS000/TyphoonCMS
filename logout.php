<?php
session_start();
session_destroy();
echo 'Uitgelogd';
header('Location: /index');
?>