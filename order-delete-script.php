<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '5G');
error_reporting(E_ALL);
	
use Magento\Framework\App\Bootstrap;
require 'app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);

$obj = $bootstrap->getObjectManager();

$state = $obj->get('Magento\Framework\App\State');
$state->setAreaCode('frontend'); 

$registry = $obj->get('Magento\Framework\Registry');
$orderIds = ['1','2','3','4'];

if(count($orderIds) > 0){
	foreach($orderIds as $orderId){
		$order = $objectManager->create('Magento\Sales\Model\Order')->load($orderId);
		$registry->register('isSecureArea','true');
		$order->delete();
		$registry->unregister('isSecureArea'); 
	}
}
