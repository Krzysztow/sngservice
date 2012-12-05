<?php
require_once 'SNGjsonRPCServer.php';
require 'snghandler.php';

$sngHandler = new SngHandler();
SNGjsonRPCServer::handle($sngHandler)
	or print 'no request';
?>
