<?php
namespace Challenges\FOOTBALL_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$dispositif = '3-5-2';
$forces = [35, 23, 39, 37, 9, 5, 1, 12, 38, 11, 13, 40, 2, 6, 28, 27, 32, 19, 33, 21, 7];
$postes = ['G', 'A', 'M', 'D', 'A', 'A', 'M', 'G', 'D', 'M', 'A', 'D', 'M', 'A', 'M', 'M', 'A', 'A', 'G', 'M', 'D'];

Html::debug($dispositif, '$dispositif');
Html::debug($forces, '$forces');
Html::debug($postes, '$postes');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('11-2-8-3-0-16-14-15-1-19-9', 'Réponse attendue', 'success');