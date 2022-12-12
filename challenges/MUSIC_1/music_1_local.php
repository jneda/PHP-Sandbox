<?php
namespace Challenges\MUSIC_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$notes = ['Mi', 'Si', 'Sol', 'La', 'Fa', 'Re', 'Do'];
$music = 'Do,La,Sol,Mi,Si,Si,Sol,Si,La,La,Si,Do,La,Mi,Si,Si,Fa,La,Do,Do,Do';

Html::debug($notes, '$notes');
Html::debug($music, '$music');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('2,6,2,5,1,0,5', 'Réponse attendue', 'success');