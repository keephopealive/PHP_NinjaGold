<?php
session_start();

if(isset($_POST['action']) && $_POST['action'] == 'reset')
	session_destroy();

if(isset($_POST['action']) && $_POST['action'] == 'farm')
	$gold = rand(10,20);
else if(isset($_POST['action']) && $_POST['action'] == 'cave')
	$gold = rand(5,10);
else if(isset($_POST['action']) && $_POST['action'] == 'house')
	$gold = rand(2,5);
else if(isset($_POST['action']) && $_POST['action'] == 'casino')
	$gold = rand(-50,50);

$_SESSION['totalGold'] = $_SESSION['totalGold'] + $gold;	

if($gold < 0 )
	$_SESSION['messages'] = '<p class="red"> You entered a ' . $_POST['action'] . '  and lost ' . ($gold* (-1)) . ' gold! 2014-11-14 9:45am</p>' . $_SESSION['messages'] ;	
else
	$_SESSION['messages'] = '<p>You entered a ' . $_POST['action'] . '  and earned ' . $gold . ' gold! ' . $date . '</p>' . $_SESSION['messages'] ;	

header('location: index.php');
?>