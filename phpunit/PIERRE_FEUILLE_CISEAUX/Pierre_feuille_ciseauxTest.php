<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Challenges\PIERRE_FEUILLE_CISEAUX\PFCGame;

final class Pierre_feuille_ciseauxTest extends TestCase
{
	public function setUp(): void
	{
		parent::setUp();
		$this->PFCGame = new PFCGame;
	}

	// TES METHODES DE TEST ---------------------

	public function test_F_yields_C(): void
	{
		$this->assertEquals(
			$this->PFCGame->hand('F'),
			'C'
		);
	}

	public function test_C_yields_P(): void
	{
		$this->assertEquals(
			$this->PFCGame->hand('C'),
			'P'
		);
	}

	public function test_P_yields_F(): void
	{
		$this->assertEquals(
			$this->PFCGame->hand('P'),
			'F'
		);
	}

	public function test_PFC_yields_FCP(): void
	{
		$this->assertEquals(
			$this->PFCGame->game('PFC'),
			'FCP'
		);
	}

	public function test_PPP_yields_FFF(): void
	{
		$this->assertEquals(
			$this->PFCGame->game('PPP'),
			'FFF'
		);
	}
}