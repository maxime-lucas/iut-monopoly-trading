<?php
include_once("models/sessions.php");
include_once("models/tConnected.php");
include_once("models/tCards.php");

updateConnected();

if(!isLogged())
{
	header('location: login.php');
	exit(0);
}

$user = getInfosUsersById($_SESSION['auth']->id);
$cards = getCardsByUserId($user->id);
$page_title = "Mon Compte";

include_once("views/account.php");
                                                                                                                                                                                                                                                                                                                                     