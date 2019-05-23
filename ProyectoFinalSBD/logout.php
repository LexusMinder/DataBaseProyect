<?php 

include_once 'app/SessionControl.inc.php';
include_once 'app/Redirection.inc.php';
include_once 'app/config.inc.php';

SessionControl :: closeSession();
Redirection :: redirect(SERVER);