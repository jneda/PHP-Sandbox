<?php
namespace Challenges\FOOTBALL_3;

use Tainix\Html;

// ECHANTILLON ------------------------
$group = ['HON', 'UKR', 'POL', 'TUR', 'FRA'];
$scores = ['HON_UKR_0_1', 'HON_POL_1_3', 'HON_TUR_0_0', 'HON_FRA_1_2', 'UKR_HON_4_0', 'UKR_POL_0_0', 'UKR_TUR_3_0', 'UKR_FRA_4_2', 'POL_HON_1_0', 'POL_UKR_0_2', 'POL_TUR_2_2', 'POL_FRA_2_0', 'TUR_HON_0_4', 'TUR_UKR_2_0', 'TUR_POL_2_0', 'TUR_FRA_3_4', 'FRA_HON_0_0', 'FRA_UKR_0_0', 'FRA_POL_0_2', 'FRA_TUR_1_4'];

Html::debug($group, '$group');
Html::debug($scores, '$scores');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('UKRPOLTURFRAHON', 'Réponse attendue', 'success');