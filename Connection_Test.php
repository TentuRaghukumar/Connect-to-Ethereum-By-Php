<?php

require_once "vendor/autoload.php";

use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;

$web3 = new Web3(new HttpProvider(new HttpRequestManager("https://ropsten.infura.io/v3/27c60a2fc1dc488db25079beae676676")));

$eth = $web3->eth;

$eth->blockNumber(function ($err, $data) {
	if ($data){
        echo "Latest block number is: ". $data . " \n";
	}elseif($err){
	echo "Something Went Wrong";
	}});
?>
