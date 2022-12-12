<?php
namespace Challenges\PIZZAS;

use Tainix\Html;

// ECHANTILLON ------------------------
$ingredients = ['tomates:2', 'champignons:2', 'mozzarella:2', 'jambon:2', 'serrano:5', 'chevre:2', 'oeuf:2', 'chorizo:4', 'saumon:4', 'basilic:1', 'oignons:2', 'poivron:3', 'salade:1', 'anchois:3', 'olive:2', 'ananas:5'];
$pizzas = ['jambon,jambon,saumon,basilic,oignons', 'oignons,ananas,salade,champignons,poivron,chorizo', 'saumon,olive,ananas', 'tomates,mozzarella,champignons', 'oeuf,chorizo,mozzarella,champignons,poivron,mozzarella', 'chevre,poivron,basilic,jambon', 'jambon,salade,jambon,chorizo', 'chevre,chevre,basilic', 'salade,saumon,champignons', 'tomates,salade,ananas,basilic,oignons', 'oeuf,chorizo,mozzarella,serrano,chevre', 'olive,serrano,jambon,serrano,tomates,serrano', 'chorizo,chevre,chevre', 'ananas,mozzarella,anchois,chevre,ananas,tomates', 'basilic,tomates,saumon,ananas,salade', 'oeuf,oignons,basilic,chevre,tomates,oignons', 'olive,oignons,tomates,mozzarella,poivron'];
$pizzaiolos = ['leonardo', 'raphael', 'raphael', 'leonardo', 'leonardo', 'donatello', 'donatello', 'leonardo', 'michelangelo', 'michelangelo', 'donatello', 'leonardo', 'raphael', 'raphael', 'donatello', 'donatello', 'raphael'];

Html::debug($ingredients, '$ingredients');
Html::debug($pizzas, '$pizzas');
Html::debug($pizzaiolos, '$pizzaiolos');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('273', 'Réponse attendue', 'success');