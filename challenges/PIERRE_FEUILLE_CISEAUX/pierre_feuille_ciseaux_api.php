<?php
namespace Challenges\PIERRE_FEUILLE_CISEAUX;

use Tainix\Game;
use Tainix\Html;

// INITIALISATION ---------------------
$game = new Game(
	$_ENV['TAINIX_KEY'],
	basename(__DIR__)
);

$data = $game->input();

// VISUALISATION DES DONNEES ----------
foreach ($data as $name => $value) {
	$$name = $value;
	Html::debug($$name, '$' . $name);
}

// CODE DU CHALLENGE ------------------

$output = (new PFCGame)->game(implode($data));


// REPONSE ----------------------------
$game->output(['data' => $output]);