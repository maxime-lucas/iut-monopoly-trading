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
$cards = getCardsNotProposedByUserId($_SESSION['auth']->id);
$page_title = "Proposer une ou plusieurs cartes";


include_once("views/header.php");
include_once("views/topbar.php");
include_once("views/navbar-left.php");

include_once("views/propose.php");

include_once("views/footer.php");
                                                                                                                                                                                                                                                                                                                                     