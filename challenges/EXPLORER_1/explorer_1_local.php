<?php
namespace Challenges\EXPLORER_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$planetes = ['LMC565:tropical jungle', 'ISY322:pluvieux averses', 'PUR307:tropical', 'NYF841:froid, pluvieux', 'ZOY574:polaire', 'DFJ074:froid venteux, pluvieux, humide, continental', 'KOK433:aride sans vie, tropical jungle, continental, tropical', 'HMO421:tropical', 'FYH590:tropical', 'WYR948:tropical', 'POB596:polaire, pluvieux averses', 'URJ421:tropical jungle', 'FJQ525:humide et moite', 'UCF550:tropical', 'XHT696:tropical, tropical jungle, pluvieux, polaire glacial', 'QLE015:humide et moite', 'XQZ086:pluvieux'];
$climat = 'pluvieux';

Html::debug($planetes, '$planetes');
Html::debug($climat, '$climat');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('NYFDFJXHTXQZ', 'Réponse attendue', 'success');