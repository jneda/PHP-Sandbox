<?php
declare(strict_types=1);

namespace Challenges\PIERRE_FEUILLE_CISEAUX;

final class PFCGame
{
  private const PIERRE = 'P';
  private const FEUILLE = 'F';
  private const CISEAUX = 'C';

  public function hand(string $play): string
  {
    switch ($play) {
      case self::FEUILLE:
        return self::CISEAUX;
      case self::CISEAUX:
        return self::PIERRE;
      case self::PIERRE:
        return self::FEUILLE;
    }
  }

  public function game(string $plays): string
  {
    $result = '';
    foreach(\str_split($plays) as $play) {
      $result .= $this->hand($play);
    }
    return $result;
  }
}