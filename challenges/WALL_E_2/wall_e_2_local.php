<?php
namespace Challenges\WALL_E_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$batterie = 86;
$cote = 6;
$dechets = ['4,5', '6,6', '3,3', '6,5', '1,6', '1,7', '7,6', '3,2'];
$chargeurs = ['5,7', '7,5'];

Html::debug($batterie, '$batterie');
Html::debug($cote, '$cote');
Html::debug($dechets, '$dechets');
Html::debug($chargeurs, '$chargeurs');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('77', 'Réponse attendue', 'success');